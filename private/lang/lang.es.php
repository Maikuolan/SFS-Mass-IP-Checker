<?php
/**
 * SFS MASS IP Checker: A stand-alone script for checking IP addresses en-masse
 * against the Stop Forum Spam database.
 *
 * This file: Spanish language data (5th February 2016).
 * 
 * This document and its associated package can be downloaded for free from:
 * - GitHub <https://github.com/Maikuolan/SFS-Mass-IP-Checker>.
 *
 * @package Maikuolan/SFS-Mass-IP-Checker
 *
 * @todo Should get these translations audited/checked by a fluent/native speaker. I am not a fluent/native speaker, and so, can't guarantee the accuracy of these translations.
 * @author Caleb M / Maikuolan
 */

/**
 * Prevents execution from outside of the script.
 */
if(!defined('SFSMassIPChecker'))die('[SFS-Mass-IP-Checker] This should not be accessed directly.');

$SFSMassIPChecker['langdata']=array();
$SFSMassIPChecker['langdata']['xmlLang']='es';

$SFSMassIPChecker['langdata']['bannedips_missing']='Descargando una copia nueva de "bannedips.csv" desde SFS (utilizamos este archivo para evitar necesidad de hacer un innecesariamente gran número de solicitudes al servidor);<br /><br />Por favor espera (la página se actualizará automáticamente después de la descarga se haya completado)...<br /><br />';
$SFSMassIPChecker['langdata']['bannedips_missing_cant_zip']='No puede localizar "%PATH%/private/bannedips.csv"!<br />Por favor, descargar manualmente desde:<br /><a href="http://www.stopforumspam.com/downloads/bannedips.zip">http://www.stopforumspam.com/downloads/bannedips.zip</a><br /><br />Después de descargar, descomprimir el archivo contenido al \'private\' directorio del SFS Mass IP Checker, e inténtalo de nuevo.<br /><br />(( Utilizamos este archivo para evitar necesidad de hacer un innecesariamente gran número de solicitudes al servidor. ))';
$SFSMassIPChecker['langdata']['cant_write']='No se puede escribir a la caché!<br />Compruebe sus CHMOD permisos!';
$SFSMassIPChecker['langdata']['erroneous_local']='Erróneo (Local).';
$SFSMassIPChecker['langdata']['failure_badip']='Fracaso (IP dirección mal)!';
$SFSMassIPChecker['langdata']['failure_notunderstood']='Fracaso (solicitud no comprendido por SFS)!';
$SFSMassIPChecker['langdata']['failure_timeout']='Fracaso (solicitud error o caducado)!';
$SFSMassIPChecker['langdata']['input_submit']='Presentar';
$SFSMassIPChecker['langdata']['linkname_addspamdata']='Denunciar IP';
$SFSMassIPChecker['langdata']['linkname_downloads']='Descargas';
$SFSMassIPChecker['langdata']['linkname_faq']='Preguntas más frecuentes';
$SFSMassIPChecker['langdata']['linkname_forum']='Foro';
$SFSMassIPChecker['langdata']['linkname_home']='Inicio';
$SFSMassIPChecker['langdata']['linkname_search']='Buscar';
$SFSMassIPChecker['langdata']['linkname_support']='Apoyo';
$SFSMassIPChecker['langdata']['linkname_useful']='Herramientas Útiles';
$SFSMassIPChecker['langdata']['results_erroneous']='Erróneo';
$SFSMassIPChecker['langdata']['results_listed']='Enlistado';
$SFSMassIPChecker['langdata']['results_not_listed']='No Enlistado';
$SFSMassIPChecker['langdata']['separate_entries']='Separe las entradas a través de comas o saltos de línea. Entradas deben consistir de IPv4 direcciones.';
$SFSMassIPChecker['langdata']['success_local']='Éxito (Local).';
$SFSMassIPChecker['langdata']['success_remote']='Éxito (Remota).';
$SFSMassIPChecker['langdata']['table_frequency']='Frecuencia';
$SFSMassIPChecker['langdata']['table_ip_address']='IP Dirección';
$SFSMassIPChecker['langdata']['table_last_seen']='Último Informe';
$SFSMassIPChecker['langdata']['table_lookup_status']='Estado';
$SFSMassIPChecker['langdata']['table_spammer']='Spammer?';
