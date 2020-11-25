<?php
/**
 * SFS MASS IP Checker: A stand-alone script for checking IP addresses en-masse
 * against the Stop Forum Spam database.
 *
 * This file: French language data (last modified: 2020.11.25).
 *
 * This document and its associated package can be downloaded for free from:
 * - GitHub <https://github.com/Maikuolan/SFS-Mass-IP-Checker>.
 *
 * @author Caleb M (Maikuolan)
 */

$SFSMassIPChecker['langdata'] = [
    'xmlLang' => 'fr',
    'bannedips_missing' => 'Téléchargement d\'une nouvelle copie de « bannedips.csv » du SFS (nous utilisons ce fichier afin d\'éviter besoin de faire un nombre inutilement élevé de requêtes vers le serveur);<br /><br />S\'il vous plaît, attendez (la page est rechargée automatiquement après le téléchargement est terminé)...<br /><br />',
    'bannedips_missing_cant_zip' => 'Ne peut pas trouver « %PATH%/private/bannedips.csv »!<br />S\'il vous plaît télécharger manuellement d\'ici:<br /><a href="https://www.stopforumspam.com/downloads/bannedips.zip">https://www.stopforumspam.com/downloads/bannedips.zip</a><br /><br />Après le téléchargement, décompresser le fichier contenu à la répertoire \'private\' de la SFS Mass IP Checker, et puis essayez à nouveau.<br /><br />(( Nous utilisons ce fichier afin d\'éviter besoin de faire un nombre inutilement élevé de requêtes vers le serveur. ))',
    'cant_write' => 'Ne peux pas d\'écrire dans le cache !<br />S\'il vous plaît vérifier permissions CHMOD !',
    'erroneous_local' => 'Erroné (Local).',
    'failure_badip' => 'Adresse IP non valide !',
    'failure_private' => 'Adresse IP locale/privé !',
    'failure_notunderstood' => 'Échec (requête n\'a pas été compris par SFS)!',
    'failure_timeout' => 'Échec (requête erreur ou fin du temps)!',
    'failure_unknown' => 'Une erreur inconnue est survenue.',
    'input_submit' => 'Soumettre',
    'linkname_addspamdata' => 'Signaler Spam',
    'linkname_downloads' => 'Téléchargements',
    'linkname_faq' => 'FAQ',
    'linkname_forum' => 'Forum',
    'linkname_home' => 'Accueil',
    'linkname_search' => 'Rechercher',
    'linkname_support' => 'Aider',
    'linkname_useful' => 'Outils Utiles',
    'results_erroneous' => 'Erroné',
    'results_listed' => 'Listé',
    'results_not_listed' => 'Non Listé',
    'separate_entries' => 'Séparez les entrées par des virgules ou des sauts de ligne. Entrées devrait consister en des adresses IPv4.',
    'success_local' => 'Succès (Local).',
    'success_remote' => 'Succès (Distance).',
    'table_frequency' => 'Fréquence',
    'table_ip_address' => 'IP Adresse',
    'table_last_seen' => 'Dernier Rapport',
    'table_lookup_status' => 'Statut',
    'table_spammer' => 'Spammeur ?'
];
