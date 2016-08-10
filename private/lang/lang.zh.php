<?php
/**
 * SFS MASS IP Checker: A stand-alone script for checking IP addresses en-masse
 * against the Stop Forum Spam database.
 *
 * This file: Chinese (simplified) language data (last modified: 2016.08.10).
 * 
 * This document and its associated package can be downloaded for free from:
 * - GitHub <https://github.com/Maikuolan/SFS-Mass-IP-Checker>.
 *
 * @author Caleb M / Maikuolan
 */

/** Prevents execution from outside of the script. */
if(!defined('SFSMassIPChecker')) {
    die('[SFS-Mass-IP-Checker] This should not be accessed directly.');
}

$SFSMassIPChecker['langdata'] = array('xmlLang' => 'zh');

$SFSMassIPChecker['langdata']['bannedips_missing'] = '下载一个新的副本的“bannedips.csv”从SFS（我们利用这个文件为了避免需要的作出大量不必要的请求到服务器）;<br /><br />请稍候（页面会自动刷新当下载完成）。。。<br /><br />';
$SFSMassIPChecker['langdata']['bannedips_missing_cant_zip'] = '无法找到“%PATH%/private/bannedips.csv”！<br />请从手动下载：<br /><a href="http://www.stopforumspam.com/downloads/bannedips.zip">http://www.stopforumspam.com/downloads/bannedips.zip</a><br /><br />然后，解压缩文件包含在“private”文件夹下的“SFS Mass IP Checker”，然后重试。<br /><br />（（ 我们利用这个文件为了避免需要的作出大量不必要的请求到服务器。 ））';
$SFSMassIPChecker['langdata']['cant_write'] = '无法写入缓存！<br />请检查您的CHMOD文件的权限！';
$SFSMassIPChecker['langdata']['erroneous_local'] = '错误（本地）。';
$SFSMassIPChecker['langdata']['failure_badip'] = '失败（无效IP地址）！';
$SFSMassIPChecker['langdata']['failure_notunderstood'] = '失败（请求不明白）！';
$SFSMassIPChecker['langdata']['failure_timeout'] = '失败（请求错误或超时）！';
$SFSMassIPChecker['langdata']['input_submit'] = '提交';
$SFSMassIPChecker['langdata']['linkname_addspamdata'] = '提交垃圾信息';
$SFSMassIPChecker['langdata']['linkname_downloads'] = '下载';
$SFSMassIPChecker['langdata']['linkname_faq'] = 'FAQ';
$SFSMassIPChecker['langdata']['linkname_forum'] = '论坛';
$SFSMassIPChecker['langdata']['linkname_home'] = '首页';
$SFSMassIPChecker['langdata']['linkname_search'] = '搜索';
$SFSMassIPChecker['langdata']['linkname_support'] = '帮帮';
$SFSMassIPChecker['langdata']['linkname_useful'] = '有用的工具';
$SFSMassIPChecker['langdata']['results_erroneous'] = '错误';
$SFSMassIPChecker['langdata']['results_listed'] = '见过';
$SFSMassIPChecker['langdata']['results_not_listed'] = '没有见过';
$SFSMassIPChecker['langdata']['separate_entries'] = '分开的条目通过逗号或换行符。条目应包括IPv4地址。';
$SFSMassIPChecker['langdata']['success_local'] = '成功（本地）。';
$SFSMassIPChecker['langdata']['success_remote'] = '成功（远程）。';
$SFSMassIPChecker['langdata']['table_frequency'] = '频率';
$SFSMassIPChecker['langdata']['table_ip_address'] = 'IP地址';
$SFSMassIPChecker['langdata']['table_last_seen'] = '最后报告';
$SFSMassIPChecker['langdata']['table_lookup_status'] = '状态';
$SFSMassIPChecker['langdata']['table_spammer'] = '垃圾邮件发送者？';
