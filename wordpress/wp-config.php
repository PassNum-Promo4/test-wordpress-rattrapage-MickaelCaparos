<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
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
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'iw(=z07Om/(uQPt)|s-=W(~WH?QXQ*D0Qdbi[*N7y{hS}O.&+pvDn}y-`ERF(|Dn');
define('SECURE_AUTH_KEY',  'BE ^9_FqRMGy(>E/p8J_?X}3F;w`k!&Mu%r{t]z-L$![8,h%.ooP6@]DP1X<2~Sj');
define('LOGGED_IN_KEY',    'khdrX+{KaG?]+h$XF+o6`h3G^c0EYczbyoyh{wPv/(>Q?p/@m-M{.n7B(cNL_}dD');
define('NONCE_KEY',        'Jjf=u !lKfMo%W~zGf);aITANI*A;?Xrx$Ic}%KR4(WNZMW7!|?Egx9JE_(;HC)#');
define('AUTH_SALT',        '^-f}LX9;f_$%C@{|AO`(D(-1Cr+WxqNn;C![ k0ve=m>nhF2xw0EuSVZ#V.?$gmD');
define('SECURE_AUTH_SALT', '6zDJ7&bgYKw.<K){j&ujKU.;iqY?(=Vc(GK3c  I|H`w>`)wkp@ozV+XX uLj&;|');
define('LOGGED_IN_SALT',   'T5Y0u@Kv<1l]=JXZZV,RM7Pd1MWLXB*+c?]BBht~vyC#zDDX$WfI@>dG$j@d3 DP');
define('NONCE_SALT',       '`Ae+R~aY_2UUrL@v.uJWc2bV*zcXOo+(SyJQqCNl qgX|Pyd_U(l?(|5C;gZo/k}');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');