<?php
/** 
 * A configuração de base do WordPress
 *
 * Este ficheiro define os seguintes parâmetros: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, e ABSPATH. Pode obter mais informação
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} no Codex. As definições de MySQL são-lhe fornecidas pelo seu serviço de alojamento.
 *
 * Este ficheiro é usado para criar o script  wp-config.php, durante
 * a instalação, mas não tem que usar essa funcionalidade se não quiser. 
 * Salve este ficheiro como "wp-config.php" e preencha os valores.
 *
 * @package WordPress
 */

// ** Definições de MySQL - obtenha estes dados do seu serviço de alojamento** //
/** O nome da base de dados do WordPress */
define('DB_NAME', 'exemplo1');

/** O nome do utilizador de MySQL */
define('DB_USER', 'root');

/** A password do utilizador de MySQL  */
define('DB_PASSWORD', '');

/** O nome do serviddor de  MySQL  */
define('DB_HOST', 'localhost');

/** O "Database Charset" a usar na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O "Database Collate type". Se tem dúvidas não mude. */
define('DB_COLLATE', '');

/**#@+
 * Chaves Únicas de Autenticação.
 *
 * Mude para frases únicas e diferentes!
 * Pode gerar frases automáticamente em {@link https://api.wordpress.org/secret-key/1.1/salt/ Serviço de chaves secretas de WordPress.org}
 * Pode mudar estes valores em qualquer altura para invalidar todos os cookies existentes o que terá como resultado obrigar todos os utilizadores a voltarem a fazer login
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '5)/~5YnawdAvZYetGjnDc }C]8#5IeRN_YpR9Q^:L;~8<E:^m^a Kp5`M_1#uRtr');
define('SECURE_AUTH_KEY',  '25DK_mQD^:mvGJB<8wt|G<b@l&_mv82n^C Vl?TuNq}=]B_JcC:4Hfs @)CHC2Qr');
define('LOGGED_IN_KEY',    ';`2P&RY9gy5]O@C~oP(=h2q/.J9x>4V2BC.bohjsOXnf@s_E8S=F45PQ!d1o2E&;');
define('NONCE_KEY',        '3P2M:o@8 K@:g~Gv[qRs8Mo{n=1*IJ/ Z29vj/89:Y,8nWySG3Y$[mUe~0K[P:i0');
define('AUTH_SALT',        '~7iA7O j5xLNgz?2D`mJK5Hycvv48=pg KtK~iOaVZu7efK>83@ufTX19!ot0icB');
define('SECURE_AUTH_SALT', '2rIi@opd4-v{]of~T?CseZRth+@YUKs.$h3*D{KIscnu{iD7{(YLV:7_{MGeOM0R');
define('LOGGED_IN_SALT',   'Q`yrm=fe/(=S gObw=@uCtG% i&C}oO47oWvy<Yow;i<hZ(Z%?S0y<Tl7nObv<z1');
define('NONCE_SALT',       'T/=MX_7#;;)FlJsB{,/Por9naA^/QrjxOb5ivPkxIaKr#nS3RzT/)n{.wvjAk?Sr');

/**#@-*/

/**
 * Prefixo das tabelas de WordPress.
 *
 * Pode suportar múltiplas instalações numa só base de dados, ao dar a cada
 * instalação um prefixo único. Só algarismos, letras e underscores, por favor!
 */
$table_prefix  = 'wp_';

/**
 * Idioma de Localização do WordPress, Inglês por omissão.
 *
 * Mude isto para localizar o WordPress. Um ficheiro MO correspondendo ao idioma
 * escolhido deverá existir na directoria wp-content/languages. Instale por exemplo
 * pt_PT.mo em wp-content/languages e defina WPLANG como 'pt_PT' para activar o
 * suporte para a língua portuguesa.
 */
define('WPLANG', 'pt_PT');

/**
 * Para developers: WordPress em modo debugging.
 *
 * Mude isto para true para mostrar avisos enquanto estiver a testar.
 * É vivamente recomendado aos autores de temas e plugins usarem WP_DEBUG
 * no seu ambiente de desenvolvimento.
 */
define('WP_DEBUG', false);

/* E é tudo. Pare de editar! */

/** Caminho absoluto para a pasta do WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Define as variáveis do WordPress e ficheiros a incluir. */
require_once(ABSPATH . 'wp-settings.php');
