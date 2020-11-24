<?php
/**
 * SFS MASS IP Checker: A stand-alone script for checking IP addresses en-masse
 * against the Stop Forum Spam database.
 *
 * This file: French language data (last modified: 2018.09.03).
 * 
 * This document and its associated package can be downloaded for free from:
 * - GitHub <https://github.com/Maikuolan/SFS-Mass-IP-Checker>.
 *
 * @author Caleb M (Maikuolan)
 */

/** Prevents execution from outside of the script. */
if (!defined('SFSMassIPChecker')) {
    die('[SFS-Mass-IP-Checker] This should not be accessed directly.');
}

$SFSMassIPChecker['langdata'] = array('xmlLang' => 'fr');

$SFSMassIPChecker['langdata']['bannedips_missing'] = 'Téléchargement d\'une nouvelle copie de « bannedips.csv » du SFS (nous utilisons ce fichier afin d\'éviter besoin de faire un nombre inutilement élevé de requêtes vers le serveur);<br /><br />S\'il vous plaît, attendez (la page est rechargée automatiquement après le téléchargement est terminé)...<br /><br />';
$SFSMassIPChecker['langdata']['bannedips_missing_cant_zip'] = 'Ne peut pas trouver « %PATH%/private/bannedips.csv »!<br />S\'il vous plaît télécharger manuellement d\'ici:<br /><a href="https://www.stopforumspam.com/downloads/bannedips.zip">https://www.stopforumspam.com/downloads/bannedips.zip</a><br /><br />Après le téléchargement, décompresser le fichier contenu à la répertoire \'private\' de la SFS Mass IP Checker, et puis essayez à nouveau.<br /><br />(( Nous utilisons ce fichier afin d\'éviter besoin de faire un nombre inutilement élevé de requêtes vers le serveur. ))';
$SFSMassIPChecker['langdata']['cant_write'] = 'Ne peux pas d\'écrire dans le cache !<br />S\'il vous plaît vérifier permissions CHMOD !';
$SFSMassIPChecker['langdata']['erroneous_local'] = 'Erroné (Local).';
$SFSMassIPChecker['langdata']['failure_badip'] = 'Adresse IP non valide !';
$SFSMassIPChecker['langdata']['failure_private'] = 'Adresse IP locale/privé !';
$SFSMassIPChecker['langdata']['failure_notunderstood'] = 'Échec (requête n\'a pas été compris par SFS)!';
$SFSMassIPChecker['langdata']['failure_timeout'] = 'Échec (requête erreur ou fin du temps)!';
$SFSMassIPChecker['langdata']['failure_unknown'] = 'Une erreur inconnue est survenue.';
$SFSMassIPChecker['langdata']['input_submit'] = 'Soumettre';
$SFSMassIPChecker['langdata']['linkname_addspamdata'] = 'Signaler Spam';
$SFSMassIPChecker['langdata']['linkname_downloads'] = 'Téléchargements';
$SFSMassIPChecker['langdata']['linkname_faq'] = 'FAQ';
$SFSMassIPChecker['langdata']['linkname_forum'] = 'Forum';
$SFSMassIPChecker['langdata']['linkname_home'] = 'Accueil';
$SFSMassIPChecker['langdata']['linkname_search'] = 'Rechercher';
$SFSMassIPChecker['langdata']['linkname_support'] = 'Aider';
$SFSMassIPChecker['langdata']['linkname_useful'] = 'Outils Utiles';
$SFSMassIPChecker['langdata']['results_erroneous'] = 'Erroné';
$SFSMassIPChecker['langdata']['results_listed'] = 'Listé';
$SFSMassIPChecker['langdata']['results_not_listed'] = 'Non Listé';
$SFSMassIPChecker['langdata']['separate_entries'] = 'Séparez les entrées par des virgules ou des sauts de ligne. Entrées devrait consister en des adresses IPv4.';
$SFSMassIPChecker['langdata']['success_local'] = 'Succès (Local).';
$SFSMassIPChecker['langdata']['success_remote'] = 'Succès (Distance).';
$SFSMassIPChecker['langdata']['table_frequency'] = 'Fréquence';
$SFSMassIPChecker['langdata']['table_ip_address'] = 'IP Adresse';
$SFSMassIPChecker['langdata']['table_last_seen'] = 'Dernier Rapport';
$SFSMassIPChecker['langdata']['table_lookup_status'] = 'Statut';
$SFSMassIPChecker['langdata']['table_spammer'] = 'Spammeur ?';
