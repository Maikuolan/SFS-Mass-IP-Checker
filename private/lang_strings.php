<?php
/* This file contains the language data for the SFS Mass IP Checker, but is
   likely to only exist temporarily, for during the ALPHA stage of development.
   I'll rename this file to something else and reorganise how this all works
   after I've confirmed the core code is working as expected. */

if(!defined('SFSMassIPChecker'))die('[SFS-Mass-IP-Checker] This should not be accessed directly.');

$SFSMassIPChecker['lang']=array();
$SFSMassIPChecker['lang']['cant_write']='Unable to write to cache!<br />Please check your CHMOD file permissions!';
$SFSMassIPChecker['lang']['bannedips_missing']='Can\'t locate "%PATH%/private/bannedips.csv"!<br />Downloading now from SFS. Please wait...<br /><br />(( We utilise this file in order to avoid needing to make an unnecessarily large number of requests to the server. ))';
$SFSMassIPChecker['lang']['bannedips_missing_cant_zip']='Can\'t locate "%PATH%/private/bannedips.csv"!<br />Please download manually from:<br /><a href="http://www.stopforumspam.com/downloads/bannedips.zip">http://www.stopforumspam.com/downloads/bannedips.zip</a><br /><br />After downloading, decompress the contained file to the \'private\' directory of the SFS Mass IP Checker, and try again.<br /><br />(( We utilise this file in order to avoid needing to make an unnecessarily large number of requests to the server. ))';
$SFSMassIPChecker['lang']['failure_badip']='Failure (bad IP address)!';
$SFSMassIPChecker['lang']['failure_timeout']='Failure (request error or timed-out)!';
$SFSMassIPChecker['lang']['failure_notunderstood']='Failure (request not understood by SFS)!';
$SFSMassIPChecker['lang']['success_local']='Success (Local).';
$SFSMassIPChecker['lang']['success_remote']='Success (Remote).';
?>