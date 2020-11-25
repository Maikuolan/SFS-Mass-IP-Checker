<?php
/**
 * SFS MASS IP Checker: A stand-alone script for checking IP addresses en-masse
 * against the Stop Forum Spam database.
 *
 * This file: Dutch language data (last modified: 2020.11.25).
 *
 * This document and its associated package can be downloaded for free from:
 * - GitHub <https://github.com/Maikuolan/SFS-Mass-IP-Checker>.
 *
 * @author Caleb M (Maikuolan)
 */

$SFSMassIPChecker['langdata'] = [
    'xmlLang' => 'nl',
    'bannedips_missing' => 'Downloaden van een nieuw kopie het "bannedips.csv" bestand van SFS (we maken gebruik van dit bestand om te voorkomen hoeven onnodig groot aantal verzoeken aan de server);<br /><br />Even geduld aub (de pagina zal automatisch vernieuwd na het downloaden is voltooid)...<br /><br />',
    'bannedips_missing_cant_zip' => 'Kan niet vinden "%PATH%/private/bannedips.csv"!<br />Download handmatig uit:<br /><a href="https://www.stopforumspam.com/downloads/bannedips.zip">https://www.stopforumspam.com/downloads/bannedips.zip</a><br /><br />Na het downloaden, uitpakken het bevatte bestand naar de \'private\' bestandsmap van de SFS Mass IP Checker, en probeer het opnieuw.<br /><br />(( We maken gebruik van dit bestand om te voorkomen hoeven onnodig groot aantal verzoeken aan de server. ))',
    'cant_write' => 'Kan niet schrijven naar de cache!<br />Controleer uw CHMOD permissies!',
    'erroneous_local' => 'Onjuist (Lokaal).',
    'failure_badip' => 'Ongeldig IP-adres!',
    'failure_private' => 'Lokale/Private IP-adres!',
    'failure_notunderstood' => 'Mislukking (aanvraag niet begrepen door SFS)!',
    'failure_timeout' => 'Mislukking (aanvraag fout of time-out)!',
    'failure_unknown' => 'Een onbekende fout is opgetreden.',
    'input_submit' => 'Voorleggen',
    'linkname_addspamdata' => 'Melden IP',
    'linkname_downloads' => 'Downloads',
    'linkname_faq' => 'Veelgestelde Vragen',
    'linkname_forum' => 'Forum',
    'linkname_home' => 'Home',
    'linkname_search' => 'Zoek',
    'linkname_support' => 'Steun',
    'linkname_useful' => 'Handige Tools',
    'results_erroneous' => 'Onjuist',
    'results_listed' => 'Op de lijst',
    'results_not_listed' => 'Niet op de lijst',
    'separate_entries' => 'Aparte items via komma\'s of regeleinden. Items moeten bestaan uit IPv4-adressen.',
    'success_local' => 'Succes (Lokaal).',
    'success_remote' => 'Succes (Afgelegen).',
    'table_frequency' => 'Frequentie',
    'table_ip_address' => 'IP-Adres',
    'table_last_seen' => 'Laatst Gezien',
    'table_lookup_status' => 'Toestand',
    'table_spammer' => 'Spammer?'
];
