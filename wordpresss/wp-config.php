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
define('DB_NAME', 'homestudio');

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
define('AUTH_KEY',         'uI7y[|.|*{bSu%r_7aC]rLp*LT/VSJNA&@I8i>]{9s#A>6kP~a~%.(6ogrW{2^Ke');
define('SECURE_AUTH_KEY',  '4;M,x{`)$W8[7r^y8Cb7M>n6R_T%<iZ/yEyoFKGr4~I2&z.:<T/SY5Q3C]~qI+.,');
define('LOGGED_IN_KEY',    '_lOk#N{BR& Fq3<Z+sEzR6yn0%R(vFlkJh+^@a?E#!;M5kT4T$EQFKec-u|7Hc?0');
define('NONCE_KEY',        'h/&U$9jFmWU`0ILVhxkMWU*bN S53S(0Q=k !wtYxaEPuz!S!C$_3YZ-,i@J>9aD');
define('AUTH_SALT',        '{,0DBg2&bDX3frc92z/=#/#u:9@-T~SpUEAAGmV5-Z|_Q%!3*q[6XF^iZFQYd}Z4');
define('SECURE_AUTH_SALT', 'UQGOky#!@HdW9#Q{?I)`xDxa=27-h7&<*3-K44[^v1aHmf(VNS]EbChJWe+8rB~n');
define('LOGGED_IN_SALT',   '!?.l(}m7%C+D:aaql)Q9S1_!;yCh2KwLA#!~Dx#9j*[-KM=B%/.-B~b7/rhr6k7q');
define('NONCE_SALT',       '}<!L=%L7}?WR_-/>(S1]<q]cUc:B/_%@Na`IGfL6~KOQ:66V+0<@w*@;@;j``sSc');

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
