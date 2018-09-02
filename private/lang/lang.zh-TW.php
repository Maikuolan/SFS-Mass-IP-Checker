<?php
/**
 * SFS MASS IP Checker: A stand-alone script for checking IP addresses en-masse
 * against the Stop Forum Spam database.
 *
 * This file: Chinese (traditional) language data (last modified: 2018.09.03).
 * 
 * This document and its associated package can be downloaded for free from:
 * - GitHub <https://github.com/Maikuolan/SFS-Mass-IP-Checker>.
 *
 * @author Caleb M (Maikuolan)
 */

/** Prevents execution from outside of the script. */
if(!defined('SFSMassIPChecker')) {
    die('[SFS-Mass-IP-Checker] This should not be accessed directly.');
}

$SFSMassIPChecker['langdata'] = array('xmlLang' => 'zh-TW');

$SFSMassIPChecker['langdata']['bannedips_missing'] = '下載一個新的副本的“bannedips.csv”從SFS（我們利用這個文件為了避免需要的作出大量不必要的請求到服務器）;<br /><br />請稍候（頁面會自動刷新當下載完成）。。。<br /><br />';
$SFSMassIPChecker['langdata']['bannedips_missing_cant_zip'] = '無法找到“%PATH%/private/bannedips.csv”！<br />請從手動下載：<br /><a href="https://www.stopforumspam.com/downloads/bannedips.zip">https://www.stopforumspam.com/downloads/bannedips.zip</a><br /><br />然後，解壓縮文件包含在“private”文件夾下的“SFS Mass IP Checker”，然後重試。<br /><br />（（ 我們利用這個文件為了避免需要的作出大量不必要的請求到服務器。 ））';
$SFSMassIPChecker['langdata']['cant_write'] = '無法寫入緩存！<br />請檢查您的CHMOD文件的權限！';
$SFSMassIPChecker['langdata']['erroneous_local'] = '錯誤（本地）。';
$SFSMassIPChecker['langdata']['failure_badip'] = '無效的IP地址！';
$SFSMassIPChecker['langdata']['failure_private'] = '本地/私有IP地址！';
$SFSMassIPChecker['langdata']['failure_notunderstood'] = '失敗（請求不明白）！';
$SFSMassIPChecker['langdata']['failure_timeout'] = '失敗（請求錯誤或超時）！';
$SFSMassIPChecker['langdata']['failure_unknown'] = '出現未知錯誤。';
$SFSMassIPChecker['langdata']['input_submit'] = '提交';
$SFSMassIPChecker['langdata']['linkname_addspamdata'] = '提交垃圾信息';
$SFSMassIPChecker['langdata']['linkname_downloads'] = '下載';
$SFSMassIPChecker['langdata']['linkname_faq'] = 'FAQ';
$SFSMassIPChecker['langdata']['linkname_forum'] = '論壇';
$SFSMassIPChecker['langdata']['linkname_home'] = '首頁';
$SFSMassIPChecker['langdata']['linkname_search'] = '搜索';
$SFSMassIPChecker['langdata']['linkname_support'] = '幫幫';
$SFSMassIPChecker['langdata']['linkname_useful'] = '有用的工具';
$SFSMassIPChecker['langdata']['results_erroneous'] = '錯誤';
$SFSMassIPChecker['langdata']['results_listed'] = '見過';
$SFSMassIPChecker['langdata']['results_not_listed'] = '沒有見過';
$SFSMassIPChecker['langdata']['separate_entries'] = '分開的條目通過逗號或換行符。條目應包括IPv4地址。';
$SFSMassIPChecker['langdata']['success_local'] = '成功（本地）。';
$SFSMassIPChecker['langdata']['success_remote'] = '成功（遠程）。';
$SFSMassIPChecker['langdata']['table_frequency'] = '頻率';
$SFSMassIPChecker['langdata']['table_ip_address'] = 'IP地址';
$SFSMassIPChecker['langdata']['table_last_seen'] = '最後報告';
$SFSMassIPChecker['langdata']['table_lookup_status'] = '狀態';
$SFSMassIPChecker['langdata']['table_spammer'] = '垃圾郵件發送者？';
