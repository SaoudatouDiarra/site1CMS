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
define( 'DB_NAME', 'site1' );

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
define( 'AUTH_KEY',         'pw9.nU(g/B-y|IFFe{vKr-M4N!He&su>5>PUn)1idJ3ps-A[>@c8l#trGpiVsHs*' );
define( 'SECURE_AUTH_KEY',  '}AQ|UBBm6g,2>uXbnft&PUd! CCWH TrUnM}N5=Lw4?5I<!11N. VpkZ;VQLa78S' );
define( 'LOGGED_IN_KEY',    ' q *vvXlJjxrh6*VN7T.7b7sTbjm;#avC>%MPTOp:P1.TXumog}Z.{%nI#H}`ih&' );
define( 'NONCE_KEY',        '&x|W5p|h|gN*>;a?kn|9)w!OoHn3v<+,$[$;;9W ckK=qkKrAd#9?X~cAj7Q1ryr' );
define( 'AUTH_SALT',        'q5tX4lT=C0v6+|fU dHIqHJPAq|A(u~R,7$]#>3t<4X1t;!/16TZTM_O`X{W3HM.' );
define( 'SECURE_AUTH_SALT', 'h$nW8>VE!Cv*FBKpx$R]U4wM}C[o&qvm{{qoW`zMM1Uh{w Q;eJMZ-S>ka^-DiA7' );
define( 'LOGGED_IN_SALT',   'eI@ FBbmqN`^;3B9uVZC:!%XcYu{,5CTW^2;d;(!W~JJlb-{^(CL2P*1=}Y&yKF?' );
define( 'NONCE_SALT',       '(>l&A;%n3vv[x/Q-Z9i)2QN)9Z@?)TG9]hNQwbOa)Jql!A6Z7:&<>>e@$J=_^Qr0' );
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
