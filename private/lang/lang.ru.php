<?php
/**
 * SFS MASS IP Checker: A stand-alone script for checking IP addresses en-masse
 * against the Stop Forum Spam database.
 *
 * This file: Russian language data (last modified: 2020.11.25).
 *
 * This document and its associated package can be downloaded for free from:
 * - GitHub <https://github.com/Maikuolan/SFS-Mass-IP-Checker>.
 *
 * @author Caleb M (Maikuolan)
 */

$SFSMassIPChecker['langdata'] = [
    'xmlLang' => 'ru',
    'bannedips_missing' => 'Загрузка свежую копию "bannedips.csv" от SFS (мы используем этот файл чтобы избежать необходимости внесения излишне большое количество запросов к серверу);<br /><br />Пожалуйста подождите (страница обновится автоматически после завершения загрузки)...<br /><br />',
    'bannedips_missing_cant_zip' => 'Не может найти "%PATH%/private/bannedips.csv"!<br />Вы можете скачать вручную:<br /><a href="https://www.stopforumspam.com/downloads/bannedips.zip">https://www.stopforumspam.com/downloads/bannedips.zip</a><br /><br />После загрузки, распаковки содержимого файла в \'private\' папка из SFS Mass IP Checker, а затем повторите попытку.<br /><br />(( Мы используем этот файл чтобы избежать необходимости внесения излишне большое количество запросов к серверу. ))',
    'cant_write' => 'Невозможно записать в кэш!<br />Пожалуйста проверьте CHMOD!',
    'erroneous_local' => 'Ошибочный (Локальное).',
    'failure_badip' => 'Неверный IP-адрес!',
    'failure_private' => 'Локальный/Личный IP-адрес!',
    'failure_notunderstood' => 'Не успех (запрос не понял SFS)!',
    'failure_timeout' => 'Не успех (запрос ошибка или тайм-аут)!',
    'failure_unknown' => 'Произошла неизвестная ошибка.',
    'input_submit' => 'Отправить',
    'linkname_addspamdata' => 'Добавить данные о спаме',
    'linkname_downloads' => 'Загрузки',
    'linkname_faq' => 'FAQ',
    'linkname_forum' => 'Форум',
    'linkname_home' => 'На главную',
    'linkname_search' => 'Поиск',
    'linkname_support' => 'Помогите',
    'linkname_useful' => 'Полезные Инструменты',
    'results_erroneous' => 'Ошибочный',
    'results_listed' => 'В Списке',
    'results_not_listed' => 'Нет В Списке',
    'separate_entries' => 'Отделять записи с запятыми или разрывы строк. Записи должны состоять из адресов IPv4.',
    'success_local' => 'Успех (Локальное).',
    'success_remote' => 'Успех (Удаленное).',
    'table_frequency' => 'Частота',
    'table_ip_address' => 'IP-Адрес',
    'table_last_seen' => 'Последний Доклад',
    'table_lookup_status' => 'Статус',
    'table_spammer' => 'Спамер?'
];
