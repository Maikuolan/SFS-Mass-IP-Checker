<?php /*
 SFS MASS IP Checker v0.0.2-ALPHA
 This File: SFS MASS IP Checker English Language Data (3rd December 2015).

                                     ~ ~ ~
 This document and its associated package can be downloaded for free from:
 - GitHub <https://github.com/Maikuolan/SFS-Mass-IP-Checker>.

*/

if(!defined('SFSMassIPChecker'))die('[SFS-Mass-IP-Checker] This should not be accessed directly.');

$SFSMassIPChecker['langdata']=array();
$SFSMassIPChecker['langdata']['bannedips_missing']='Downloading a fresh copy of "bannedips.csv" from SFS (we utilise this file in order to avoid needing to make an unnecessarily large number of requests to the server);<br /><br />Please wait (the page will refresh automatically after the download has completed)...<br /><br />';
$SFSMassIPChecker['langdata']['bannedips_missing_cant_zip']='Can\'t locate "%PATH%/private/bannedips.csv"!<br />Please download manually from:<br /><a href="http://www.stopforumspam.com/downloads/bannedips.zip">http://www.stopforumspam.com/downloads/bannedips.zip</a><br /><br />After downloading, decompress the contained file to the \'private\' directory of the SFS Mass IP Checker, and then try again.<br /><br />(( We utilise this file in order to avoid needing to make an unnecessarily large number of requests to the server. ))';
$SFSMassIPChecker['langdata']['cant_write']='Unable to write to cache!<br />Please check your CHMOD file permissions!';
$SFSMassIPChecker['langdata']['erroneous_local']='Erroneous (Local).';
$SFSMassIPChecker['langdata']['failure_badip']='Failure (bad IP address)!';
$SFSMassIPChecker['langdata']['failure_notunderstood']='Failure (request not understood by SFS)!';
$SFSMassIPChecker['langdata']['failure_timeout']='Failure (request error or timed-out)!';
$SFSMassIPChecker['langdata']['input_submit']='Submit';
$SFSMassIPChecker['langdata']['linkname_help']='Help';
$SFSMassIPChecker['langdata']['results_erroneous']='Erroneous';
$SFSMassIPChecker['langdata']['results_listed']='Listed';
$SFSMassIPChecker['langdata']['results_not_listed']='Not Listed';
$SFSMassIPChecker['langdata']['separate_entries']='Separate entries via commas or linebreaks. Entries should consist of IPv4 addresses.';
$SFSMassIPChecker['langdata']['success_local']='Success (Local).';
$SFSMassIPChecker['langdata']['success_remote']='Success (Remote).';
$SFSMassIPChecker['langdata']['table_frequency']='Frequency';
$SFSMassIPChecker['langdata']['table_ip_address']='IP Address';
$SFSMassIPChecker['langdata']['table_last_seen']='Last Seen';
$SFSMassIPChecker['langdata']['table_lookup_status']='Lookup Status';
$SFSMassIPChecker['langdata']['table_spammer']='Spammer?';
?>