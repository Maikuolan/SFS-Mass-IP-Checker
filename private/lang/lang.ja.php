<?php
/**
 * SFS MASS IP Checker: A stand-alone script for checking IP addresses en-masse
 * against the Stop Forum Spam database.
 *
 * This file: Japanese language data (last modified: 2016.03.12).
 * 
 * This document and its associated package can be downloaded for free from:
 * - GitHub <https://github.com/Maikuolan/SFS-Mass-IP-Checker>.
 *
 * @package Maikuolan/SFS-Mass-IP-Checker
 *
 * Thanks to Mie Shinohara for the Japanese translations. :-)
 * @author Mie Shinohara
 */

/**
 * Prevents execution from outside of the script.
 */
if(!defined('SFSMassIPChecker'))die('[SFS-Mass-IP-Checker] This should not be accessed directly.');

$SFSMassIPChecker['langdata']=array();
$SFSMassIPChecker['langdata']['xmlLang'] = 'ja';

$SFSMassIPChecker['langdata']['bannedips_missing'] = 'SFS（エス・エフ・エス）から最新版の"bannedips.csv"をダウンロードして下さい（サーバーに過度の負担がかかるのを避けるため、このファイルを利用しています）；<br /><br />しばらくお待ちください（ダウンロード完了後ページを自動的にロードします）。。。<br /><br />';
$SFSMassIPChecker['langdata']['bannedips_missing_cant_zip'] = '"%PATH%/private/bannedips.csv"が見つかりません！<br />こちらから手動でダウンロードして下さい。：<br /><a href="http://www.stopforumspam.com/downloads/bannedips.zip">http://www.stopforumspam.com/downloads/bannedips.zip</a><br /><br />ダウンロード後、ファイルを SFS Mass IP Checker（エス・エフ・エス・マス・アイピーチェッカー）の\'private\'ディレクトリに解凍し、再度試して下さい。<br /><br />（（サーバーに過度の負担がかかるのを避けるため、このファイルを利用しています。））';
$SFSMassIPChecker['langdata']['cant_write'] = 'キャッシュを書き込むことができません！<br />CHMODファイルのパーミッションをチェックして下さい！';
$SFSMassIPChecker['langdata']['erroneous_local'] = '誤りがあります（ローカル）。';
$SFSMassIPChecker['langdata']['failure_badip'] = '失敗（不正IPアドレス）！';
$SFSMassIPChecker['langdata']['failure_notunderstood'] = '失敗（SFSはリクエストを理解できません）！';
$SFSMassIPChecker['langdata']['failure_timeout'] = '失敗（リクエストに誤りがあるか、またはタイムアウトです）！';
$SFSMassIPChecker['langdata']['input_submit'] = 'サブミット';
$SFSMassIPChecker['langdata']['linkname_addspamdata'] = 'スパムデータ追加';
$SFSMassIPChecker['langdata']['linkname_downloads'] = 'ダウンロード';
$SFSMassIPChecker['langdata']['linkname_faq'] = 'よくある質問';
$SFSMassIPChecker['langdata']['linkname_forum'] = 'フォーラム';
$SFSMassIPChecker['langdata']['linkname_home'] = 'ホーム';
$SFSMassIPChecker['langdata']['linkname_search'] = '検索';
$SFSMassIPChecker['langdata']['linkname_support'] = 'サポート';
$SFSMassIPChecker['langdata']['linkname_useful'] = '便利なツール';
$SFSMassIPChecker['langdata']['results_erroneous'] = '誤りがあります';
$SFSMassIPChecker['langdata']['results_listed'] = 'リストされています';
$SFSMassIPChecker['langdata']['results_not_listed'] = 'リストされていません';
$SFSMassIPChecker['langdata']['separate_entries'] = '入力はIPv4アドレスに準拠したものとし、コンマか改行で区切って下さい。';
$SFSMassIPChecker['langdata']['success_local'] = '成功（ローカル）。';
$SFSMassIPChecker['langdata']['success_remote'] = '成功（リモート）。';
$SFSMassIPChecker['langdata']['table_frequency'] = '周波数';
$SFSMassIPChecker['langdata']['table_ip_address'] = 'IPアドレス';
$SFSMassIPChecker['langdata']['table_last_seen'] = '最後に見られたのは';
$SFSMassIPChecker['langdata']['table_lookup_status'] = 'ステータス';
$SFSMassIPChecker['langdata']['table_spammer'] = 'スパマー？';
