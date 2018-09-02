<?php
/**
 * SFS MASS IP Checker: A stand-alone script for checking IP addresses en-masse
 * against the Stop Forum Spam database.
 *
 * This file: Italian language data (last modified: 2018.09.03).
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

$SFSMassIPChecker['langdata'] = array('xmlLang' => 'it');

$SFSMassIPChecker['langdata']['bannedips_missing'] = 'Scaricamento una nuova copia di "bannedips.csv" da SFS (utilizziamo questo file in modo da evitare la necessità di fare un inutilmente elevato numero di richieste al server);<br /><br />Attendere prego (la pagina si aggiornerà automaticamente quando lo scaricamento è completato)...<br /><br />';
$SFSMassIPChecker['langdata']['bannedips_missing_cant_zip'] = 'Non può trovare "%PATH%/private/bannedips.csv"!<br />Si prega di scaricare manualmente da:<br /><a href="https://www.stopforumspam.com/downloads/bannedips.zip">https://www.stopforumspam.com/downloads/bannedips.zip</a><br /><br />Dopo aver scaricato, decomprimere il file contenuto nella cartella \'private\' del SFS Mass IP Checker, e poi riprovare.<br /><br />(( Utilizziamo questo file in modo da evitare la necessità di fare un inutilmente elevato numero di richieste al server. ))';
$SFSMassIPChecker['langdata']['cant_write'] = 'Non può scrivere nella cache!<br />Si prega di controllare le autorizzazioni di CHMOD!';
$SFSMassIPChecker['langdata']['erroneous_local'] = 'Erroneo (Locale).';
$SFSMassIPChecker['langdata']['failure_badip'] = 'Indirizzo IP non valido!';
$SFSMassIPChecker['langdata']['failure_private'] = 'Indirizzo IP locale/privato!';
$SFSMassIPChecker['langdata']['failure_notunderstood'] = 'Fallito (richiesta non capito da SFS)!';
$SFSMassIPChecker['langdata']['failure_timeout'] = 'Fallito (richiesta errore o fuori tempo)!';
$SFSMassIPChecker['langdata']['failure_unknown'] = 'Si è verificato un errore sconosciuto.';
$SFSMassIPChecker['langdata']['input_submit'] = 'Presentare';
$SFSMassIPChecker['langdata']['linkname_addspamdata'] = 'Rapporto IP';
$SFSMassIPChecker['langdata']['linkname_downloads'] = 'Scaricamenti';
$SFSMassIPChecker['langdata']['linkname_faq'] = 'FAQ';
$SFSMassIPChecker['langdata']['linkname_forum'] = 'Foro';
$SFSMassIPChecker['langdata']['linkname_home'] = 'Inizio';
$SFSMassIPChecker['langdata']['linkname_search'] = 'Ricerca';
$SFSMassIPChecker['langdata']['linkname_support'] = 'Assistenza';
$SFSMassIPChecker['langdata']['linkname_useful'] = 'Strumenti Utili';
$SFSMassIPChecker['langdata']['results_erroneous'] = 'Erroneo';
$SFSMassIPChecker['langdata']['results_listed'] = 'Elencato';
$SFSMassIPChecker['langdata']['results_not_listed'] = 'Non Elencato';
$SFSMassIPChecker['langdata']['separate_entries'] = 'Separare voci tramite virgole o interruzioni di riga. Voci dovrebbero consistere di indirizzi IPv4.';
$SFSMassIPChecker['langdata']['success_local'] = 'Successo (Locale).';
$SFSMassIPChecker['langdata']['success_remote'] = 'Successo (Remota).';
$SFSMassIPChecker['langdata']['table_frequency'] = 'Frequenza';
$SFSMassIPChecker['langdata']['table_ip_address'] = 'Indirizzo IP';
$SFSMassIPChecker['langdata']['table_last_seen'] = 'Ultimo Rapporto';
$SFSMassIPChecker['langdata']['table_lookup_status'] = 'Stato';
$SFSMassIPChecker['langdata']['table_spammer'] = 'Spammer?';
