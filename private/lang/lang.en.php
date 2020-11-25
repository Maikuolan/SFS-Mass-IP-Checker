<?php
/**
 * SFS MASS IP Checker: A stand-alone script for checking IP addresses en-masse
 * against the Stop Forum Spam database.
 *
 * This file: English language data (last modified: 2020.11.25).
 *
 * This document and its associated package can be downloaded for free from:
 * - GitHub <https://github.com/Maikuolan/SFS-Mass-IP-Checker>.
 *
 * @author Caleb M (Maikuolan)
 */

$SFSMassIPChecker['langdata'] = [
    'xmlLang' => 'en',
    'bannedips_missing' => 'Downloading a fresh copy of "bannedips.csv" from SFS (we utilise this file in order to avoid needing to make an unnecessarily large number of requests to the server);<br /><br />Please wait (the page will refresh automatically after the download has completed)...<br /><br />',
    'bannedips_missing_cant_zip' => 'Can\'t locate "%PATH%/private/bannedips.csv"!<br />Please download manually from:<br /><a href="https://www.stopforumspam.com/downloads/bannedips.zip">https://www.stopforumspam.com/downloads/bannedips.zip</a><br /><br />After downloading, decompress the contained file to the \'private\' directory of the SFS Mass IP Checker, and then try again.<br /><br />(( We utilise this file in order to avoid needing to make an unnecessarily large number of requests to the server. ))',
    'cant_write' => 'Unable to write to the cache!<br />Please check your CHMOD file permissions!',
    'erroneous_local' => 'Erroneous (Local).',
    'failure_badip' => 'Invalid IP address!',
    'failure_private' => 'Local/Private IP address!',
    'failure_notunderstood' => 'Failure (request not understood by SFS)!',
    'failure_timeout' => 'Failure (request error or timed-out)!',
    'failure_unknown' => 'An unknown error occurred.',
    'input_submit' => 'Submit',
    'linkname_addspamdata' => 'Add Spam Data',
    'linkname_downloads' => 'Downloads',
    'linkname_faq' => 'FAQ',
    'linkname_forum' => 'Forum',
    'linkname_home' => 'Home',
    'linkname_search' => 'Search',
    'linkname_support' => 'Support',
    'linkname_useful' => 'Useful Tools',
    'results_erroneous' => 'Erroneous',
    'results_listed' => 'Listed',
    'results_not_listed' => 'Not Listed',
    'separate_entries' => 'Separate entries via commas or linebreaks. Entries should consist of IPv4 addresses.',
    'success_local' => 'Success (Local).',
    'success_remote' => 'Success (Remote).',
    'table_frequency' => 'Frequency',
    'table_ip_address' => 'IP Address',
    'table_last_seen' => 'Last Seen',
    'table_lookup_status' => 'Status',
    'table_spammer' => 'Spammer?'
];
