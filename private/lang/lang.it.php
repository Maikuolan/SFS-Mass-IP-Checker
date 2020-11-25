<?php
/**
 * SFS MASS IP Checker: A stand-alone script for checking IP addresses en-masse
 * against the Stop Forum Spam database.
 *
 * This file: Italian language data (last modified: 2020.11.25).
 * 
 * This document and its associated package can be downloaded for free from:
 * - GitHub <https://github.com/Maikuolan/SFS-Mass-IP-Checker>.
 *
 * @author Caleb M (Maikuolan)
 */

$SFSMassIPChecker['langdata'] = [
    'xmlLang' => 'it',
    'bannedips_missing' => 'Scaricamento una nuova copia di "bannedips.csv" da SFS (utilizziamo questo file in modo da evitare la necessità di fare un inutilmente elevato numero di richieste al server);<br /><br />Attendere prego (la pagina si aggiornerà automaticamente quando lo scaricamento è completato)...<br /><br />',
    'bannedips_missing_cant_zip' => 'Non può trovare "%PATH%/private/bannedips.csv"!<br />Si prega di scaricare manualmente da:<br /><a href="https://www.stopforumspam.com/downloads/bannedips.zip">https://www.stopforumspam.com/downloads/bannedips.zip</a><br /><br />Dopo aver scaricato, decomprimere il file contenuto nella cartella \'private\' del SFS Mass IP Checker, e poi riprovare.<br /><br />(( Utilizziamo questo file in modo da evitare la necessità di fare un inutilmente elevato numero di richieste al server. ))',
    'cant_write' => 'Non può scrivere nella cache!<br />Si prega di controllare le autorizzazioni di CHMOD!',
    'erroneous_local' => 'Erroneo (Locale).',
    'failure_badip' => 'Indirizzo IP non valido!',
    'failure_private' => 'Indirizzo IP locale/privato!',
    'failure_notunderstood' => 'Fallito (richiesta non capito da SFS)!',
    'failure_timeout' => 'Fallito (richiesta errore o fuori tempo)!',
    'failure_unknown' => 'Si è verificato un errore sconosciuto.',
    'input_submit' => 'Presentare',
    'linkname_addspamdata' => 'Rapporto IP',
    'linkname_downloads' => 'Scaricamenti',
    'linkname_faq' => 'FAQ',
    'linkname_forum' => 'Foro',
    'linkname_home' => 'Inizio',
    'linkname_search' => 'Ricerca',
    'linkname_support' => 'Assistenza',
    'linkname_useful' => 'Strumenti Utili',
    'results_erroneous' => 'Erroneo',
    'results_listed' => 'Elencato',
    'results_not_listed' => 'Non Elencato',
    'separate_entries' => 'Separare voci tramite virgole o interruzioni di riga. Voci dovrebbero consistere di indirizzi IPv4.',
    'success_local' => 'Successo (Locale).',
    'success_remote' => 'Successo (Remota).',
    'table_frequency' => 'Frequenza',
    'table_ip_address' => 'Indirizzo IP',
    'table_last_seen' => 'Ultimo Rapporto',
    'table_lookup_status' => 'Stato',
    'table_spammer' => 'Spammer?'
];
