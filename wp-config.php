<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'simplonco' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '0I]Z,GHJ^&PAuH;QZo6u,hDWH/fZt1].Zzb:Nm<4oY#Vq*(Lx]eHUpSa<BtL]Y+W' );
define( 'SECURE_AUTH_KEY',  'CE[NH*p---*i Lg0di*-6Mw%x-{W:|0 WDQ]/M NT8P}e},eW19J-7vHo~E*Jq)5' );
define( 'LOGGED_IN_KEY',    '0j oVj0v%JG6KwTFW:Xmg,.QR /iF%|ZX@5EGw1.I&nH[nlqx-Cm#&%r8oMc>S%Z' );
define( 'NONCE_KEY',        'f@8^_th|e{Mp79,aol.-u!k82k?2&`4MP]!.ol( 8SkRM!z9MI+=Q&GVxlA3E?T[' );
define( 'AUTH_SALT',        'OZ*d|Y3W]_{Vzo,h[b6p):F]`FSV->jB[U5_Y-g~qxCK~rq6`>pgsP+bDN6}g6,b' );
define( 'SECURE_AUTH_SALT', 'LXOFN4A(xGj?tRc&;ocnDXQJyl-uf#BiPd3~zCh:leyO.1_E+wR{?<J1v7p1LlQ`' );
define( 'LOGGED_IN_SALT',   '3hwe_LH;/|8YJn3CT)BV26:@y|;v0MluaU8IXLw4*BZ!u4vF,|uCL(f&q`ttu7{m' );
define( 'NONCE_SALT',       '))B<lr)%]1nRcy0efSEag5-a24GAJ1c;9o$;jRB?Jr!_F{lze4EQ/DOd|vZzS:0K' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
