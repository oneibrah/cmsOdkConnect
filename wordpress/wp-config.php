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
define( 'DB_NAME', 'connectodk' );

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
define( 'AUTH_KEY',         'r=~rmADQTODVWHLYzNQ.n2&Tt)n<<o_>Xa=O;M!:<ssi#T+{uf=Oy7e22?6EWSa^' );
define( 'SECURE_AUTH_KEY',  '&eWp%5)K:^[5;~mcthJ3YVNzYmT-D0+#hV:+qMKOk@Ia{UZ%Zg/)t-]!s<Ek %/c' );
define( 'LOGGED_IN_KEY',    'J_ZpdP97/i*7Gug6UPMb_/dmJyO|p)>TDD*} bEGJbHrc1 B&WFM!eEyYpFN#EsM' );
define( 'NONCE_KEY',        '][*o?m/xFM;X$j5w)&wM<oU<yGCU- ue(kHV# J892SU+[>+<l/NJ|-pkJnh=Q!B' );
define( 'AUTH_SALT',        'Z7(a<sJ!==BqW6drTv3zyz-9T^-{QI>4H3QT$zQ[F_?h:Y{Y<1sjI8K<}CJ$w{X4' );
define( 'SECURE_AUTH_SALT', 'J[ug>sW]]X).]1>^O{+q+UU)Dxv|?S|8FvB`]?:8s1K}2(}QD2),BTJb7D>_Z>/V' );
define( 'LOGGED_IN_SALT',   '3D@pAFn_:B*#ygEch8[^JMrO}DZV0UIL?K3 y{P~@<|xYU4iat_%LPzlF^B.Vi#Y' );
define( 'NONCE_SALT',       '^A^~!UP0{QEA#xycn_[~Wf*$_hiF~&tTmFK_McMDD=w3;{@Ff<l/S#/Zb<A79CZ#' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'odk';

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
