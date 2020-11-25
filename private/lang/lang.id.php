<?php
/**
 * SFS MASS IP Checker: A stand-alone script for checking IP addresses en-masse
 * against the Stop Forum Spam database.
 *
 * This file: Indonesian language data (last modified: 2020.11.25).
 *
 * This document and its associated package can be downloaded for free from:
 * - GitHub <https://github.com/Maikuolan/SFS-Mass-IP-Checker>.
 *
 * @author Caleb M (Maikuolan)
 */

$SFSMassIPChecker['langdata'] = [
    'xmlLang' => 'id',
    'bannedips_missing' => 'Mendownload salinan "bannedips.csv" segar dari SFS (kami memanfaatkan file ini untuk menghindari perlu membuat jumlah tidak perlu besar permintaan ke server);<br /><br />Silahkan tunggu (halaman ini akan menyegarkan otomatis setelah download selesai)...<br /><br />',
    'bannedips_missing_cant_zip' => 'Tidak dapat menemukan "%PATH%/private/bannedips.csv"!<br />Silahkan download manual dari:<br /><a href="https://www.stopforumspam.com/downloads/bannedips.zip">https://www.stopforumspam.com/downloads/bannedips.zip</a><br /><br />Setelah mendownload, dekompresi file yang terdapat pada \'private\' direktori dari SFS Mass IP Checker, dan kemudian coba lagi.<br /><br />(( Kami memanfaatkan file ini untuk menghindari perlu membuat jumlah tidak perlu besar permintaan ke server. ))',
    'cant_write' => 'Tidak dapat menulis ke cache!<br />Silakan periksa hak akses file CHMOD Anda!',
    'erroneous_local' => 'Salah (Lokal).',
    'failure_badip' => 'Alamat IP tidak valid!',
    'failure_private' => 'Alamat IP lokal/swasta!',
    'failure_notunderstood' => 'Kegagalan (permintaan tidak dipahami oleh SFS)!',
    'failure_timeout' => 'Kegagalan (permintaan kesalahan atau waktu habis)!',
    'failure_unknown' => 'Kesalahan yang tidak diketahui terjadi.',
    'input_submit' => 'Menyerahkan',
    'linkname_addspamdata' => 'Melaporkan IP',
    'linkname_downloads' => 'Download',
    'linkname_faq' => 'FAQ',
    'linkname_forum' => 'Forum',
    'linkname_home' => 'Halaman Muka',
    'linkname_search' => 'Pencarian',
    'linkname_support' => 'Membantu',
    'linkname_useful' => 'Alat Berguna',
    'results_erroneous' => 'Salah',
    'results_listed' => 'Terdaftar',
    'results_not_listed' => 'Tidak Terdaftar',
    'separate_entries' => 'Entri terpisah melalui koma atau baris istirahat. Entri harus terdiri dari alamat IPv4.',
    'success_local' => 'Keberhasilan (Lokal).',
    'success_remote' => 'Keberhasilan (Remote).',
    'table_frequency' => 'Frekuensi',
    'table_ip_address' => 'Alamat IP',
    'table_last_seen' => 'Terakhir Terlihat',
    'table_lookup_status' => 'Status',
    'table_spammer' => 'Spammer?'
];
