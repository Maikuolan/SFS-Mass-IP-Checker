<?php /*
 SFS MASS IP Checker v0.0.3-ALPHA
 This File: SFS MASS IP Checker German Language Data (6th December 2015).

                                     ~ ~ ~
 This document and its associated package can be downloaded for free from:
 - GitHub <https://github.com/Maikuolan/SFS-Mass-IP-Checker>.

*/

if(!defined('SFSMassIPChecker'))die('[SFS-Mass-IP-Checker] This should not be accessed directly.');

$SFSMassIPChecker['langdata']=array();
$SFSMassIPChecker['langdata']['xmlLang']='de';

$SFSMassIPChecker['langdata']['bannedips_missing']='Downloading a fresh copy of "bannedips.csv" from SFS (we utilise this file in order to avoid needing to make an unnecessarily large number of requests to the server);<br /><br />Please wait (the page will refresh automatically after the download has completed)...<br /><br />';
$SFSMassIPChecker['langdata']['bannedips_missing_cant_zip']='Kann nicht finden "%PATH%/private/bannedips.csv"!<br />Bitte download Sie manuell aus:<br /><a href="http://www.stopforumspam.com/downloads/bannedips.zip">http://www.stopforumspam.com/downloads/bannedips.zip</a><br /><br />After downloading, decompress the contained file to the \'private\' directory of the SFS Mass IP Checker, and then try again.<br /><br />(( We utilise this file in order to avoid needing to make an unnecessarily large number of requests to the server. ))';
$SFSMassIPChecker['langdata']['cant_write']='Unfähig zu schreiben Sie an Cache!<br />Bitte überprüfen Sie Ihre CHMOD!';
$SFSMassIPChecker['langdata']['erroneous_local']='Fehl (Lokal).';
$SFSMassIPChecker['langdata']['failure_badip']='Ausfall (ungültig IP-Adresse)!';
$SFSMassIPChecker['langdata']['failure_notunderstood']='Ausfall (request not understood by SFS)!';
$SFSMassIPChecker['langdata']['failure_timeout']='Ausfall (request error or timed-out)!';
$SFSMassIPChecker['langdata']['input_submit']='Einreichen';
$SFSMassIPChecker['langdata']['linkname_addspamdata']='Füge Spam-Daten hinzu';
$SFSMassIPChecker['langdata']['linkname_downloads']='Downloads';
$SFSMassIPChecker['langdata']['linkname_faq']='FAQ';
$SFSMassIPChecker['langdata']['linkname_forum']='Forum';
$SFSMassIPChecker['langdata']['linkname_home']='Home';
$SFSMassIPChecker['langdata']['linkname_search']='Suche';
$SFSMassIPChecker['langdata']['linkname_support']='Hilfe';
$SFSMassIPChecker['langdata']['linkname_useful']='Nützliche Werkzeuge';
$SFSMassIPChecker['langdata']['results_erroneous']='Fehl';
$SFSMassIPChecker['langdata']['results_listed']='Gelistet';
$SFSMassIPChecker['langdata']['results_not_listed']='Nicht gelistet';
$SFSMassIPChecker['langdata']['separate_entries']='Separate entries via commas or linebreaks. Entries should consist of IPv4 addresses.';
$SFSMassIPChecker['langdata']['success_local']='Erfolg (Lokal).';
$SFSMassIPChecker['langdata']['success_remote']='Erfolg (Fern).';
$SFSMassIPChecker['langdata']['table_frequency']='Frequenz';
$SFSMassIPChecker['langdata']['table_ip_address']='IP-Adresse';
$SFSMassIPChecker['langdata']['table_last_seen']='Letzten Bericht';
$SFSMassIPChecker['langdata']['table_lookup_status']='Status';
$SFSMassIPChecker['langdata']['table_spammer']='Spammer?';

?>