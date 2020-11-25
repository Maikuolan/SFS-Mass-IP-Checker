<?php
/**
 * SFS MASS IP Checker: A stand-alone script for checking IP addresses en-masse
 * against the Stop Forum Spam database.
 *
 * This file: Japanese language data (last modified: 2020.11.25).
 *
 * This document and its associated package can be downloaded for free from:
 * - GitHub <https://github.com/Maikuolan/SFS-Mass-IP-Checker>.
 *
 * Thanks to Mie Shinohara for the Japanese translations. :-)
 * @author Mie Shinohara
 */

$SFSMassIPChecker['langdata'] = [
    'xmlLang' => 'ja',
    'bannedips_missing' => 'ＳＦＳ（エス・エフ・エス）から最新版の"bannedips.csv"をダウンロードして下さい（サーバーに過度の負担がかかるのを避けるため、このファイルを利用しています）；<br /><br />しばらくお待ちください（ダウンロード完了後ページを自動的にロードします）。。。<br /><br />',
    'bannedips_missing_cant_zip' => '"%PATH%/private/bannedips.csv"が見つかりません！<br />こちらから手動でダウンロードして下さい。：<br /><a href="https://www.stopforumspam.com/downloads/bannedips.zip">https://www.stopforumspam.com/downloads/bannedips.zip</a><br /><br />ダウンロード後、ファイルを SFS Mass IP Checker （エス・エフ・エス・マス・アイピーチェッカー）の\'private\'ディレクトリに解凍し、再度試して下さい。<br /><br />（（サーバーに過度の負担がかかるのを避けるため、このファイルを利用しています。））',
    'cant_write' => 'キャッシュを書き込むことができません！<br />CHMODファイルのパーミッションをチェックして下さい！',
    'erroneous_local' => '誤りがあります（ローカル）。',
    'failure_badip' => '無効なＩＰアドレス！',
    'failure_private' => 'ローカル/プライベートＩＰアドレス！',
    'failure_notunderstood' => '失敗（ＳＦＳはリクエストを理解できません）！',
    'failure_timeout' => '失敗（リクエストに誤りがあるか、またはタイムアウトです）！',
    'failure_unknown' => '不明なエラーが発生しました。',
    'input_submit' => 'サブミット',
    'linkname_addspamdata' => 'スパムデータ追加',
    'linkname_downloads' => 'ダウンロード',
    'linkname_faq' => 'よくある質問',
    'linkname_forum' => 'フォーラム',
    'linkname_home' => 'ホーム',
    'linkname_search' => '検索',
    'linkname_support' => 'サポート',
    'linkname_useful' => '便利なツール',
    'results_erroneous' => '誤りがあります',
    'results_listed' => 'リストされています',
    'results_not_listed' => 'リストされていません',
    'separate_entries' => '入力はIPv4アドレスに準拠したものとし、コンマか改行で区切って下さい。',
    'success_local' => '成功（ローカル）。',
    'success_remote' => '成功（リモート）。',
    'table_frequency' => '周波数',
    'table_ip_address' => 'ＩＰアドレス',
    'table_last_seen' => '最後に見られたのは',
    'table_lookup_status' => 'ステータス',
    'table_spammer' => 'スパマー？'
];
