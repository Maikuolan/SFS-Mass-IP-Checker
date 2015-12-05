<?php /*
 SFS MASS IP Checker v0.0.3-ALPHA
 This File: SFS MASS IP Checker Chinese (Simplified) Language Data (6th December 2015).

                                     ~ ~ ~
 This document and its associated package can be downloaded for free from:
 - GitHub <https://github.com/Maikuolan/SFS-Mass-IP-Checker>.

*/

if(!defined('SFSMassIPChecker'))die('[SFS-Mass-IP-Checker] This should not be accessed directly.');

$SFSMassIPChecker['langdata']=array();
$SFSMassIPChecker['langdata']['xmlLang']='zh';

$SFSMassIPChecker['langdata']['bannedips_missing']='Downloading a fresh copy of "bannedips.csv" from SFS (we utilise this file in order to avoid needing to make an unnecessarily large number of requests to the server);<br /><br />Please wait (the page will refresh automatically after the download has completed)...<br /><br />';
$SFSMassIPChecker['langdata']['bannedips_missing_cant_zip']='Can\'t locate "%PATH%/private/bannedips.csv"!<br />Please download manually from:<br /><a href="http://www.stopforumspam.com/downloads/bannedips.zip">http://www.stopforumspam.com/downloads/bannedips.zip</a><br /><br />After downloading, decompress the contained file to the \'private\' directory of the SFS Mass IP Checker, and then try again.<br /><br />(( We utilise this file in order to avoid needing to make an unnecessarily large number of requests to the server. ))';
$SFSMassIPChecker['langdata']['cant_write']='Unable to write to cache!<br />Please check your CHMOD file permissions!';
$SFSMassIPChecker['langdata']['erroneous_local']='错误（本地）。';
$SFSMassIPChecker['langdata']['failure_badip']='失败（无效IP地址）！';
$SFSMassIPChecker['langdata']['failure_notunderstood']='失败（请求不明白）！';
$SFSMassIPChecker['langdata']['failure_timeout']='失败（请求错误或超时）！';
$SFSMassIPChecker['langdata']['input_submit']='提交';
$SFSMassIPChecker['langdata']['linkname_addspamdata']='提交垃圾信息';
$SFSMassIPChecker['langdata']['linkname_downloads']='下载';
$SFSMassIPChecker['langdata']['linkname_faq']='FAQ';
$SFSMassIPChecker['langdata']['linkname_forum']='论坛';
$SFSMassIPChecker['langdata']['linkname_home']='首页';
$SFSMassIPChecker['langdata']['linkname_search']='搜索';
$SFSMassIPChecker['langdata']['linkname_support']='帮帮';
$SFSMassIPChecker['langdata']['linkname_useful']='有用的工具';
$SFSMassIPChecker['langdata']['results_erroneous']='错误';
$SFSMassIPChecker['langdata']['results_listed']='见过';
$SFSMassIPChecker['langdata']['results_not_listed']='没有见过';
$SFSMassIPChecker['langdata']['separate_entries']='分开的条目通过逗号或换行符。条目应包括IPv4地址。';
$SFSMassIPChecker['langdata']['success_local']='成功（本地）。';
$SFSMassIPChecker['langdata']['success_remote']='成功（远程）。';
$SFSMassIPChecker['langdata']['table_frequency']='频率';
$SFSMassIPChecker['langdata']['table_ip_address']='IP地址';
$SFSMassIPChecker['langdata']['table_last_seen']='最后报告';
$SFSMassIPChecker['langdata']['table_lookup_status']='状态';
$SFSMassIPChecker['langdata']['table_spammer']='垃圾邮件发送者？';

?>