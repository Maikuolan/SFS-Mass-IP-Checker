<?php /*
 SFS MASS IP Checker v0.0.2-ALPHA
 This File: SFS MASS IP Checker Core Script File (3rd December 2015).

                                     ~ ~ ~
 This document and its associated package can be downloaded for free from:
 - GitHub <https://github.com/Maikuolan/SFS-Mass-IP-Checker>.

                                     ~ ~ ~
 WARNING: This project is still in the ALPHA stage, and isn't yet ready for
 deployment! Use of this script acknowledges your consent to abide by the SFS
 Acceptable Use Policy, available at <http://www.stopforumspam.com/legal>, and
 furthermore, that use of this script is done by your own behest and at your
 own risk! Because this is still in the ALPHA stage, expect imminent
 changes to occur.

                                     ~ ~ ~
 ADDITIONAL WARNING: If you use this script, please do so privately, and don't
 offer public access to your copy! This is because the script is an incomplete
 work-in-progress, and without having yet implemented the appropriate and
 future planned checks-and-balances, the script could be exploited by a
 malicious entity in such a way as to potentially have your server IP address
 banned by SFS for abuse or excessive load!

*/

define('SFSMassIPChecker',true);
parse_str($_SERVER['QUERY_STRING'],$query);
$SFSMassIPChecker=array();
$SFSMassIPChecker['ScriptVersion']='0.0.2-ALPHA';
$SFSMassIPChecker['UserIPAddr']=$_SERVER['REMOTE_ADDR'];
$SFSMassIPChecker['UserAgent']='SFS-Mass-IP-Checker/'.$SFSMassIPChecker['ScriptVersion'].' (https://github.com/Maikuolan/SFS-Mass-IP-Checker) via '.$SFSMassIPChecker['UserIPAddr'];
$SFSMassIPChecker['CacheModified']=false;
$SFSMassIPChecker['Limit']=9999;
$SFSMassIPChecker['Path']=@(__DIR__==='__DIR__')?dirname(__FILE__):__DIR__;
$SFSMassIPChecker['IPAddr']=(!empty($_POST['IPAddr']))?$_POST['IPAddr']:((!empty($query['IPAddr']))?$query['IPAddr']:'');
$SFSMassIPChecker['bannedipsAppend']='';
$SFSMassIPChecker['cleanAppend']='';
$SFSMassIPChecker['erroneousAppend']='';
$SFSMassIPChecker['Time']=time();

$SFSMassIPChecker['lang']=(!empty($_POST['lang']))?strtolower($_POST['lang']):((!empty($query['lang']))?strtolower($query['lang']):'en');
if(!substr_count(',en,',','.$SFSMassIPChecker['lang'].','))$SFSMassIPChecker['lang']='en';
require $GLOBALS['SFSMassIPChecker']['Path'].'/private/lang/lang.'.$SFSMassIPChecker['lang'].'.php';

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

function ParseTemplate($pagedata)
	{
	$template=SFSMassIPCheckerFileFetcher($GLOBALS['SFSMassIPChecker']['Path'].'/private/template.html');
	if(is_array($pagedata))
		{
		$c=count($pagedata);
		for($i=0;$i<$c;$i++)
			{
			$k=key($pagedata);
			$template=str_replace('{'.$k.'}',$pagedata[$k],$template);
			next($pagedata);
			}
		}
	else if(!empty($pagedata))$template=str_replace('{pagedata}',$pagedata,$template);
	$arr=$GLOBALS['SFSMassIPChecker']['langdata'];
	reset($arr);
	$c=count($arr);
	for($i=0;$i<$c;$i++)
		{
		$k=key($arr);
		$template=str_replace('{'.$k.'}',$arr[$k],$template);
		next($arr);
		}
	return $template;
	}

if(!file_exists($SFSMassIPChecker['Path'].'/private/cache.dat'))
	{
	$SFSMassIPChecker['handle']=fopen($SFSMassIPChecker['Path'].'/private/cache.dat','w');
	$SFSMassIPChecker['Cache']=array();
	$SFSMassIPChecker['Cache']['lang']='en';
	$SFSMassIPChecker['Cache']['Counter']='0';
	$SFSMassIPChecker['Cache']['LastCounterReset']=$SFSMassIPChecker['Cache']['LastBlackReset']=$SFSMassIPChecker['Cache']['LastWhiteReset']=$SFSMassIPChecker['Time'];
	fwrite($SFSMassIPChecker['handle'],serialize($SFSMassIPChecker['Cache']));
	fclose($SFSMassIPChecker['handle']);
	if(!file_exists($SFSMassIPChecker['Path'].'/private/cache.dat'))die(ParseTemplate($SFSMassIPChecker['langdata']['cant_write']));
	}
else
	{
	$SFSMassIPChecker['Cache']=unserialize(SFSMassIPCheckerFileFetcher($SFSMassIPChecker['Path'].'/private/cache.dat'));
	if(!isset($SFSMassIPChecker['Cache']['lang']))
		{
		$SFSMassIPChecker['CacheModified']=true;
		$SFSMassIPChecker['Cache']['lang']='en';
		}
	if(!isset($SFSMassIPChecker['Cache']['Counter']))
		{
		$SFSMassIPChecker['CacheModified']=true;
		$SFSMassIPChecker['Cache']['Counter']=0;
		}
	if(!isset($SFSMassIPChecker['Cache']['LastWhiteReset']))
		{
		$SFSMassIPChecker['CacheModified']=true;
		$SFSMassIPChecker['Cache']['LastWhiteReset']=$SFSMassIPChecker['Time'];
		}
	if(!isset($SFSMassIPChecker['Cache']['LastBlackReset']))
		{
		$SFSMassIPChecker['CacheModified']=true;
		$SFSMassIPChecker['Cache']['LastBlackReset']=$SFSMassIPChecker['Time'];
		}
	if(!isset($SFSMassIPChecker['Cache']['LastCounterReset']))
		{
		$SFSMassIPChecker['CacheModified']=true;
		$SFSMassIPChecker['Cache']['LastCounterReset']=$SFSMassIPChecker['Time'];
		}
	}
$SFSMassIPChecker['Counter']=$SFSMassIPChecker['Cache']['Counter'];
if($SFSMassIPChecker['Cache']['lang']!==$SFSMassIPChecker['lang'])
	{
	$SFSMassIPChecker['CacheModified']=true;
	$SFSMassIPChecker['Cache']['lang']=$SFSMassIPChecker['lang'];
	}

function SFSMassIPCheckerCheckIP($IPAddr)
	{
	if(!isset($GLOBALS['SFSMassIPChecker']['bannedips']))$GLOBALS['SFSMassIPChecker']['bannedips']=','.SFSMassIPCheckerFileFetcher($GLOBALS['SFSMassIPChecker']['Path'].'/private/bannedips.csv');
	if(!isset($GLOBALS['SFSMassIPChecker']['clean']))$GLOBALS['SFSMassIPChecker']['clean']=','.SFSMassIPCheckerFileFetcher($GLOBALS['SFSMassIPChecker']['Path'].'/private/clean.csv');
	if(!isset($GLOBALS['SFSMassIPChecker']['erroneous']))$GLOBALS['SFSMassIPChecker']['erroneous']=','.SFSMassIPCheckerFileFetcher($GLOBALS['SFSMassIPChecker']['Path'].'/private/erroneous.csv');
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
	if(empty($IPAddr))return $IPAddr.','.$GLOBALS['SFSMassIPChecker']['langdata']['failure_badip'].',0,-';
	if(substr_count($GLOBALS['SFSMassIPChecker']['bannedips'],','.$IPAddr.','))return $IPAddr.','.$GLOBALS['SFSMassIPChecker']['langdata']['success_local'].',>0,-';
	if(substr_count($GLOBALS['SFSMassIPChecker']['clean'],','.$IPAddr.','))return $IPAddr.','.$GLOBALS['SFSMassIPChecker']['langdata']['success_local'].',0,-';
	if(substr_count($GLOBALS['SFSMassIPChecker']['erroneous'],','.$IPAddr.','))return $IPAddr.','.$GLOBALS['SFSMassIPChecker']['langdata']['erroneous_local'].',!,-';
	$Context=stream_context_create(array('http'=>array('method'=>'POST','header'=>'Content-type: application/x-www-form-urlencoded; charset=iso-8859-1','user_agent'=>$GLOBALS['SFSMassIPChecker']['UserAgent'],'content'=>'ip='.urlencode($IPAddr),'timeout'=>9)));
	$Results=@file_get_contents('http://www.stopforumspam.com/api?ip='.urlencode($IPAddr),false,$Context);
	if(substr_count($Results,'request not understood'))$appears=$GLOBALS['SFSMassIPChecker']['langdata']['failure_notunderstood'];
	else if(!$Results)$appears=$GLOBALS['SFSMassIPChecker']['langdata']['failure_timeout'];
	if(empty($appears))
		{
		$x=preg_match('/<appears>(.{0,64})<\/appears>/i',$Results,$appears);
		$appears=($x)?$appears[1]:'';
		$x=preg_match('/<lastseen>(.{0,64})<\/lastseen>/i',$Results,$lastseen);
		$lastseen=($x)?$lastseen[1]:'';
		$x=preg_match('/<frequency>(.{0,64})<\/frequency>/i',$Results,$frequency);
		$frequency=($x)?$frequency[1]:'';
		}
	if($appears=='yes'||$appears=='no')$appears=$GLOBALS['SFSMassIPChecker']['langdata']['success_remote'];
	else
		{
		$GLOBALS['SFSMassIPChecker']['Counter']++;
		$GLOBALS['SFSMassIPChecker']['erroneousAppend'].=$IPAddr.',';
		return $IPAddr.','.$appears.',!,-';
		}
	if(empty($frequency))$frequency=0;
	if(empty($lastseen))$lastseen='-';
	$GLOBALS['SFSMassIPChecker']['Counter']++;
	if($frequency>0)$GLOBALS['SFSMassIPChecker']['bannedipsAppend'].=$IPAddr.',';
	else $GLOBALS['SFSMassIPChecker']['cleanAppend'].=$IPAddr.',';
	return $IPAddr.','.$appears.','.$frequency.','.$lastseen;
	}

if($SFSMassIPChecker['Cache']['LastWhiteReset']>0&&($SFSMassIPChecker['Cache']['LastWhiteReset']+86400)<$SFSMassIPChecker['Time'])
	{
	if(file_exists($GLOBALS['SFSMassIPChecker']['Path'].'/private/clean.csv'))unlink($GLOBALS['SFSMassIPChecker']['Path'].'/private/clean.csv');
	if(file_exists($GLOBALS['SFSMassIPChecker']['Path'].'/private/erroneous.csv'))unlink($GLOBALS['SFSMassIPChecker']['Path'].'/private/erroneous.csv');
	$SFSMassIPChecker['CacheModified']=true;
	$SFSMassIPChecker['Cache']['LastWhiteReset']=$SFSMassIPChecker['Time'];
	}
if($SFSMassIPChecker['Cache']['LastBlackReset']>0&&($SFSMassIPChecker['Cache']['LastBlackReset']+604800)<$SFSMassIPChecker['Time'])
	{
	if(file_exists($GLOBALS['SFSMassIPChecker']['Path'].'/private/bannedips.csv'))unlink($GLOBALS['SFSMassIPChecker']['Path'].'/private/bannedips.csv');
	$SFSMassIPChecker['CacheModified']=true;
	$SFSMassIPChecker['Cache']['LastBlackReset']=$SFSMassIPChecker['Time'];
	}
if($SFSMassIPChecker['Cache']['LastCounterReset']>0&&($SFSMassIPChecker['Cache']['LastCounterReset']+86400)<$SFSMassIPChecker['Time'])
	{
	$SFSMassIPChecker['CacheModified']=true;
	$SFSMassIPChecker['Cache']['Counter']=$SFSMassIPChecker['Counter']=0;
	$SFSMassIPChecker['Cache']['LastCounterReset']=$SFSMassIPChecker['Time'];
	}

if(!file_exists($SFSMassIPChecker['Path'].'/private/bannedips.csv'))
	{
	if(!function_exists('zip_open'))die(ParseTemplate($SFSMassIPChecker['langdata']['bannedips_missing_cant_zip']));
	echo '<html><body onload="javascript:location.reload(true);"><p style="font-family:monospace;white-space:pre;">:: SFS-Mass-IP-Checker ::<br /><br />'.$SFSMassIPChecker['langdata']['bannedips_missing'].'</p>';
	$SFSMassIPChecker['handle']=stream_context_create(array('http'=>array('method'=>'GET','header'=>'Content-type: application/x-www-form-urlencoded; charset=iso-8859-1','user_agent'=>$SFSMassIPChecker['UserAgent'],'content'=>'','timeout'=>300)));
	$SFSMassIPChecker['stream']=@file_get_contents('http://www.stopforumspam.com/downloads/bannedips.zip',false,$SFSMassIPChecker['handle']);
	$SFSMassIPChecker['handle']=fopen($SFSMassIPChecker['Path'].'/private/bannedips.zip','wb');
	fwrite($SFSMassIPChecker['handle'],$SFSMassIPChecker['stream']);
	fclose($SFSMassIPChecker['handle']);
	$SFSMassIPChecker['stream']=zip_open($SFSMassIPChecker['Path'].'/private/bannedips.zip');
	while(true)
		{
		if(!$SFSMassIPChecker['handle']=@zip_read($SFSMassIPChecker['stream']))break;
		if(zip_entry_name($SFSMassIPChecker['handle'])==='bannedips.csv')$SFSMassIPChecker['ZipData']=@zip_entry_read($SFSMassIPChecker['handle'],zip_entry_filesize($SFSMassIPChecker['handle']));
		}
	zip_close($SFSMassIPChecker['stream']);
	if(!empty($SFSMassIPChecker['ZipData']))
		{
		$SFSMassIPChecker['handle']=fopen($SFSMassIPChecker['Path'].'/private/bannedips.csv','w');
		fwrite($SFSMassIPChecker['handle'],$SFSMassIPChecker['ZipData']);
		fclose($SFSMassIPChecker['handle']);
		unlink($SFSMassIPChecker['Path'].'/private/bannedips.zip');
		}
	else
		{
		$SFSMassIPChecker['handle']=fopen($SFSMassIPChecker['Path'].'/private/bannedips.csv','w');
		fwrite($SFSMassIPChecker['handle'],',');
		fclose($SFSMassIPChecker['handle']);
		}
	die('</body></html>');
	}

$SFSMassIPChecker['PageBody']='<form action="" method="POST" name="SFSMassIPChecker"><center>'.$SFSMassIPChecker['langdata']['separate_entries'].'<br /><br /><textarea name="IPAddr" id="IPAddr" style="width:98%;height:100px;"></textarea><br /><br /><input type="submit" value="'.$SFSMassIPChecker['langdata']['input_submit'].'" /></center></form>';

if(!empty($SFSMassIPChecker['IPAddr']))
	{
	$SFSMassIPChecker['IPAddr']=preg_replace('/[^,\n0-9\.]/','',$SFSMassIPChecker['IPAddr']);
	$SFSMassIPChecker['IPAddr']=preg_split('/[,\n]+/',$SFSMassIPChecker['IPAddr'],-1,PREG_SPLIT_NO_EMPTY);
	$SFSMassIPChecker['bannedips']=SFSMassIPCheckerFileFetcher($SFSMassIPChecker['Path'].'/private/bannedips.csv');
	$SFSMassIPChecker['Results']=SFSMassIPCheckerCheckIP($SFSMassIPChecker['IPAddr']);
	$SFSMassIPChecker['PageBody'].='<hr /><center><table style="width:500px;text-align:center;"><tr><td><strong>'.$SFSMassIPChecker['langdata']['table_ip_address'].'</strong></td><td><strong>'.$SFSMassIPChecker['langdata']['table_lookup_status'].'</strong></td><td><strong>'.$SFSMassIPChecker['langdata']['table_spammer'].'</strong></td><td><strong>'.$SFSMassIPChecker['langdata']['table_frequency'].'</strong></td><td><strong>'.$SFSMassIPChecker['langdata']['table_last_seen'].'</strong></td></tr>';
	$SFSMassIPChecker['c']=count($SFSMassIPChecker['Results']);
	for($SFSMassIPChecker['i']=0;$SFSMassIPChecker['i']<$SFSMassIPChecker['c'];$SFSMassIPChecker['i']++)
		{
		$SFSMassIPChecker['Results'][$SFSMassIPChecker['i']]=explode(',',$SFSMassIPChecker['Results'][$SFSMassIPChecker['i']]);
		if($SFSMassIPChecker['Results'][$SFSMassIPChecker['i']][2]==='0')
			{
			$SFSMassIPChecker['PageBody'].='<tr><td><a href="http://www.stopforumspam.com/ipcheck/'.$SFSMassIPChecker['Results'][$SFSMassIPChecker['i']][0].'">'.$SFSMassIPChecker['Results'][$SFSMassIPChecker['i']][0].'</a></td><td>'.$SFSMassIPChecker['Results'][$SFSMassIPChecker['i']][1].'</td><td><span style="color:#009900">'.$SFSMassIPChecker['langdata']['results_not_listed'].'</span></td><td>'.$SFSMassIPChecker['Results'][$SFSMassIPChecker['i']][2].'</td><td>'.$SFSMassIPChecker['Results'][$SFSMassIPChecker['i']][3].'</td></tr>';
			}
		else if($SFSMassIPChecker['Results'][$SFSMassIPChecker['i']][2]==='!')
			{
			$SFSMassIPChecker['PageBody'].='<tr><td>'.$SFSMassIPChecker['Results'][$SFSMassIPChecker['i']][0].'</td><td>'.$SFSMassIPChecker['Results'][$SFSMassIPChecker['i']][1].'</td><td><span style="color:#ff8800">'.$SFSMassIPChecker['langdata']['results_erroneous'].'</span></td><td>'.$SFSMassIPChecker['Results'][$SFSMassIPChecker['i']][2].'</td><td>'.$SFSMassIPChecker['Results'][$SFSMassIPChecker['i']][3].'</td></tr>';
			}
		else
			{
			$SFSMassIPChecker['PageBody'].='<tr><td><a href="http://www.stopforumspam.com/ipcheck/'.$SFSMassIPChecker['Results'][$SFSMassIPChecker['i']][0].'">'.$SFSMassIPChecker['Results'][$SFSMassIPChecker['i']][0].'</a></td><td>'.$SFSMassIPChecker['Results'][$SFSMassIPChecker['i']][1].'</td><td><span style="color:#990000">'.$SFSMassIPChecker['langdata']['results_listed'].'</span></td><td>'.$SFSMassIPChecker['Results'][$SFSMassIPChecker['i']][2].'</td><td>'.$SFSMassIPChecker['Results'][$SFSMassIPChecker['i']][3].'</td></tr>';
			}
		}
	unset($SFSMassIPChecker['Results']);
	$SFSMassIPChecker['PageBody'].='</table></center>';
	if($SFSMassIPChecker['Cache']['Counter']!==$SFSMassIPChecker['Counter'])
		{
		$SFSMassIPChecker['CacheModified']=true;
		$SFSMassIPChecker['Cache']['Counter']=$SFSMassIPChecker['Counter'];
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
	if(!empty($SFSMassIPChecker['erroneousAppend']))
		{
		$SFSMassIPChecker['handle']=fopen($SFSMassIPChecker['Path'].'/private/erroneous.csv','a');
		fwrite($SFSMassIPChecker['handle'],$SFSMassIPChecker['erroneousAppend']);
		fclose($SFSMassIPChecker['handle']);
		}
	}

if($SFSMassIPChecker['CacheModified'])
	{
	$SFSMassIPChecker['handle']=fopen($SFSMassIPChecker['Path'].'/private/cache.dat','w');
	fwrite($SFSMassIPChecker['handle'],serialize($SFSMassIPChecker['Cache']));
	fclose($SFSMassIPChecker['handle']);
	}

die(ParseTemplate($SFSMassIPChecker['PageBody']));
?>