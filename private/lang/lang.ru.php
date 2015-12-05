<?php /*
 SFS MASS IP Checker v0.0.3-ALPHA
 This File: SFS MASS IP Checker Russian Language Data (6th December 2015).

                                     ~ ~ ~
 This document and its associated package can be downloaded for free from:
 - GitHub <https://github.com/Maikuolan/SFS-Mass-IP-Checker>.

*/

if(!defined('SFSMassIPChecker'))die('[SFS-Mass-IP-Checker] This should not be accessed directly.');

$SFSMassIPChecker['langdata']=array();
$SFSMassIPChecker['langdata']['xmlLang']='ru';

$SFSMassIPChecker['langdata']['bannedips_missing']='Downloading a fresh copy of "bannedips.csv" from SFS (we utilise this file in order to avoid needing to make an unnecessarily large number of requests to the server);<br /><br />Please wait (the page will refresh automatically after the download has completed)...<br /><br />';
$SFSMassIPChecker['langdata']['bannedips_missing_cant_zip']='Can\'t locate "%PATH%/private/bannedips.csv"!<br />Please download manually from:<br /><a href="http://www.stopforumspam.com/downloads/bannedips.zip">http://www.stopforumspam.com/downloads/bannedips.zip</a><br /><br />After downloading, decompress the contained file to the \'private\' directory of the SFS Mass IP Checker, and then try again.<br /><br />(( We utilise this file in order to avoid needing to make an unnecessarily large number of requests to the server. ))';
$SFSMassIPChecker['langdata']['cant_write']='Unable to write to cache!<br />Please check your CHMOD file permissions!';
$SFSMassIPChecker['langdata']['erroneous_local']='Ошибочный (Локальное).';
$SFSMassIPChecker['langdata']['failure_badip']='Отказ (плохо IP-адрес)!';
$SFSMassIPChecker['langdata']['failure_notunderstood']='Отказ (request not understood by SFS)!';
$SFSMassIPChecker['langdata']['failure_timeout']='Отказ (request error or timed-out)!';
$SFSMassIPChecker['langdata']['input_submit']='Отправить';
$SFSMassIPChecker['langdata']['linkname_addspamdata']='Добавить данные о спаме';
$SFSMassIPChecker['langdata']['linkname_downloads']='Загрузки';
$SFSMassIPChecker['langdata']['linkname_faq']='FAQ';
$SFSMassIPChecker['langdata']['linkname_forum']='Форум';
$SFSMassIPChecker['langdata']['linkname_home']='На главную';
$SFSMassIPChecker['langdata']['linkname_search']='Поиск';
$SFSMassIPChecker['langdata']['linkname_support']='Помогите';
$SFSMassIPChecker['langdata']['linkname_useful']='Полезные Инструменты';
$SFSMassIPChecker['langdata']['results_erroneous']='Ошибочный';
$SFSMassIPChecker['langdata']['results_listed']='В Списке';
$SFSMassIPChecker['langdata']['results_not_listed']='Нет В Списке';
$SFSMassIPChecker['langdata']['separate_entries']='Separate entries via commas or linebreaks. Entries should consist of IPv4 addresses.';
$SFSMassIPChecker['langdata']['success_local']='Успех (Локальное).';
$SFSMassIPChecker['langdata']['success_remote']='Успех (Удаленное).';
$SFSMassIPChecker['langdata']['table_frequency']='Частота';
$SFSMassIPChecker['langdata']['table_ip_address']='IP-Адрес';
$SFSMassIPChecker['langdata']['table_last_seen']='Последний Доклад';
$SFSMassIPChecker['langdata']['table_lookup_status']='Статус';
$SFSMassIPChecker['langdata']['table_spammer']='Спамер?';

?>