<?php
/**
 * SFS MASS IP Checker: A stand-alone script for checking IP addresses en-masse
 * against the Stop Forum Spam database.
 *
 * This file: Portuguese language data (last modified: 2020.11.25).
 *
 * This document and its associated package can be downloaded for free from:
 * - GitHub <https://github.com/Maikuolan/SFS-Mass-IP-Checker>.
 *
 * @author Caleb M (Maikuolan)
 */

$SFSMassIPChecker['langdata'] = [
    'xmlLang' => 'pt',
    'bannedips_missing' => 'Obtendo uma nova cópia de "bannedips.csv" a partir da SFS (nós utilizamos este arquivo a fim de evitar a necessidade de fazer um grande número de solicitações desnecessárias para o servidor);<br /><br />Por favor aguarde (a página será atualizada automaticamente após a obtenção do arquivo)...<br /><br />',
    'bannedips_missing_cant_zip' => 'Não é possível localizar "%PATH%/private/bannedips.csv"!<br />Por favor faça o download manualmente a partir de:<br /><a href="https://www.stopforumspam.com/downloads/bannedips.zip">https://www.stopforumspam.com/downloads/bannedips.zip</a><br /><br />Depois de o obter, descompactar o arquivo contido no diretório \'private\' do SFS Mass IP Checker, e tente novamente.<br /><br />(( Nós utilizamos este arquivo a fim de evitar a necessidade de fazer um grande número de solicitações desnecessárias para o servidor. ))',
    'cant_write' => 'Não é possível gravar para a cache!<br />Por favor verifique suas permissões CHMOD!',
    'erroneous_local' => 'Errôneo (Local).',
    'failure_badip' => 'Endereço IP inválido!',
    'failure_private' => 'Endereço IP local/privado!',
    'failure_notunderstood' => 'Falha (solicitação não compreendida por SFS)!',
    'failure_timeout' => 'Falha (solicitação erro ou tempo esgotado)!',
    'failure_unknown' => 'Ocorreu um erro desconhecido.',
    'input_submit' => 'Enviar',
    'linkname_addspamdata' => 'Denunciar IP',
    'linkname_downloads' => 'Downloads',
    'linkname_faq' => 'FAQ',
    'linkname_forum' => 'Fórum',
    'linkname_home' => 'Página Principal',
    'linkname_search' => 'Procurar',
    'linkname_support' => 'Apoio',
    'linkname_useful' => 'Ferramentas Úteis',
    'results_erroneous' => 'Errôneo',
    'results_listed' => 'Listado',
    'results_not_listed' => 'Não Listado',
    'separate_entries' => 'Entradas separadas por vírgulas ou quebras de linha. Entradas devem consistir de endereços IPv4.',
    'success_local' => 'Sucesso (Local).',
    'success_remote' => 'Sucesso (Remota).',
    'table_frequency' => 'Frequência',
    'table_ip_address' => 'Endereço IP',
    'table_last_seen' => 'Último Relatório',
    'table_lookup_status' => 'Estado',
    'table_spammer' => 'Spammer?'
];
