<?php
/**
 * SFS MASS IP Checker: A stand-alone script for checking IP addresses en-masse
 * against the Stop Forum Spam database.
 *
 * This file: Chinese (simplified) language data (last modified: 2020.11.25).
 * 
 * This document and its associated package can be downloaded for free from:
 * - GitHub <https://github.com/Maikuolan/SFS-Mass-IP-Checker>.
 *
 * @author Caleb M (Maikuolan)
 */

$SFSMassIPChecker['langdata'] = [
    'xmlLang' => 'zh',
    'bannedips_missing' => '下载一个新的副本的“bannedips.csv”从SFS（我们利用这个文件为了避免需要的作出大量不必要的请求到服务器）;<br /><br />请稍候（页面会自动刷新当下载完成）。。。<br /><br />',
    'bannedips_missing_cant_zip' => '无法找到“%PATH%/private/bannedips.csv”！<br />请从手动下载：<br /><a href="https://www.stopforumspam.com/downloads/bannedips.zip">https://www.stopforumspam.com/downloads/bannedips.zip</a><br /><br />然后，解压缩文件包含在“private”文件夹下的“SFS Mass IP Checker”，然后重试。<br /><br />（（ 我们利用这个文件为了避免需要的作出大量不必要的请求到服务器。 ））',
    'cant_write' => '无法写入缓存！<br />请检查您的CHMOD文件的权限！',
    'erroneous_local' => '错误（本地）。',
    'failure_badip' => '无效的IP地址！',
    'failure_private' => '本地/私有IP地址！',
    'failure_notunderstood' => '失败（请求不明白）！',
    'failure_timeout' => '失败（请求错误或超时）！',
    'failure_unknown' => '出现未知错误。',
    'input_submit' => '提交',
    'linkname_addspamdata' => '提交垃圾信息',
    'linkname_downloads' => '下载',
    'linkname_faq' => 'FAQ',
    'linkname_forum' => '论坛',
    'linkname_home' => '首页',
    'linkname_search' => '搜索',
    'linkname_support' => '帮帮',
    'linkname_useful' => '有用的工具',
    'results_erroneous' => '错误',
    'results_listed' => '见过',
    'results_not_listed' => '没有见过',
    'separate_entries' => '分开的条目通过逗号或换行符。条目应包括IPv4地址。',
    'success_local' => '成功（本地）。',
    'success_remote' => '成功（远程）。',
    'table_frequency' => '频率',
    'table_ip_address' => 'IP地址',
    'table_last_seen' => '最后报告',
    'table_lookup_status' => '状态',
    'table_spammer' => '垃圾邮件发送者？'
];
