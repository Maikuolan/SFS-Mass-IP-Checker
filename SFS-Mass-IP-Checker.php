<?php /*
 WARNING: This project is still in the ALPHA stage, and isn't yet ready for
 deployment! Use of this script acknowledges your consent to abide by the SFS
 Acceptable Use Policy, available at <http://www.stopforumspam.com/legal>, and
 furthermore, that use of this script is done by your own behest and at your
 own risk! Because this is still in the ALPHA stage, expect imminent
 changes to occur. */

define('SFSMassIPChecker',true);
parse_str($_SERVER['QUERY_STRING'],$query);
$SFSMassIPChecker=array();
$SFSMassIPChecker['UserIPAddr']=$_SERVER['REMOTE_ADDR'];
$SFSMassIPChecker['UserAgent']='SFS-Mass-IP-Checker/0.0.1-ALPHA (https://github.com/Maikuolan/SFS-Mass-IP-Checker) via '.$SFSMassIPChecker['UserIPAddr'];
$SFSMassIPChecker['Counter']=0;
$SFSMassIPChecker['Limit']=9999;
$SFSMassIPChecker['Path']=@(__DIR__==='__DIR__')?dirname(__FILE__):__DIR__;
$SFSMassIPChecker['IPAddr']=(!empty($_POST['IPAddr']))?$_POST['IPAddr']:((!empty($query['IPAddr']))?$query['IPAddr']:'');
$SFSMassIPChecker['bannedipsAppend']='';
$SFSMassIPChecker['cleanAppend']='';
require $GLOBALS['SFSMassIPChecker']['Path'].'/private/lang_strings.php';

function ParseTemplate($pagedata)
	{
	$template=array();
	$template['file']=$GLOBALS['SFSMassIPChecker']['Path'].'/private/template.html';
	$template['handle']=fopen($template['file'],'rb');
	$template['data']=fread($template['handle'],filesize($template['file']));
	fclose($template['handle']);
	$template=$template['data'];
	$template=str_replace('{pagedata}',$pagedata,$template);
	return $template;
	}

function SFSMassIPCheckerFileFetcher($f)
	{
	if(!is_file($f))return false;
	$s=@ceil(filesize($f)/49152);
	$d='';
	if($s>0)
		{
		$fh=fopen($f,'rb');
		$r=0;
		while($r<$s)
			{
			$d.=fread($fh,49152);
			$r++;
			}
		fclose($fh);
		}
	return (!empty($d))?$d:false;
	}

if(!file_exists($SFSMassIPChecker['Path'].'/private/counter.dat'))
	{
	$SFSMassIPChecker['handle']=fopen($SFSMassIPChecker['Path'].'/private/counter.dat','w');
	fwrite($SFSMassIPChecker['handle'],'0');
	fclose($SFSMassIPChecker['handle']);
	if(!file_exists($SFSMassIPChecker['Path'].'/private/counter.dat'))die(ParseTemplate($SFSMassIPChecker['lang']['cant_write']));
	}
else $SFSMassIPChecker['Counter']+=SFSMassIPCheckerFileFetcher($SFSMassIPChecker['Path'].'/private/counter.dat');
$SFSMassIPChecker['CounterNew']=$SFSMassIPChecker['Counter'];

if(!file_exists($SFSMassIPChecker['Path'].'/private/bannedips.csv'))
	{
	die(ParseTemplate($SFSMassIPChecker['lang']['bannedips_missing_cant_zip']));
	/* I'll sort something out to manually get this at a later date. Also need a refresher function.
	if(!function_exists('zip_open'))die(ParseTemplate($SFSMassIPChecker['lang']['bannedips_missing_cant_zip']));
	if(!empty($_SERVER['REQUEST_URI']))
		{
		header('Refresh: 5; url='.$_SERVER['REQUEST_URI']);
		}
	$SFSMassIPChecker['handle']=stream_context_create(array('http'=>array('method'=>'GET','header'=>'Content-type: application/x-www-form-urlencoded; charset=iso-8859-1','user_agent'=>$SFSMassIPChecker['UserAgent'],'content'=>'','timeout'=>300)));
	$SFSMassIPChecker['handle']=@file_get_contents('http://www.stopforumspam.com/downloads/bannedips.zip',false,$SFSMassIPChecker['handle']);
	die(ParseTemplate($SFSMassIPChecker['lang']['bannedips_missing'])); */
	}

function SFSMassIPCheckerCheckIP($IPAddr)
	{
	if(!isset($GLOBALS['SFSMassIPChecker']['bannedips']))$GLOBALS['SFSMassIPChecker']['bannedips']=','.SFSMassIPCheckerFileFetcher($GLOBALS['SFSMassIPChecker']['Path'].'/private/bannedips.csv');
	if(!isset($GLOBALS['SFSMassIPChecker']['clean']))$GLOBALS['SFSMassIPChecker']['clean']=','.SFSMassIPCheckerFileFetcher($GLOBALS['SFSMassIPChecker']['Path'].'/private/clean.csv');
	if(is_array($IPAddr))
		{
		$IPAddr=array_unique($IPAddr);
		sort($IPAddr);
		$c=count($IPAddr);
		for($i=0;$i<$c;$i++)
			{
			$k=key($IPAddr);
			$IPAddr[$k]=SFSMassIPCheckerCheckIP($IPAddr[$k]);
			next($IPAddr);
			}
		return $IPAddr;
		}
	if(empty($IPAddr))return $IPAddr.','.$GLOBALS['SFSMassIPChecker']['lang']['failure_badip'].',0,-';
	if(substr_count($GLOBALS['SFSMassIPChecker']['bannedips'],','.$IPAddr.','))
		{
		return $IPAddr.','.$GLOBALS['SFSMassIPChecker']['lang']['success_local'].',>0,-';
		}
	if(substr_count($GLOBALS['SFSMassIPChecker']['clean'],','.$IPAddr.','))
		{
		return $IPAddr.','.$GLOBALS['SFSMassIPChecker']['lang']['success_local'].',0,-';
		}
	$Context=stream_context_create(array('http'=>array('method'=>'POST','header'=>'Content-type: application/x-www-form-urlencoded; charset=iso-8859-1','user_agent'=>$GLOBALS['SFSMassIPChecker']['UserAgent'],'content'=>'ip='.urlencode($IPAddr),'timeout'=>9)));
	$Results=@file_get_contents('http://www.stopforumspam.com/api?ip='.urlencode($IPAddr),false,$Context);
	if(substr_count($Results,'request not understood'))$appears=$GLOBALS['SFSMassIPChecker']['lang']['failure_notunderstood'];
	else if(!$Results)$appears=$GLOBALS['SFSMassIPChecker']['lang']['failure_timeout'];
	if(empty($appears))
		{
		$x=preg_match('/<appears>(.{0,64})<\/appears>/i',$Results,$appears);
		$appears=($x)?$appears[1]:'';
		$x=preg_match('/<lastseen>(.{0,64})<\/lastseen>/i',$Results,$lastseen);
		$lastseen=($x)?$lastseen[1]:'';
		$x=preg_match('/<frequency>(.{0,64})<\/frequency>/i',$Results,$frequency);
		$frequency=($x)?$frequency[1]:'';
		}
	else if($appears=='yes'||$appears=='no')$appears=$GLOBALS['SFSMassIPChecker']['lang']['success_remote'];
	if(empty($frequency))$frequency=0;
	if(empty($lastseen))$lastseen='-';
	$GLOBALS['SFSMassIPChecker']['CounterNew']++;
	if($frequency>0)$GLOBALS['SFSMassIPChecker']['bannedipsAppend'].=$IPAddr.',';
	else $GLOBALS['SFSMassIPChecker']['cleanAppend'].=$IPAddr.',';
	return $IPAddr.','.$appears.','.$frequency.','.$lastseen;
	}

/* Please ignore the commented out data; It's here as a reference to the code
   I'd originally written for my CMS to check IPs against the SFS database
   en-masse, but won't have anything to do with the SFS Mass IP Checker,
   because I intend to entirely re-write everything from scratch. This
   referencing helps to remind me what of what I did before, but isn't
   functional anymore.
if($SFSMassIPChecker['Counter']>$SFSMassIPChecker['Limit'])
	{
	$page_data='<center><span class=\'fs10px\'>The Mass IP Checker has reached its daily query limit for today, but you can try again in 24 hours if you&#39;d like. Sorry for the inconveniance.</span></center>';
	}
else
	{
	if(!$checker_data=$_POST['checker_data'])if(!$checker_data=$query['checker_data'])$checker_data=false;
	if(!$checker_input=$_POST['checker_input'])if(!$checker_input=$query['checker_input'])$checker_input=false;
	if(!$format=$_POST['format'])if(!$format=$query['format'])$format=false;
	if($format=='txtmode'||$format=='pdfmode')$checker_data=$format;
	if(!$checker_data&&!$checker_input&&!$format)
		{
		$page_data='<form action=\'\' method=\'POST\' name=\'mass_ip_checker\'><center><span class=\'fs12pxb\'>Select which format to display results as:</span><br /><span class=\'fs10px\'><input type=\'radio\' name=\'format\' value=\'txtmode\' /> Inline CSV {separator} <input type=\'radio\' name=\'format\' value=\'pdfmode\' /> Download PDF</span><br /><br /><button type=\'button\' onclick=\'javascript:SubmitForm('mass_ip_checker');\' class=\'fs12pxb\'>{lang:word_submit}</button></center></form>';
		}
	else
		{
		if(!$checker_input)
			{
			$page_data='<form action=\'\' method=\'POST\' name=\'mass_ip_checker\'><center><span class=\'fs12pxb\'>{lang:word_write}{lang:word_to_lc}{lang:word_check}:</span><br /><span class=\'fs10px\'>Separate entries via commas or linebreaks. Entries should consist of IPv4 addresses.</span></center><br /><br /><input type=\'hidden\' value=\''.$format.'\' name=\'checker_data\' id=\'checker_data\' /><textarea name=\'checker_input\' id=\'checker_input\'></textarea><br /><br /><button type=\'button\' onclick=\'javascript:SubmitForm('mass_ip_checker');\' class=\'fs12pxb\'>{lang:word_check}</button></form>';
			}
		}
	}
if($page_data)
	{
	// Normal form display here.
	}
else if($format=='txtmode'&&$page_output)
	{
	header('Content-type: text/plain');
	echo $page_output;
	}
else if($format=='pdfmode'&&$page_output)
	{
	$page_output='<center><table width=\'100%\'><tr><td align=\'center\' colspan=\'5\'><em>File generated '.multical(1,time-timezone).' via <a href=\''.$uaIPuri.'\'>'.$uaIPuri.'</a></em></td></tr><tr><td align=\'center\' colspan=\'5\'><hr /></td></tr>-\''.$page_output.'\'-</table></center>';
	$page_output=str_replace(',','</td><td align=\'left\'>',$page_output);
	$page_output=str_replace('\'\n\'','</td></tr><tr><td align=\'center\' colspan=\'5\'><hr /></td></tr><tr><td align=\'left\'>',$page_output);
	$page_output=str_replace('-\'\'','<tr><td align=\'left\'>',$page_output);
	$page_output=str_replace('\'\'-','</td></tr>',$page_output);
	$page_output=str_replace('\n','',$page_output);
	require_once(global_root.'modules/tcpdf/config/lang/eng.php');
	require_once(global_root.'modules/tcpdf/tcpdf.php');
	$pdf=new TCPDF(PDF_PAGE_ORIENTATION,PDF_UNIT,PDF_PAGE_FORMAT,true,'UTF-8',false);
	$pdf->SetCreator(PDF_CREATOR);
	$pdf->SetAuthor(unentitize(global_sitename));
	$pdf->SetTitle(unentitize($thread['title']));
	$pdf->SetSubject(unentitize($thread['object']));
	$pdf->SetKeywords($myseo);
	$pdf->SetHeaderData('../../../images/2468med.png',20,'Mass IP Checker for Stop Forum Spam (http://www.stopforumspam.com/)',$GLOBALS['citeUA'],array(0,0,0),array(0,0,0));
	$pdf->setFooterData($tc=array(0,0,0),$lc=array(0,0,0));
	$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN,'',PDF_FONT_SIZE_MAIN));
	$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA,'',PDF_FONT_SIZE_DATA));
	$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
	$pdf->SetMargins(PDF_MARGIN_LEFT,PDF_MARGIN_TOP,PDF_MARGIN_RIGHT);
	$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
	$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
	$pdf->SetAutoPageBreak(TRUE,PDF_MARGIN_BOTTOM);
	$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
	$pdf->setLanguageArray($l);
	$pdf->setFontSubsetting(true);
	$pdf->SetFont('dejavusans','',10,'',true);
	$pdf->AddPage();
	$pdf->setTextShadow(array('enabled'=>true,'depth_w'=>0.2,'depth_h'=>0.2,'color'=>array(196,196,196),'opacity'=>1,'blend_mode'=>'Normal'));
	$pdf->writeHTMLCell($w=0,$h=0,$x='',$y='',$page_output,$border=0,$ln=1,$fill=0,$reseth=true,$align='',$autopadding=true);
	$pdf->Output('Mass-IP-Checker-'.seed.'.pdf','I');
	} */

$SFSMassIPChecker['PageBody']='<form action=\'\' method=\'POST\' name=\'SFSMassIPChecker\'><center>Separate entries via commas or linebreaks. Entries should consist of IPv4 addresses.<br /><br /><textarea name=\'IPAddr\' id=\'IPAddr\' style=\'width:98%;height:100px;\'></textarea><br /><br /><input type=\'submit\' value=\'Submit!\' /></center></form>';

if(!empty($SFSMassIPChecker['IPAddr']))
	{
	$SFSMassIPChecker['IPAddr']=preg_replace('/[^,\n0-9\.]/','',$SFSMassIPChecker['IPAddr']);
	$SFSMassIPChecker['IPAddr']=preg_split('/[,\n]+/',$SFSMassIPChecker['IPAddr'],-1,PREG_SPLIT_NO_EMPTY);
	$SFSMassIPChecker['bannedips']=SFSMassIPCheckerFileFetcher($SFSMassIPChecker['Path'].'/private/bannedips.csv');
	$SFSMassIPChecker['Results']=SFSMassIPCheckerCheckIP($SFSMassIPChecker['IPAddr']);
	$SFSMassIPChecker['PageBody'].='<hr /><center><table style="width:500px;text-align:center;"><tr><td><strong>IP Address</strong></td><td><strong>Lookup Status</strong></td><td><strong>Spammer?</strong></td><td><strong>Frequency</strong></td><td><strong>Last Seen</strong></td></tr>';
	$SFSMassIPChecker['c']=count($SFSMassIPChecker['Results']);
	for($SFSMassIPChecker['i']=0;$SFSMassIPChecker['i']<$SFSMassIPChecker['c'];$SFSMassIPChecker['i']++)
		{
		$SFSMassIPChecker['Results'][$SFSMassIPChecker['i']]=explode(',',$SFSMassIPChecker['Results'][$SFSMassIPChecker['i']]);
		if($SFSMassIPChecker['Results'][$SFSMassIPChecker['i']][2]==='0')
			{
			$SFSMassIPChecker['PageBody'].='<tr><td><a href="http://www.stopforumspam.com/ipcheck/'.$SFSMassIPChecker['Results'][$SFSMassIPChecker['i']][0].'">'.$SFSMassIPChecker['Results'][$SFSMassIPChecker['i']][0].'</a></td><td>'.$SFSMassIPChecker['Results'][$SFSMassIPChecker['i']][1].'</td><td><span style=\'color:#009900\'>Not Listed</span></td><td>'.$SFSMassIPChecker['Results'][$SFSMassIPChecker['i']][2].'</td><td>'.$SFSMassIPChecker['Results'][$SFSMassIPChecker['i']][3].'</td></tr>';
			}
		else
			{
			$SFSMassIPChecker['PageBody'].='<tr><td><a href="http://www.stopforumspam.com/ipcheck/'.$SFSMassIPChecker['Results'][$SFSMassIPChecker['i']][0].'">'.$SFSMassIPChecker['Results'][$SFSMassIPChecker['i']][0].'</a></td><td>'.$SFSMassIPChecker['Results'][$SFSMassIPChecker['i']][1].'</td><td><span style=\'color:#990000\'>Listed</span></td><td>'.$SFSMassIPChecker['Results'][$SFSMassIPChecker['i']][2].'</td><td>'.$SFSMassIPChecker['Results'][$SFSMassIPChecker['i']][3].'</td></tr>';
			}
		}
	unset($SFSMassIPChecker['Results']);
	$SFSMassIPChecker['PageBody'].='</table></center>';
	if($SFSMassIPChecker['CounterNew']!==$SFSMassIPChecker['Counter'])
		{
		$SFSMassIPChecker['handle']=fopen($SFSMassIPChecker['Path'].'/private/counter.dat','w');
		fwrite($SFSMassIPChecker['handle'],$SFSMassIPChecker['CounterNew']);
		fclose($SFSMassIPChecker['handle']);
		}
	if(!empty($SFSMassIPChecker['bannedipsAppend']))
		{
		$SFSMassIPChecker['handle']=fopen($SFSMassIPChecker['Path'].'/private/bannedips.csv','a');
		fwrite($SFSMassIPChecker['handle'],$SFSMassIPChecker['bannedipsAppend']);
		fclose($SFSMassIPChecker['handle']);
		}
	if(!empty($SFSMassIPChecker['cleanAppend']))
		{
		$SFSMassIPChecker['handle']=fopen($SFSMassIPChecker['Path'].'/private/clean.csv','a');
		fwrite($SFSMassIPChecker['handle'],$SFSMassIPChecker['cleanAppend']);
		fclose($SFSMassIPChecker['handle']);
		}
	}

die(ParseTemplate($SFSMassIPChecker['PageBody']));
?>