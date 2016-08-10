<?php
/**
 * SFS MASS IP Checker: A stand-alone script for checking IP addresses en-masse
 * against the Stop Forum Spam database.
 *
 * This file: German language data (last modified: 2016.08.10).
 * 
 * This document and its associated package can be downloaded for free from:
 * - GitHub <https://github.com/Maikuolan/SFS-Mass-IP-Checker>.
 *
 * Thanks to Daniel Ruf for the German translations. :-)
 * @author Daniel Ruf
 */

/** Prevents execution from outside of the script. */
if(!defined('SFSMassIPChecker')) {
    die('[SFS-Mass-IP-Checker] This should not be accessed directly.');
}

$SFSMassIPChecker['langdata'] = array('xmlLang' => 'de');

$SFSMassIPChecker['langdata']['bannedips_missing'] = 'Lade eine aktuelle Kopie von "bannedips.csv" von SFS runter (wir verwenden diese Datei um unnötig viele Anfragen an den Server zu verhindern);<br /><br />Bitte warten (die Seite wird automatisch neugeladen, nachdem der Download abgeschlossen wurde)...<br /><br />';
$SFSMassIPChecker['langdata']['bannedips_missing_cant_zip'] = 'Kann "%PATH%/private/bannedips.csv" nicht finden!<br />Bitte laden Sie diese manuell runter von:<br /><a href="http://www.stopforumspam.com/downloads/bannedips.zip">http://www.stopforumspam.com/downloads/bannedips.zip</a><br /><br />Nach dem Download entpacken Sie die Datei in das \'private\' Verzeichnis vom SFS Mass IP Checker und versuchen Sie es dann erneut.<br /><br />(( Wir verwenden diese Datei um unnötig viele Anfragen an den Server zu verhindern ))';
$SFSMassIPChecker['langdata']['cant_write'] = 'Kann Cache nicht schreiben!<br />Bitte überprüfen Sie Ihre CHMOD-Dateirechte!';
$SFSMassIPChecker['langdata']['erroneous_local'] = 'Fehlerhaft (Lokal).';
$SFSMassIPChecker['langdata']['failure_badip'] = 'Fehlfunktion (ungültig IP-Adresse)!';
$SFSMassIPChecker['langdata']['failure_notunderstood'] = 'Fehlfunktion (Anfrage nicht verstanden von SFS)!';
$SFSMassIPChecker['langdata']['failure_timeout'] = 'Fehlfunktion (Anfrage-Fehler oder Zeitlimit)!';
$SFSMassIPChecker['langdata']['input_submit'] = 'Absenden';
$SFSMassIPChecker['langdata']['linkname_addspamdata'] = 'Füge Spam-Daten hinzu';
$SFSMassIPChecker['langdata']['linkname_downloads'] = 'Downloads';
$SFSMassIPChecker['langdata']['linkname_faq'] = 'FAQ';
$SFSMassIPChecker['langdata']['linkname_forum'] = 'Forum';
$SFSMassIPChecker['langdata']['linkname_home'] = 'Home';
$SFSMassIPChecker['langdata']['linkname_search'] = 'Suche';
$SFSMassIPChecker['langdata']['linkname_support'] = 'Hilfe';
$SFSMassIPChecker['langdata']['linkname_useful'] = 'Nützliche Werkzeuge';
$SFSMassIPChecker['langdata']['results_erroneous'] = 'Fehlerhaft';
$SFSMassIPChecker['langdata']['results_listed'] = 'Gelistet';
$SFSMassIPChecker['langdata']['results_not_listed'] = 'Nicht gelistet';
$SFSMassIPChecker['langdata']['separate_entries'] = 'Separate Einträge mit Kommata oder Zeilenumbrüchen. Einträge sollten aus IPv4-Adressen bestehen.';
$SFSMassIPChecker['langdata']['success_local'] = 'Erfolg (Lokal).';
$SFSMassIPChecker['langdata']['success_remote'] = 'Erfolg (Remote).';
$SFSMassIPChecker['langdata']['table_frequency'] = 'Frequenz';
$SFSMassIPChecker['langdata']['table_ip_address'] = 'IP-Adresse';
$SFSMassIPChecker['langdata']['table_last_seen'] = 'Letzter Bericht';
$SFSMassIPChecker['langdata']['table_lookup_status'] = 'Status';
$SFSMassIPChecker['langdata']['table_spammer'] = 'Spammer?';
