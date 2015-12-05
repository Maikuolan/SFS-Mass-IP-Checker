<?php /*
 SFS MASS IP Checker v0.0.3-ALPHA
 This File: SFS MASS IP Checker Chinese (Traditional) Language Data (6th December 2015).

                                     ~ ~ ~
 This document and its associated package can be downloaded for free from:
 - GitHub <https://github.com/Maikuolan/SFS-Mass-IP-Checker>.

*/

if(!defined('SFSMassIPChecker'))die('[SFS-Mass-IP-Checker] This should not be accessed directly.');

$SFSMassIPChecker['langdata']=array();
$SFSMassIPChecker['langdata']['xmlLang']='zh-TW';

$SFSMassIPChecker['langdata']['bannedips_missing']='Downloading a fresh copy of "bannedips.csv" from SFS (we utilise this file in order to avoid needing to make an unnecessarily large number of requests to the server);<br /><br />Please wait (the page will refresh automatically after the download has completed)...<br /><br />';
$SFSMassIPChecker['langdata']['bannedips_missing_cant_zip']='Can\'t locate "%PATH%/private/bannedips.csv"!<br />Please download manually from:<br /><a href="http://www.stopforumspam.com/downloads/bannedips.zip">http://www.stopforumspam.com/downloads/bannedips.zip</a><br /><br />After downloading, decompress the contained file to the \'private\' directory of the SFS Mass IP Checker, and then try again.<br /><br />(( We utilise this file in order to avoid needing to make an unnecessarily large number of requests to the server. ))';
$SFSMassIPChecker['langdata']['cant_write']='Unable to write to cache!<br />Please check your CHMOD file permissions!';
$SFSMassIPChecker['langdata']['erroneous_local']='錯誤（本地）。';
$SFSMassIPChecker['langdata']['failure_badip']='失敗（無效IP地址）！';
$SFSMassIPChecker['langdata']['failure_notunderstood']='失敗（請求不明白）！';
$SFSMassIPChecker['langdata']['failure_timeout']='失敗（請求錯誤或超時）！';
$SFSMassIPChecker['langdata']['input_submit']='提交';
$SFSMassIPChecker['langdata']['linkname_addspamdata']='提交垃圾信息';
$SFSMassIPChecker['langdata']['linkname_downloads']='下載';
$SFSMassIPChecker['langdata']['linkname_faq']='FAQ';
$SFSMassIPChecker['langdata']['linkname_forum']='論壇';
$SFSMassIPChecker['langdata']['linkname_home']='首頁';
$SFSMassIPChecker['langdata']['linkname_search']='搜索';
$SFSMassIPChecker['langdata']['linkname_support']='幫幫';
$SFSMassIPChecker['langdata']['linkname_useful']='有用的工具';
$SFSMassIPChecker['langdata']['results_erroneous']='錯誤';
$SFSMassIPChecker['langdata']['results_listed']='見過';
$SFSMassIPChecker['langdata']['results_not_listed']='沒有見過';
$SFSMassIPChecker['langdata']['separate_entries']='分開的條目通過逗號或換行符。條目應包括IPv4地址。';
$SFSMassIPChecker['langdata']['success_local']='成功（本地）。';
$SFSMassIPChecker['langdata']['success_remote']='成功（遠程）。';
$SFSMassIPChecker['langdata']['table_frequency']='頻率';
$SFSMassIPChecker['langdata']['table_ip_address']='IP地址';
$SFSMassIPChecker['langdata']['table_last_seen']='最後報告';
$SFSMassIPChecker['langdata']['table_lookup_status']='狀態';
$SFSMassIPChecker['langdata']['table_spammer']='垃圾郵件發送者？';

?>