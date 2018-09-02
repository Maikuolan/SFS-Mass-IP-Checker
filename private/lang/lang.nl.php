<?php
/**
 * SFS MASS IP Checker: A stand-alone script for checking IP addresses en-masse
 * against the Stop Forum Spam database.
 *
 * This file: Dutch language data (last modified: 2018.09.03).
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

$SFSMassIPChecker['langdata'] = array('xmlLang' => 'nl');

$SFSMassIPChecker['langdata']['bannedips_missing'] = 'Downloaden van een nieuw kopie het "bannedips.csv" bestand van SFS (we maken gebruik van dit bestand om te voorkomen hoeven onnodig groot aantal verzoeken aan de server);<br /><br />Even geduld aub (de pagina zal automatisch vernieuwd na het downloaden is voltooid)...<br /><br />';
$SFSMassIPChecker['langdata']['bannedips_missing_cant_zip'] = 'Kan niet vinden "%PATH%/private/bannedips.csv"!<br />Download handmatig uit:<br /><a href="https://www.stopforumspam.com/downloads/bannedips.zip">https://www.stopforumspam.com/downloads/bannedips.zip</a><br /><br />Na het downloaden, uitpakken het bevatte bestand naar de \'private\' bestandsmap van de SFS Mass IP Checker, en probeer het opnieuw.<br /><br />(( We maken gebruik van dit bestand om te voorkomen hoeven onnodig groot aantal verzoeken aan de server. ))';
$SFSMassIPChecker['langdata']['cant_write'] = 'Kan niet schrijven naar de cache!<br />Controleer uw CHMOD permissies!';
$SFSMassIPChecker['langdata']['erroneous_local'] = 'Onjuist (Lokaal).';
$SFSMassIPChecker['langdata']['failure_badip'] = 'Ongeldig IP-adres!';
$SFSMassIPChecker['langdata']['failure_private'] = 'Lokale/Private IP-adres!';
$SFSMassIPChecker['langdata']['failure_notunderstood'] = 'Mislukking (aanvraag niet begrepen door SFS)!';
$SFSMassIPChecker['langdata']['failure_timeout'] = 'Mislukking (aanvraag fout of time-out)!';
$SFSMassIPChecker['langdata']['failure_unknown'] = 'Een onbekende fout is opgetreden.';
$SFSMassIPChecker['langdata']['input_submit'] = 'Voorleggen';
$SFSMassIPChecker['langdata']['linkname_addspamdata'] = 'Melden IP';
$SFSMassIPChecker['langdata']['linkname_downloads'] = 'Downloads';
$SFSMassIPChecker['langdata']['linkname_faq'] = 'Veelgestelde Vragen';
$SFSMassIPChecker['langdata']['linkname_forum'] = 'Forum';
$SFSMassIPChecker['langdata']['linkname_home'] = 'Home';
$SFSMassIPChecker['langdata']['linkname_search'] = 'Zoek';
$SFSMassIPChecker['langdata']['linkname_support'] = 'Steun';
$SFSMassIPChecker['langdata']['linkname_useful'] = 'Handige Tools';
$SFSMassIPChecker['langdata']['results_erroneous'] = 'Onjuist';
$SFSMassIPChecker['langdata']['results_listed'] = 'Op de lijst';
$SFSMassIPChecker['langdata']['results_not_listed'] = 'Niet op de lijst';
$SFSMassIPChecker['langdata']['separate_entries'] = 'Aparte items via komma\'s of regeleinden. Items moeten bestaan uit IPv4-adressen.';
$SFSMassIPChecker['langdata']['success_local'] = 'Succes (Lokaal).';
$SFSMassIPChecker['langdata']['success_remote'] = 'Succes (Afgelegen).';
$SFSMassIPChecker['langdata']['table_frequency'] = 'Frequentie';
$SFSMassIPChecker['langdata']['table_ip_address'] = 'IP-Adres';
$SFSMassIPChecker['langdata']['table_last_seen'] = 'Laatst Gezien';
$SFSMassIPChecker['langdata']['table_lookup_status'] = 'Toestand';
$SFSMassIPChecker['langdata']['table_spammer'] = 'Spammer?';
