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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'mysteria_ingenium' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', '127.0.0.1:8889' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'dif`K38M0hQ*Mx2j<6[h=a$0|N]{9B96+kKHd)peVf33B>sby8Fn5Ma/k9se2o=M' );
define( 'SECURE_AUTH_KEY',  'GXO`wEF~)K%%(dU!YT{wjuT6F*sF_U4/fX*~y5Gd_w@k/q^,@u2&r,OT{74:}:]]' );
define( 'LOGGED_IN_KEY',    'qaAiy;ng:7g{$:n[cK+JU9OMWX<,n,hC{>~rIbO,a_mF|]p?@j!x q[d-:p7,|rK' );
define( 'NONCE_KEY',        'v3^1DuX&?uPJ48n$qE{bai},H:qeOhC}ND_p&6QRia8CoMIW`@q`yNlp!+,0s/`u' );
define( 'AUTH_SALT',        '0M5653BB:-X6/|]f9Pcm:q8TwbBk| u`g=hW-IXNe)b67`N?_s_Mt|mp]$Q5o+gP' );
define( 'SECURE_AUTH_SALT', ' $/?IS{~ObEn+3&By:=Djog/IHU| i-0Y-+uP1*0p*)jQ:GM0AOs34gCd@x lcJk' );
define( 'LOGGED_IN_SALT',   'JM|%j!2.%qJdCwJOO4uP(}+SW-XFgO0}J}ccCrn6`dn](L`t>*m6Ud,qt`_C%7s#' );
define( 'NONCE_SALT',       '%wRN=J9lXl>YnNcjBBugf6+GNbYf+3UKOnu.VW)X#5(o6O246&}/i6};[Cowhy:-' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
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
