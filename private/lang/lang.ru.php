<?php
/**
 * SFS MASS IP Checker: A stand-alone script for checking IP addresses en-masse
 * against the Stop Forum Spam database.
 *
 * This file: Russian language data (last modified: 2016.08.10).
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

$SFSMassIPChecker['langdata'] = array('xmlLang' => 'ru');

$SFSMassIPChecker['langdata']['bannedips_missing'] = 'Загрузка свежую копию "bannedips.csv" от SFS (мы используем этот файл чтобы избежать необходимости внесения излишне большое количество запросов к серверу);<br /><br />Пожалуйста подождите (страница обновится автоматически после завершения загрузки)...<br /><br />';
$SFSMassIPChecker['langdata']['bannedips_missing_cant_zip'] = 'Не может найти "%PATH%/private/bannedips.csv"!<br />Вы можете скачать вручную:<br /><a href="http://www.stopforumspam.com/downloads/bannedips.zip">http://www.stopforumspam.com/downloads/bannedips.zip</a><br /><br />После загрузки, распаковки содержимого файла в \'private\' папка из SFS Mass IP Checker, а затем повторите попытку.<br /><br />(( Мы используем этот файл чтобы избежать необходимости внесения излишне большое количество запросов к серверу. ))';
$SFSMassIPChecker['langdata']['cant_write'] = 'Невозможно записать в кэш!<br />Пожалуйста проверьте CHMOD!';
$SFSMassIPChecker['langdata']['erroneous_local'] = 'Ошибочный (Локальное).';
$SFSMassIPChecker['langdata']['failure_badip'] = 'Не успех (инвалид IP-адрес)!';
$SFSMassIPChecker['langdata']['failure_notunderstood'] = 'Не успех (запрос не понял SFS)!';
$SFSMassIPChecker['langdata']['failure_timeout'] = 'Не успех (запрос ошибка или тайм-аут)!';
$SFSMassIPChecker['langdata']['input_submit'] = 'Отправить';
$SFSMassIPChecker['langdata']['linkname_addspamdata'] = 'Добавить данные о спаме';
$SFSMassIPChecker['langdata']['linkname_downloads'] = 'Загрузки';
$SFSMassIPChecker['langdata']['linkname_faq'] = 'FAQ';
$SFSMassIPChecker['langdata']['linkname_forum'] = 'Форум';
$SFSMassIPChecker['langdata']['linkname_home'] = 'На главную';
$SFSMassIPChecker['langdata']['linkname_search'] = 'Поиск';
$SFSMassIPChecker['langdata']['linkname_support'] = 'Помогите';
$SFSMassIPChecker['langdata']['linkname_useful'] = 'Полезные Инструменты';
$SFSMassIPChecker['langdata']['results_erroneous'] = 'Ошибочный';
$SFSMassIPChecker['langdata']['results_listed'] = 'В Списке';
$SFSMassIPChecker['langdata']['results_not_listed'] = 'Нет В Списке';
$SFSMassIPChecker['langdata']['separate_entries'] = 'Отделять записи с запятыми или разрывы строк. Записи должны состоять из адресов IPv4.';
$SFSMassIPChecker['langdata']['success_local'] = 'Успех (Локальное).';
$SFSMassIPChecker['langdata']['success_remote'] = 'Успех (Удаленное).';
$SFSMassIPChecker['langdata']['table_frequency'] = 'Частота';
$SFSMassIPChecker['langdata']['table_ip_address'] = 'IP-Адрес';
$SFSMassIPChecker['langdata']['table_last_seen'] = 'Последний Доклад';
$SFSMassIPChecker['langdata']['table_lookup_status'] = 'Статус';
$SFSMassIPChecker['langdata']['table_spammer'] = 'Спамер?';
