<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/Editing_wp-config.php Modifier
 * wp-config.php} (en anglais). C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */
// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //


/* 
define('DB_NAME', 'mediatechno_blog_svi');
define('DB_USER', 'mediatechnoblog');
define('DB_PASSWORD', 'Gm7rRxyVpM6vSQ3v');
define('DB_HOST', '46.105.16.90');
*/


// /** Nom de la base de données de WordPress. */
// define('DB_NAME', 'mediat_blogserveurvocal');

// /** Utilisateur de la base de données MySQL. */
// define('DB_USER', 'mediat');

// /** Mot de passe de la base de données MySQL. Gm7rRxyVpM6vSQ3v */
// define('DB_PASSWORD', 'mediatfull'); // 

// /** Adresse de l'hébergement MySQL. */
// define('DB_HOST', 'mysql-pro.celeonet.fr'); // vps44921.ovh.net ; old 194.165.49.34

/** Nom de la base de données de WordPress. */
define('DB_NAME', 'mediatblogsv');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'mediatblogsv');

/** Mot de passe de la base de données MySQL. Gm7rRxyVpM6vSQ3v */
define('DB_PASSWORD', 'Gm7rRxyVpM6vSQ3v'); // 

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'mediatblogsv.mysql.db'); // vps44921.ovh.net ; old 194.165.49.34


/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'wnDj$J(ubdeGYzk1&0YxU46,[pUbl#D)-qv_4f5=ZaL0mozYCjkJe%Jo<c8BUi$#');
define('SECURE_AUTH_KEY',  '^Hn3FTJl&0l=1%%Bz4<@HCH-hXxyV/oX!|yEG2#fIGBe8iuZ* V~UQHe=pL>!1[8');
define('LOGGED_IN_KEY',    'yga`YOJCs4S+|]d,cY5LO8h}[~eh%#|`G4,47P :Gy4a-s-fFlZ=oKJs[In^z{Sq');
define('NONCE_KEY',        'GD*F1)RKL?.D&`k1}E%^X*u;_sFB7AEI`-6V=NT3u`hW+|!E--S-9D^dSB&Cr{5]');
define('AUTH_SALT',        '+PNdw(Oe5t~t6zoq:0~$kZG}eD|ZW*NV7,|-qCee*TO%@SDjN5ixd/H,~xZ:]_j6');
define('SECURE_AUTH_SALT', '_teQ4B-_&~#wk<a0cq#7+_>{/E@X]q+-<YaiH(le,l2R2^#:B{7K%9Bj5wTD>DQj');
define('LOGGED_IN_SALT',   'QLI6!Q7.46qVsDk6AD*aft_|dDoqD8epRvY?6&sFD(FdL:+&~EXB+l:+|G3+2&|-');
define('NONCE_SALT',       'oL|F@d[njW-}jXtuel-!O+j-?<Ga(]1-F+tCEd!XmrA3$^Yk4+ zhqm9[+NkKKLh');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Langue de localisation de WordPress, par défaut en Anglais.
 *
 * Modifiez cette valeur pour localiser WordPress. Un fichier MO correspondant
 * au langage choisi doit être installé dans le dossier wp-content/languages.
 * Par exemple, pour mettre en place une traduction française, mettez le fichier
 * fr_FR.mo dans wp-content/languages, et réglez l'option ci-dessous à "fr_FR".
 */
define('WPLANG', 'fr_FR');

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

define( 'WP_MEMORY_LIMIT', '256M' );

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');