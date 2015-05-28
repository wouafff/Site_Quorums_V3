<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
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
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'AaBaLd9;QlfVuacX$kLJr[C,-%oDB+ZSjDEYh6Wsc}T,ucTZ<+G#.T%[[6SeYuc{');
define('SECURE_AUTH_KEY',  '+E,eT.{|R@JcOhWs@haHm|/p%dp,B+ :v;Z1)o.vJS;{L`6cKRsU!:|,C3T SL+:');
define('LOGGED_IN_KEY',    'vPjZ|7[:GP-d;g)wFq!i/{1m.pL+~@bYo,:80$#PoT/beVk-;kqYOao;.1uV,-YB');
define('NONCE_KEY',        'U`z-7a2Kjx]d9qaR2nH|L]?O>Dy3K.pY~CY<FB+{%429>ZX5=fm|I!b1jrc?{GaB');
define('AUTH_SALT',        '-=+?X|q|<[1fKZv8T_%_G5+l:!;vxTQm iCX(2xFQTS P(5>Q[R8H|(<BTilU,)o');
define('SECURE_AUTH_SALT', 'C|Jq9`F=]1x]3~kt-m<C/lJzL/:ofO,8NT[t-/<mubA8K4+{;_%WW.vIsd;/J6Np');
define('LOGGED_IN_SALT',   'GH&jI8<C1 K_{[-ZI|LR+B~godDIO*p1.Q^[]AHMD05M2?GhAtEP}H*qWwO*ias[');
define('NONCE_SALT',       '<h&hZJp#d+XF1&-IhyJ7pJ}&C~rY||KdiC-}5i]:s_&y~Wd?v|u=US&K-K6{[tf>');
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
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');