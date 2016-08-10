<?php
/**
 * SFS MASS IP Checker: A stand-alone script for checking IP addresses en-masse
 * against the Stop Forum Spam database.
 *
 * This file: Core script file (last modified: 2016.08.10).
 *
 * This document and its associated package can be downloaded for free from:
 * - GitHub <https://github.com/Maikuolan/SFS-Mass-IP-Checker>.
 *
 * @package Maikuolan/SFS-Mass-IP-Checker
 * @author Caleb M / Maikuolan
 *
 * @todo Future goal: Complete the incomplete i18n translations.
 * @todo Future goal: TCPDF integration and PDF export functionality.
 * @todo Future goal: CSV export functionality.
 */

define('SFSMassIPChecker', true);

parse_str($_SERVER['QUERY_STRING'], $query);

/** Define basic script variables. */
$SFSMassIPChecker = array(
    'ScriptVersion' => '0.1.2',
    'UserIPAddr' => $_SERVER['REMOTE_ADDR'],
    'CacheModified' => false,
    'Limit' => 9999,
    'Path' => __DIR__,
    'bannedipsAppend' => '',
    'cleanAppend' => '',
    'erroneousAppend' => '',
    'Time' => time()
);

/** Define the script UA. */
$SFSMassIPChecker['UserAgent'] =
    'SFS-Mass-IP-Checker/' . $SFSMassIPChecker['ScriptVersion'] .
    ' (https://github.com/Maikuolan/SFS-Mass-IP-Checker) via ' .
    $SFSMassIPChecker['UserIPAddr'];

/** Fetch submitted IPs. */
$SFSMassIPChecker['IPAddr'] =
    (!empty($_POST['IPAddr'])) ? $_POST['IPAddr'] : (
        (!empty($query['IPAddr'])) ? $query['IPAddr'] : ''
    );

/** Fetch language selection. */
$SFSMassIPChecker['lang'] =
    (!empty($_POST['lang'])) ? strtolower($_POST['lang']) : (
        (!empty($query['lang'])) ? strtolower($query['lang']) : false
    );

/**
 * Reads and returns the contents of files.
 *
 * @param string $f Path and filename of the file to read.
 * @return string Content of the file returned by the function.
 */
function SFSMassIPCheckerFileFetcher($f) {
    if (!is_file($f)) {
        return false;
    }
    $s = @ceil(filesize($f) / 49152);
    $d = '';
    if ($s > 0) {
        $fh = fopen($f, 'rb');
        $r = 0;
        while ($r < $s) {
            $d .= fread($fh, 49152);
            $r++;
        }
        fclose($fh);
    }
    return (!empty($d)) ? $d : false;
}

/**
 * Parses the `template.html` file and is responsible for the page output to
 * the browser.
 *
 * @param string|array $pagedata Data variables to be parsed into the
 *      `template.html` by the function.
 * @return string Parsed `template.html` data to be used for page output.
 */
function ParseTemplate($pagedata) {
    $template = SFSMassIPCheckerFileFetcher($GLOBALS['SFSMassIPChecker']['Path'] . '/private/template.html');
    if (is_array($pagedata)) {
        $c = count($pagedata);
        for ($i = 0; $i < $c; $i++) {
            $k = key($pagedata);
            $template = str_replace('{' . $k . '}', $pagedata[$k], $template);
            next($pagedata);
        }
    } elseif (!empty($pagedata)) {
        $template = str_replace('{pagedata}', $pagedata, $template);
    }
    $arr = $GLOBALS['SFSMassIPChecker']['langdata'];
    reset($arr);
    $c = count($arr);
    for($i = 0; $i < $c; $i++) {
        $k = key($arr);
        $template = str_replace('{' . $k . '}', $arr[$k], $template);
        next($arr);
    }
    return $template;
}

/** Caching stuff. */
if (!file_exists($SFSMassIPChecker['Path'] . '/private/cache.dat')) {
    $SFSMassIPChecker['handle'] = fopen($SFSMassIPChecker['Path'] . '/private/cache.dat', 'w');
    $SFSMassIPChecker['Cache'] = array(
        'lang' => 'en',
        'Counter' => '0',
        'LastCounterReset' => $SFSMassIPChecker['Time'],
        'LastBlackReset' => $SFSMassIPChecker['Time'],
        'LastWhiteReset' => $SFSMassIPChecker['Time']
    );
    fwrite($SFSMassIPChecker['handle'], serialize($SFSMassIPChecker['Cache']));
    fclose($SFSMassIPChecker['handle']);
    if (!file_exists($SFSMassIPChecker['Path'] . '/private/cache.dat')) {
        die(ParseTemplate($SFSMassIPChecker['langdata']['cant_write']));
    }
} else {
    $SFSMassIPChecker['Cache'] =
        unserialize(SFSMassIPCheckerFileFetcher($SFSMassIPChecker['Path'] . '/private/cache.dat'));
    if (!isset($SFSMassIPChecker['Cache']['lang'])) {
        $SFSMassIPChecker['CacheModified'] = true;
        $SFSMassIPChecker['Cache']['lang'] = 'en';
    }
    if (!isset($SFSMassIPChecker['Cache']['Counter'])) {
        $SFSMassIPChecker['CacheModified'] = true;
        $SFSMassIPChecker['Cache']['Counter'] = 0;
    }
    if (!isset($SFSMassIPChecker['Cache']['LastWhiteReset'])) {
        $SFSMassIPChecker['CacheModified'] = true;
        $SFSMassIPChecker['Cache']['LastWhiteReset'] = $SFSMassIPChecker['Time'];
    }
    if (!isset($SFSMassIPChecker['Cache']['LastBlackReset'])) {
        $SFSMassIPChecker['CacheModified'] = true;
        $SFSMassIPChecker['Cache']['LastBlackReset'] = $SFSMassIPChecker['Time'];
    }
    if (!isset($SFSMassIPChecker['Cache']['LastCounterReset'])) {
        $SFSMassIPChecker['CacheModified'] = true;
        $SFSMassIPChecker['Cache']['LastCounterReset'] = $SFSMassIPChecker['Time'];
    }
}

if (!$SFSMassIPChecker['lang']) {
    $SFSMassIPChecker['lang'] = $SFSMassIPChecker['Cache']['lang'];
}

/** Safety mechanism (prevents defining unavailable languages). */
if (!substr_count(',en,de,es,fr,id,it,ja,nl,pt,ru,vi,zh,zh-TW,', ',' . $SFSMassIPChecker['lang'] . ',')) {
    $SFSMassIPChecker['lang'] = 'en';
}

/** Fetch language data. */
require $GLOBALS['SFSMassIPChecker']['Path'] . '/private/lang/lang.' . $SFSMassIPChecker['lang'] . '.php';

$SFSMassIPChecker['Counter'] = $SFSMassIPChecker['Cache']['Counter'];

/** Update language selection when necessary. */
if ($SFSMassIPChecker['Cache']['lang'] !== $SFSMassIPChecker['lang']) {
    $SFSMassIPChecker['CacheModified'] = true;
    $SFSMassIPChecker['Cache']['lang'] = $SFSMassIPChecker['lang'];
}

if (!function_exists('is_serialized')) {
    /**
     * This function checks whether the input is serialized data.
     *
     * @param string $input Variable to check.
     * @return bool Returns true if the input is serialized data.
     */
    function is_serialized($input) {
        return ($input === serialize(false) || @unserialize($input) !== false);
    }
}

/**
 * This is the main function of the SFS Mass IP Checker responsible for
 * actually handling the IPs to be checked and for checking them against SFS.
 *
 * @param string $IPAddr A list of IPv4 addresses to check against the SFS
 *      database, delimited by newlines or commas.
 * @param bool $PreChecked Used by the function when recursively calling
 *      (should never be defined outside of recursive calls).
 * @param bool $EntryID Used by the function when recursively calling (should
 *      never be defined outside of recursive calls).
 * @param bool $Final Used by the function when recursively calling (should
 *      never be defined outside of recursive calls).
 * @return string|array|bool Returned data depends upon context (read further
 *      into the code and documentation for a better understanding).
 */
function SFSMassIPCheckerCheckIP($IPAddr, $PreChecked = false, $EntryID = false, $Final = false) {
    if (!isset($GLOBALS['SFSMassIPChecker']['bannedips'])) {
        $GLOBALS['SFSMassIPChecker']['bannedips'] =
            ',' . SFSMassIPCheckerFileFetcher($GLOBALS['SFSMassIPChecker']['Path'] . '/private/bannedips.csv');
    }
    if (!isset($GLOBALS['SFSMassIPChecker']['clean'])) {
        $GLOBALS['SFSMassIPChecker']['clean'] =
            ',' . SFSMassIPCheckerFileFetcher($GLOBALS['SFSMassIPChecker']['Path'] . '/private/clean.csv');
    }
    if (!isset($GLOBALS['SFSMassIPChecker']['erroneous'])) {
        $GLOBALS['SFSMassIPChecker']['erroneous'] =
            ',' . SFSMassIPCheckerFileFetcher($GLOBALS['SFSMassIPChecker']['Path'] . '/private/erroneous.csv');
    }
    if (is_array($IPAddr)) {
        if (
            !isset($GLOBALS['SFSMassIPChecker']['PostChecked']) ||
            !isset($GLOBALS['SFSMassIPChecker']['BulkResults']) ||
            !isset($GLOBALS['SFSMassIPChecker']['BulkQuery']) ||
            !isset($GLOBALS['SFSMassIPChecker']['BulkIntID']) ||
            !isset($GLOBALS['SFSMassIPChecker']['BulkProcMe'])
        ) {
            return false;
        }
        if (!$PreChecked) {
            $IPAddr = array_unique($IPAddr);
            sort($IPAddr);
        }
        reset($IPAddr);
        $c = count($IPAddr);
        for($i = 0; $i < $c; $i++) {
            $k = key($IPAddr);
            $Final = ($i + 1 === $c);
            if (!$PreChecked) {
                $GLOBALS['SFSMassIPChecker']['PostChecked'][$k] = $IPAddr[$k];
            }
            $GLOBALS['SFSMassIPChecker']['BulkProcMe'] = false;
            $IPAddr[$k] = SFSMassIPCheckerCheckIP($IPAddr[$k], $PreChecked, $k, $Final);
            if ($GLOBALS['SFSMassIPChecker']['BulkProcMe']) {
                $ic = count($IPAddr[$k]);
                for($ii = 0; $ii < $ic; $ii++) {
                    $IPAddr[$GLOBALS['SFSMassIPChecker']['BulkResults'][$ii]] = $IPAddr[$k][$ii];
                }
                $GLOBALS['SFSMassIPChecker']['BulkResults'] = array();
            }
            next($IPAddr);
        }
        if (!$PreChecked) {
            return SFSMassIPCheckerCheckIP($IPAddr, true);
        }
        return $IPAddr;
    }
    if ($EntryID === false) {
        return false;
    }
    if (!$PreChecked) {
        if (empty($IPAddr)) {
            return $IPAddr . ',' . $GLOBALS['SFSMassIPChecker']['langdata']['failure_badip'] . ',0';
        }
        if (substr_count($GLOBALS['SFSMassIPChecker']['bannedips'], ',' . $IPAddr . ',')) {
            return $IPAddr . ',' . $GLOBALS['SFSMassIPChecker']['langdata']['success_local'] . ',>0';
        }
        if (substr_count($GLOBALS['SFSMassIPChecker']['clean'], ',' . $IPAddr . ',')) {
            return $IPAddr . ',' . $GLOBALS['SFSMassIPChecker']['langdata']['success_local'] . ',0';
        }
        if (substr_count($GLOBALS['SFSMassIPChecker']['erroneous'], ',' . $IPAddr . ',')) {
            return $IPAddr . ',' . $GLOBALS['SFSMassIPChecker']['langdata']['erroneous_local'] . ',!';
        }
        return false;
    }
    if ($IPAddr !== false) {
        return $IPAddr;
    }
    if (!isset($GLOBALS['SFSMassIPChecker']['PostChecked'][$EntryID])) {
        return false;
    }
    $IPAddr = $GLOBALS['SFSMassIPChecker']['PostChecked'][$EntryID];
    if (!empty($GLOBALS['SFSMassIPChecker']['BulkQuery'])) {
        $GLOBALS['SFSMassIPChecker']['BulkQuery'] .= '&';
    }
    $GLOBALS['SFSMassIPChecker']['BulkQuery'] .= 'ip[]=' . urlencode($IPAddr);
    $GLOBALS['SFSMassIPChecker']['BulkResults'][$GLOBALS['SFSMassIPChecker']['BulkIntID']] = $EntryID;
    $GLOBALS['SFSMassIPChecker']['BulkIntID']++;
    if ($Final || $GLOBALS['SFSMassIPChecker']['BulkIntID'] > 14) {
        $Context = stream_context_create(array(
            'http' => array(
                'method' => 'POST',
                'header' => 'Content-type: application/x-www-form-urlencoded; charset=iso-8859-1',
                'user_agent' => $GLOBALS['SFSMassIPChecker']['UserAgent'],
                'content' => $GLOBALS['SFSMassIPChecker']['BulkQuery'],
                'timeout' => 120
            )
        ));
        $Results = @file_get_contents(
            'http://www.stopforumspam.com/api?' . $GLOBALS['SFSMassIPChecker']['BulkQuery'] . '&f=serial',
            false,
            $Context
        );
        $GLOBALS['SFSMassIPChecker']['BulkProcMe'] = true;
        $GLOBALS['SFSMassIPChecker']['BulkQuery'] = '';
        $GLOBALS['SFSMassIPChecker']['BulkIntID'] = 0;
        $GLOBALS['SFSMassIPChecker']['Counter']++;
        if (!is_serialized($Results)) {
            /**
             * @todo Replace error message placeholder with a proper error
             *      message and implement appropriate code accordingly
             *      (placeholders aren't meant to be permanent).
             */
            die('Error message placeholder 001');
            if (substr_count($Results, 'request not understood')) {
                $appears = $GLOBALS['SFSMassIPChecker']['langdata']['failure_notunderstood'];
            } elseif (!$Results) {
                $appears = $GLOBALS['SFSMassIPChecker']['langdata']['failure_timeout'];
            }
        }
        $Results = unserialize($Results);
        if (!isset($Results['success']) || !isset($Results['ip'])) {
            /**
             * @todo Replace error message placeholder with a proper error
             *      message and implement appropriate code accordingly
             *      (placeholders aren't meant to be permanent).
             */
            die('Error message placeholder 002');
            return false;
        }
        $c = count($Results['ip']);
        $Output = array();
        for($i = 0; $i < $c; $i++) {
            if (isset($Results['ip'][$i]['appears'])) {
                $Results['ip'][$i]['appears'] = $GLOBALS['SFSMassIPChecker']['langdata']['success_remote'];
            } else {
                $GLOBALS['SFSMassIPChecker']['erroneousAppend'] .= $Results['ip'][$i]['value'] . ',';
                $Output[$i] = $Results['ip'][$i]['value'] . ',' . $GLOBALS['SFSMassIPChecker']['langdata']['failure_timeout'] . ',!';
                continue;
            }
            if (empty($Results['ip'][$i]['frequency'])) {
                $Results['ip'][$i]['frequency'] = 0;
            }
            if ($Results['ip'][$i]['frequency'] > 0) {
                $GLOBALS['SFSMassIPChecker']['bannedipsAppend'] .= $Results['ip'][$i]['value'] . ',';
            } else {
                $GLOBALS['SFSMassIPChecker']['cleanAppend'] .= $Results['ip'][$i]['value'] . ',';
            }
            $Output[$i] = $Results['ip'][$i]['value'] . ',' . $Results['ip'][$i]['appears'] . ',' . $Results['ip'][$i]['frequency'];
        }
        return $Output;
    }
    return false;
}

/**
 * Deletes cache information for clean and erroneous IP entries after 1 day.
 */
if (
    $SFSMassIPChecker['Cache']['LastWhiteReset'] > 0 &&
    ($SFSMassIPChecker['Cache']['LastWhiteReset'] + 86400) < $SFSMassIPChecker['Time']
) {
    if (file_exists($GLOBALS['SFSMassIPChecker']['Path'] . '/private/clean.csv')) {
        unlink($GLOBALS['SFSMassIPChecker']['Path'] . '/private/clean.csv');
    }
    if (file_exists($GLOBALS['SFSMassIPChecker']['Path'] . '/private/erroneous.csv')) {
        unlink($GLOBALS['SFSMassIPChecker']['Path'] . '/private/erroneous.csv');
    }
    $SFSMassIPChecker['CacheModified'] = true;
    $SFSMassIPChecker['Cache']['LastWhiteReset'] = $SFSMassIPChecker['Time'];
}

/**
 * Deletes old "bannedips.csv" file after 1 week (a fresh copy will be
 * recreated upon the next subsequent request to the script).
 */
if (
    $SFSMassIPChecker['Cache']['LastBlackReset'] > 0 &&
    ($SFSMassIPChecker['Cache']['LastBlackReset'] + 604800) < $SFSMassIPChecker['Time']
) {
    if (file_exists($GLOBALS['SFSMassIPChecker']['Path'] . '/private/bannedips.csv')) {
        unlink($GLOBALS['SFSMassIPChecker']['Path'] . '/private/bannedips.csv');
    }
    $SFSMassIPChecker['CacheModified'] = true;
    $SFSMassIPChecker['Cache']['LastBlackReset'] = $SFSMassIPChecker['Time'];
}

/**
 * Deletes cache information for the request rate quota and requests count
 * after 1 day.
 */
if (
    $SFSMassIPChecker['Cache']['LastCounterReset'] > 0 &&
    ($SFSMassIPChecker['Cache']['LastCounterReset'] + 86400) < $SFSMassIPChecker['Time']
) {
    $SFSMassIPChecker['CacheModified'] = true;
    $SFSMassIPChecker['Cache']['Counter'] = $SFSMassIPChecker['Counter'] = 0;
    $SFSMassIPChecker['Cache']['LastCounterReset'] = $SFSMassIPChecker['Time'];
}

/**
 * Downloads "bannedips.zip" from Stop Forum Spam and extracts the contained
 * "bannedips.csv" file to the "private" directory of the SFS Mass IP Checker,
 * when possible, if the file doesn't already exist.
 */
if (!file_exists($SFSMassIPChecker['Path'] . '/private/bannedips.csv')) {
    if (!function_exists('zip_open')) {
        die(ParseTemplate($SFSMassIPChecker['langdata']['bannedips_missing_cant_zip']));
    }
    echo
        '<html><body onload="javascript:location.reload(true);"><p style="font-family' .
        ':monospace;white-space:pre;">:: SFS-Mass-IP-Checker ::<br /><br />' .
        $SFSMassIPChecker['langdata']['bannedips_missing'] . '</p>';
    $SFSMassIPChecker['handle'] = stream_context_create(array(
        'http' => array(
            'method' => 'GET',
            'header' => 'Content-type: application/x-www-form-urlencoded; charset=iso-8859-1',
            'user_agent' => $SFSMassIPChecker['UserAgent'],
            'content' => '',
            'timeout' => 300
        )
    ));
    $SFSMassIPChecker['stream'] = @file_get_contents(
        'http://www.stopforumspam.com/downloads/bannedips.zip',
        false,
        $SFSMassIPChecker['handle']
    );
    $SFSMassIPChecker['handle'] = fopen($SFSMassIPChecker['Path'] . '/private/bannedips.zip', 'wb');
    fwrite($SFSMassIPChecker['handle'], $SFSMassIPChecker['stream']);
    fclose($SFSMassIPChecker['handle']);
    $SFSMassIPChecker['stream'] = zip_open($SFSMassIPChecker['Path'] . '/private/bannedips.zip');
    while(true) {
        if (!$SFSMassIPChecker['handle'] = @zip_read($SFSMassIPChecker['stream'])) {
            break;
        }
        if (zip_entry_name($SFSMassIPChecker['handle']) === 'bannedips.csv') {
            $SFSMassIPChecker['ZipData'] =
                @zip_entry_read($SFSMassIPChecker['handle'], zip_entry_filesize($SFSMassIPChecker['handle']));
        }
    }
    zip_close($SFSMassIPChecker['stream']);
    if (!empty($SFSMassIPChecker['ZipData'])) {
        $SFSMassIPChecker['handle'] = fopen($SFSMassIPChecker['Path'] . '/private/bannedips.csv', 'w');
        fwrite($SFSMassIPChecker['handle'], $SFSMassIPChecker['ZipData']);
        fclose($SFSMassIPChecker['handle']);
    } else {
        $SFSMassIPChecker['handle'] = fopen($SFSMassIPChecker['Path'] . '/private/bannedips.csv', 'w');
        fwrite($SFSMassIPChecker['handle'], ',');
        fclose($SFSMassIPChecker['handle']);
    }
    /** Deletes the old "bannedips.zip", which we now no longer need. */
    unlink($SFSMassIPChecker['Path'] . '/private/bannedips.zip');
    /**
     * Save cache data to the cache (prevents infinite loop with page
     * reloading).
     */
    if ($SFSMassIPChecker['CacheModified']) {
        $SFSMassIPChecker['handle'] = fopen($SFSMassIPChecker['Path'] . '/private/cache.dat', 'w');
        fwrite($SFSMassIPChecker['handle'], serialize($SFSMassIPChecker['Cache']));
        fclose($SFSMassIPChecker['handle']);
    }
    /**
     * We die here, so that we can reload everything with the correct data.
     */
    die('</body></html>');
}

/**
 * The main body of the page (the HTML form used to submit data for querying).
 */
$SFSMassIPChecker['PageBody'] =
    '<form action="" method="POST" name="SFSMassIPChecker"><center>' .
    $SFSMassIPChecker['langdata']['separate_entries'] . '<br /><br /><textar' .
    'ea name="IPAddr" id="IPAddr" style="width:98%;height:100px;"></textarea' .
    '><br /><br /><input style="font-family:\'Lucida Grande\',Tahoma,Verdana' .
    ',Arial,MingLiU;font-size:10px;letter-spacing:1px;text-align:center;text' .
    '-decoration:none;color:#333333;" type="submit" value="' .
    $SFSMassIPChecker['langdata']['input_submit'] . '" /></center></form>';

/**
 * If the user has submitted IPs to be checked by the SFS Mass IP Checker, make
 * necessary preparations, call the `SFSMassIPCheckerCheckIP()` function and
 * prepare to parse the results into the $SFSMassIPChecker['PageBody'], so that
 * the template handler can display the results to the user.
 */
if (!empty($SFSMassIPChecker['IPAddr'])) {

    $SFSMassIPChecker['IPAddr'] =
        preg_replace('/[^,\n0-9\.]/', '', $SFSMassIPChecker['IPAddr']);
    $SFSMassIPChecker['IPAddr'] =
        preg_split('/[,\n\r]+/', $SFSMassIPChecker['IPAddr'], -1, PREG_SPLIT_NO_EMPTY);
    $SFSMassIPChecker['bannedips'] =
        SFSMassIPCheckerFileFetcher($SFSMassIPChecker['Path'] . '/private/bannedips.csv');
    $SFSMassIPChecker['BulkResults'] =
    $SFSMassIPChecker['PostChecked'] = array();
    $SFSMassIPChecker['BulkQuery'] = '';
    $SFSMassIPChecker['BulkIntID'] = 0;
    $SFSMassIPChecker['BulkProcMe'] = false;
    $SFSMassIPChecker['Results'] =
        SFSMassIPCheckerCheckIP($SFSMassIPChecker['IPAddr']);
    unset(
        $SFSMassIPChecker['BulkProcMe'],
        $SFSMassIPChecker['BulkIntID'],
        $SFSMassIPChecker['BulkQuery'],
        $SFSMassIPChecker['BulkResults'],
        $SFSMassIPChecker['PostChecked']
    );

    $SFSMassIPChecker['PageBody'] .=
        '<hr /><center><table style="width:500px;text-align:center;"><tr><td><strong>' .
        $SFSMassIPChecker['langdata']['table_ip_address'] . '</strong></td><td><stron' .
        'g>' . $SFSMassIPChecker['langdata']['table_lookup_status'] . '</strong></td>' .
        '<td><strong>' . $SFSMassIPChecker['langdata']['table_spammer'] . '</strong><' .
        '/td><td><strong>' . $SFSMassIPChecker['langdata']['table_frequency'] .
        '</strong></td></tr>';

    reset($SFSMassIPChecker['Results']);

    $SFSMassIPChecker['c'] = count($SFSMassIPChecker['Results']);

    for(
        $SFSMassIPChecker['i'] = 0;
        $SFSMassIPChecker['i'] < $SFSMassIPChecker['c'];
        $SFSMassIPChecker['i']++
    ) {
        $SFSMassIPChecker['Results'][$SFSMassIPChecker['i']] =
            explode(',', $SFSMassIPChecker['Results'][$SFSMassIPChecker['i']]);
        if ($SFSMassIPChecker['Results'][$SFSMassIPChecker['i']][2] === '0') {
            $SFSMassIPChecker['PageBody'] .=
                '<tr><td><a href="http://www.stopforumspam.com/ipcheck/' .
                $SFSMassIPChecker['Results'][$SFSMassIPChecker['i']][0] .
                '">' .
                $SFSMassIPChecker['Results'][$SFSMassIPChecker['i']][0] .
                '</a></td><td>' .
                $SFSMassIPChecker['Results'][$SFSMassIPChecker['i']][1] .
                '</td><td><span style="color:#009900">' .
                $SFSMassIPChecker['langdata']['results_not_listed'] .
                '</span></td><td>' .
                $SFSMassIPChecker['Results'][$SFSMassIPChecker['i']][2] .
                '</td></tr>';
        } else {
            $SFSMassIPChecker['PageBody'] .=
                ($SFSMassIPChecker['Results'][$SFSMassIPChecker['i']][2] === '!') ?
                    '<tr><td>' .
                    $SFSMassIPChecker['Results'][$SFSMassIPChecker['i']][0] .
                    '</td><td>' .
                    $SFSMassIPChecker['Results'][$SFSMassIPChecker['i']][1] .
                    '</td><td><span style="color:#ff8800">' .
                    $SFSMassIPChecker['langdata']['results_erroneous'] .
                    '</span></td><td>' .
                    $SFSMassIPChecker['Results'][$SFSMassIPChecker['i']][2] .
                    '</td></tr>'
                :
                    '<tr><td><a href="http://www.stopforumspam.com/ipcheck/' .
                    $SFSMassIPChecker['Results'][$SFSMassIPChecker['i']][0] .
                    '">' .
                    $SFSMassIPChecker['Results'][$SFSMassIPChecker['i']][0] .
                    '</a></td><td>' .
                    $SFSMassIPChecker['Results'][$SFSMassIPChecker['i']][1] .
                    '</td><td><span style="color:#990000">' .
                    $SFSMassIPChecker['langdata']['results_listed'] .
                    '</span></td><td>' .
                    $SFSMassIPChecker['Results'][$SFSMassIPChecker['i']][2] .
                    '</td></tr>';
        }
    }
    unset($SFSMassIPChecker['Results']);
    $SFSMassIPChecker['PageBody'] .= '</table></center>';
    if ($SFSMassIPChecker['Cache']['Counter'] !== $SFSMassIPChecker['Counter']) {
        $SFSMassIPChecker['CacheModified'] = true;
        $SFSMassIPChecker['Cache']['Counter'] = $SFSMassIPChecker['Counter'];
    }
    if (!empty($SFSMassIPChecker['bannedipsAppend'])) {
        $SFSMassIPChecker['handle'] = fopen($SFSMassIPChecker['Path'] . '/private/bannedips.csv', 'a');
        fwrite($SFSMassIPChecker['handle'], $SFSMassIPChecker['bannedipsAppend']);
        fclose($SFSMassIPChecker['handle']);
    }
    if (!empty($SFSMassIPChecker['cleanAppend'])) {
        $SFSMassIPChecker['handle'] = fopen($SFSMassIPChecker['Path'] . '/private/clean.csv', 'a');
        fwrite($SFSMassIPChecker['handle'], $SFSMassIPChecker['cleanAppend']);
        fclose($SFSMassIPChecker['handle']);
    }
    if (!empty($SFSMassIPChecker['erroneousAppend'])) {
        $SFSMassIPChecker['handle'] = fopen($SFSMassIPChecker['Path'] . '/private/erroneous.csv', 'a');
        fwrite($SFSMassIPChecker['handle'], $SFSMassIPChecker['erroneousAppend']);
        fclose($SFSMassIPChecker['handle']);
    }
}

/** Save cache data to the cache. */
if ($SFSMassIPChecker['CacheModified']) {
    $SFSMassIPChecker['handle'] = fopen($SFSMassIPChecker['Path'] . '/private/cache.dat', 'w');
    fwrite($SFSMassIPChecker['handle'], serialize($SFSMassIPChecker['Cache']));
    fclose($SFSMassIPChecker['handle']);
}

/** Prepare final page output and kill the script. */
die(ParseTemplate($SFSMassIPChecker['PageBody']));
