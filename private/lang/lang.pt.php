<?php
/**
 * SFS MASS IP Checker: A stand-alone script for checking IP addresses en-masse
 * against the Stop Forum Spam database.
 *
 * This file: Portuguese language data (last modified: 2016.09.08).
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

$SFSMassIPChecker['langdata'] = array('xmlLang' => 'pt');

$SFSMassIPChecker['langdata']['bannedips_missing'] = 'Obtendo uma nova cópia do "bannedips.csv" a partir da SFS (nós utilizamos este arquivo a fim de evitar a necessidade de fazer uma desnecessariamente grande número de solicitações para o servidor);<br /><br />Por favor aguarde (a página será atualizada automaticamente após a obtenção do arquivo)...<br /><br />';
$SFSMassIPChecker['langdata']['bannedips_missing_cant_zip'] = 'Não é possível localizar "%PATH%/private/bannedips.csv"!<br />Por favor obter manualmente a partir de:<br /><a href="http://www.stopforumspam.com/downloads/bannedips.zip">http://www.stopforumspam.com/downloads/bannedips.zip</a><br /><br />Depois de obter-lo, descompactar o arquivo contido no diretório \'private\' do SFS Mass IP Checker, e tente novamente.<br /><br />(( Nós utilizamos este arquivo a fim de evitar a necessidade de fazer uma desnecessariamente grande número de solicitações para o servidor. ))';
$SFSMassIPChecker['langdata']['cant_write'] = 'Não é possível gravar para o cache!<br />Por favor verifique suas permissões CHMOD!';
$SFSMassIPChecker['langdata']['erroneous_local'] = 'Errôneo (Local).';
$SFSMassIPChecker['langdata']['failure_badip'] = 'Falha (IP endereço ruim)!';
$SFSMassIPChecker['langdata']['failure_notunderstood'] = 'Falha (solicitação não compreendida por SFS)!';
$SFSMassIPChecker['langdata']['failure_timeout'] = 'Falha (solicitação erro ou tempo esgotado)!';
$SFSMassIPChecker['langdata']['failure_unknown'] = 'Ocorreu um erro desconhecido.';
$SFSMassIPChecker['langdata']['input_submit'] = 'Enviar';
$SFSMassIPChecker['langdata']['linkname_addspamdata'] = 'Relatar IP';
$SFSMassIPChecker['langdata']['linkname_downloads'] = 'Downloads';
$SFSMassIPChecker['langdata']['linkname_faq'] = 'FAQ';
$SFSMassIPChecker['langdata']['linkname_forum'] = 'Fórum';
$SFSMassIPChecker['langdata']['linkname_home'] = 'Página Principal';
$SFSMassIPChecker['langdata']['linkname_search'] = 'Buscar';
$SFSMassIPChecker['langdata']['linkname_support'] = 'Apoio';
$SFSMassIPChecker['langdata']['linkname_useful'] = 'Ferramentas Úteis';
$SFSMassIPChecker['langdata']['results_erroneous'] = 'Errôneo';
$SFSMassIPChecker['langdata']['results_listed'] = 'Listado';
$SFSMassIPChecker['langdata']['results_not_listed'] = 'Não Listado';
$SFSMassIPChecker['langdata']['separate_entries'] = 'Entradas separadas por vírgulas ou quebras de linha. Entradas devem consistir de endereços IPv4.';
$SFSMassIPChecker['langdata']['success_local'] = 'Sucesso (Local).';
$SFSMassIPChecker['langdata']['success_remote'] = 'Sucesso (Remota).';
$SFSMassIPChecker['langdata']['table_frequency'] = 'Freqüência';
$SFSMassIPChecker['langdata']['table_ip_address'] = 'IP Endereço';
$SFSMassIPChecker['langdata']['table_last_seen'] = 'Última Relatório';
$SFSMassIPChecker['langdata']['table_lookup_status'] = 'Estado';
$SFSMassIPChecker['langdata']['table_spammer'] = 'Spammer?';
