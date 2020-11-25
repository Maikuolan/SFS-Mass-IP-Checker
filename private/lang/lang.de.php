<?php
/**
 * SFS MASS IP Checker: A stand-alone script for checking IP addresses en-masse
 * against the Stop Forum Spam database.
 *
 * This file: German language data (last modified: 2020.11.25).
 * 
 * This document and its associated package can be downloaded for free from:
 * - GitHub <https://github.com/Maikuolan/SFS-Mass-IP-Checker>.
 *
 * Thanks to Daniel Ruf for the German translations. :-)
 * @author Daniel Ruf
 */

$SFSMassIPChecker['langdata'] = [
    'xmlLang' => 'de',
    'bannedips_missing' => 'Lade eine aktuelle Kopie von "bannedips.csv" von SFS runter (wir verwenden diese Datei um unnötig viele Anfragen an den Server zu verhindern);<br /><br />Bitte warten (die Seite wird automatisch neugeladen, nachdem der Download abgeschlossen wurde)...<br /><br />',
    'bannedips_missing_cant_zip' => 'Kann "%PATH%/private/bannedips.csv" nicht finden!<br />Bitte laden Sie diese manuell runter von:<br /><a href="https://www.stopforumspam.com/downloads/bannedips.zip">https://www.stopforumspam.com/downloads/bannedips.zip</a><br /><br />Nach dem Download entpacken Sie die Datei in das \'private\' Verzeichnis vom SFS Mass IP Checker und versuchen Sie es dann erneut.<br /><br />(( Wir verwenden diese Datei um unnötig viele Anfragen an den Server zu verhindern ))',
    'cant_write' => 'Kann Cache nicht schreiben!<br />Bitte überprüfen Sie Ihre CHMOD-Dateirechte!',
    'erroneous_local' => 'Fehlerhaft (Lokal).',
    'failure_badip' => 'Ungültig IP-Adresse!',
    'failure_private' => 'Lokal/Privat IP-Address!',
    'failure_notunderstood' => 'Fehlfunktion (Anfrage nicht verstanden von SFS)!',
    'failure_timeout' => 'Fehlfunktion (Anfrage-Fehler oder Zeitlimit)!',
    'failure_unknown' => 'Ein unbekannter Fehler ist aufgetreten.',
    'input_submit' => 'Absenden',
    'linkname_addspamdata' => 'Füge Spam-Daten hinzu',
    'linkname_downloads' => 'Downloads',
    'linkname_faq' => 'FAQ',
    'linkname_forum' => 'Forum',
    'linkname_home' => 'Home',
    'linkname_search' => 'Suche',
    'linkname_support' => 'Hilfe',
    'linkname_useful' => 'Nützliche Werkzeuge',
    'results_erroneous' => 'Fehlerhaft',
    'results_listed' => 'Gelistet',
    'results_not_listed' => 'Nicht gelistet',
    'separate_entries' => 'Separate Einträge mit Kommata oder Zeilenumbrüchen. Einträge sollten aus IPv4-Adressen bestehen.',
    'success_local' => 'Erfolg (Lokal).',
    'success_remote' => 'Erfolg (Remote).',
    'table_frequency' => 'Frequenz',
    'table_ip_address' => 'IP-Adresse',
    'table_last_seen' => 'Letzter Bericht',
    'table_lookup_status' => 'Status',
    'table_spammer' => 'Spammer?'
];
