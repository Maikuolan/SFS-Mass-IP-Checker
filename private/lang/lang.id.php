<?php
/**
 * SFS MASS IP Checker: A stand-alone script for checking IP addresses en-masse
 * against the Stop Forum Spam database.
 *
 * This file: Indonesian language data (8th January 2016).
 * 
 * This document and its associated package can be downloaded for free from:
 * - GitHub <https://github.com/Maikuolan/SFS-Mass-IP-Checker>.
 *
 * @package Maikuolan/SFS-Mass-IP-Checker
 */

/**
 * Prevents execution from outside of the script.
 */
if(!defined('SFSMassIPChecker'))die('[SFS-Mass-IP-Checker] This should not be accessed directly.');

$SFSMassIPChecker['langdata']=array();
$SFSMassIPChecker['langdata']['xmlLang']='id';

$SFSMassIPChecker['langdata']['bannedips_missing']='Mendownload salinan "bannedips.csv" segar dari SFS (kami memanfaatkan file ini untuk menghindari perlu membuat jumlah tidak perlu besar permintaan ke server);<br /><br />Silahkan tunggu (halaman ini akan menyegarkan otomatis setelah download selesai)...<br /><br />';
$SFSMassIPChecker['langdata']['bannedips_missing_cant_zip']='Tidak dapat menemukan "%PATH%/private/bannedips.csv"!<br />Silahkan download manual dari:<br /><a href="http://www.stopforumspam.com/downloads/bannedips.zip">http://www.stopforumspam.com/downloads/bannedips.zip</a><br /><br />Setelah mendownload, dekompresi file yang terdapat pada \'private\' direktori dari SFS Mass IP Checker, dan kemudian coba lagi.<br /><br />(( Kami memanfaatkan file ini untuk menghindari perlu membuat jumlah tidak perlu besar permintaan ke server. ))';
$SFSMassIPChecker['langdata']['cant_write']='Tidak dapat menulis ke cache!<br />Silakan periksa hak akses file CHMOD Anda!';
$SFSMassIPChecker['langdata']['erroneous_local']='Salah (Lokal).';
$SFSMassIPChecker['langdata']['failure_badip']='Kegagalan (alamat IP buruk)!';
$SFSMassIPChecker['langdata']['failure_notunderstood']='Kegagalan (permintaan tidak dipahami oleh SFS)!';
$SFSMassIPChecker['langdata']['failure_timeout']='Kegagalan (permintaan kesalahan atau waktu habis)!';
$SFSMassIPChecker['langdata']['input_submit']='Menyerahkan';
$SFSMassIPChecker['langdata']['linkname_addspamdata']='Melaporkan IP';
$SFSMassIPChecker['langdata']['linkname_downloads']='Download';
$SFSMassIPChecker['langdata']['linkname_faq']='FAQ';
$SFSMassIPChecker['langdata']['linkname_forum']='Forum';
$SFSMassIPChecker['langdata']['linkname_home']='Halaman Muka';
$SFSMassIPChecker['langdata']['linkname_search']='Pencarian';
$SFSMassIPChecker['langdata']['linkname_support']='Membantu';
$SFSMassIPChecker['langdata']['linkname_useful']='Alat Berguna';
$SFSMassIPChecker['langdata']['results_erroneous']='Salah';
$SFSMassIPChecker['langdata']['results_listed']='Terdaftar';
$SFSMassIPChecker['langdata']['results_not_listed']='Tidak Terdaftar';
$SFSMassIPChecker['langdata']['separate_entries']='Entri terpisah melalui koma atau baris istirahat. Entri harus terdiri dari alamat IPv4.';
$SFSMassIPChecker['langdata']['success_local']='Keberhasilan (Lokal).';
$SFSMassIPChecker['langdata']['success_remote']='Keberhasilan (Remote).';
$SFSMassIPChecker['langdata']['table_frequency']='Frekuensi';
$SFSMassIPChecker['langdata']['table_ip_address']='Alamat IP';
$SFSMassIPChecker['langdata']['table_last_seen']='Terakhir Terlihat';
$SFSMassIPChecker['langdata']['table_lookup_status']='Status';
$SFSMassIPChecker['langdata']['table_spammer']='Spammer?';
