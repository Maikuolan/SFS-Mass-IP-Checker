<?php
/**
 * SFS MASS IP Checker: A stand-alone script for checking IP addresses en-masse
 * against the Stop Forum Spam database.
 *
 * This file: Spanish language data (last modified: 2020.11.25).
 *
 * This document and its associated package can be downloaded for free from:
 * - GitHub <https://github.com/Maikuolan/SFS-Mass-IP-Checker>.
 *
 * @author Caleb M (Maikuolan)
 */

$SFSMassIPChecker['langdata'] = [
    'xmlLang' => 'es',
    'bannedips_missing' => 'Descargando una copia nueva de "bannedips.csv" desde SFS (utilizamos este archivo para evitar necesidad de hacer un innecesariamente gran número de solicitudes al servidor);<br /><br />Por favor espera (la página se actualizará automáticamente después de la descarga se haya completado)...<br /><br />',
    'bannedips_missing_cant_zip' => 'No puede localizar "%PATH%/private/bannedips.csv"!<br />Por favor, descargar manualmente desde:<br /><a href="https://www.stopforumspam.com/downloads/bannedips.zip">https://www.stopforumspam.com/downloads/bannedips.zip</a><br /><br />Después de descargar, descomprimir el archivo contenido al \'private\' directorio del SFS Mass IP Checker, e inténtalo de nuevo.<br /><br />(( Utilizamos este archivo para evitar necesidad de hacer un innecesariamente gran número de solicitudes al servidor. ))',
    'cant_write' => 'No se puede escribir a la caché!<br />Compruebe sus CHMOD permisos!',
    'erroneous_local' => 'Erróneo (Local).',
    'failure_badip' => 'Dirección IP inválido!',
    'failure_private' => 'Dirección IP local/privada!',
    'failure_notunderstood' => 'Fracaso (solicitud no comprendido por SFS)!',
    'failure_timeout' => 'Fracaso (solicitud error o caducado)!',
    'failure_unknown' => 'Un error desconocido ocurrió.',
    'input_submit' => 'Presentar',
    'linkname_addspamdata' => 'Denunciar IP',
    'linkname_downloads' => 'Descargas',
    'linkname_faq' => 'Preguntas más frecuentes',
    'linkname_forum' => 'Foro',
    'linkname_home' => 'Inicio',
    'linkname_search' => 'Buscar',
    'linkname_support' => 'Apoyo',
    'linkname_useful' => 'Herramientas Útiles',
    'results_erroneous' => 'Erróneo',
    'results_listed' => 'Enlistado',
    'results_not_listed' => 'No Enlistado',
    'separate_entries' => 'Separe las entradas a través de comas o saltos de línea. Entradas deben consistir de IPv4 direcciones.',
    'success_local' => 'Éxito (Local).',
    'success_remote' => 'Éxito (Remota).',
    'table_frequency' => 'Frecuencia',
    'table_ip_address' => 'IP Dirección',
    'table_last_seen' => 'Último Informe',
    'table_lookup_status' => 'Estado',
    'table_spammer' => 'Spammer?'
];
