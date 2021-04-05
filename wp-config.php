<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'webdesign_folio' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '>}F^,bWxp}05UKct@(Pov%@62h}K0C[CS7:Si`OJE/(2SeAo|RRu%Dac]r5|@V0v' );
define( 'SECURE_AUTH_KEY',  'u(C]ZDHnxLg;a4OSe|&^wbeCYi=;Gar:I!z^`M5);@J[{.)4,@Bx+Q@n  mjX3`n' );
define( 'LOGGED_IN_KEY',    'TKwvwltE=bp8:U++ZsKe_mn8$6$/!yD]VomxCdp{!K{f_YU9HdUlGj?D|!2j(%(X' );
define( 'NONCE_KEY',        'nd7Bq5Virb*F6<Bfqp|y}Ef3&f.S6+ 2h|`NAos XK0Vmmy3E]j-3FrI|_QO/9XF' );
define( 'AUTH_SALT',        '4-R1&|IIC#2sJ@zxY0fo~0/L$?1rRi}B4_HR/V9r:Xqe=jW*.F?=T;>0G<e:e@LC' );
define( 'SECURE_AUTH_SALT', '`RRq/ .8D!}!1,c}LT.QMIV2gcQ40aGI-0Z|KCW&5r$Jv>#qA%t*PvCLDks*K6mk' );
define( 'LOGGED_IN_SALT',   'h1@<=WgmIwS$ 4DCISO6>AZ~Yc6JOS Q0x!-(S#YZ-.uL&Is@2qvJt[i2~xw(9dp' );
define( 'NONCE_SALT',       'uER{rp,K-f_|[[m!uwFs&,41|Ln]H8XAm]N7[0l/L8%~IK5}TgSJ@O`h@r4,MC4/' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
