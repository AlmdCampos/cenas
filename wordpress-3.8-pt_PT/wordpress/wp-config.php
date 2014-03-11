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
define('DB_NAME', 'loja');

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
define('AUTH_KEY',         'AVxAHVW-;qLOI,x?IT_nYIcEOrO$^{!,xEJa^yJQV|}BPBmyA C8*`MdtvL$$<bi');
define('SECURE_AUTH_KEY',  '],@S=J+YA|>I]0+qq_O|v!&VQ,<DVv$S}`~@:83<4/v4_ s1.&592D9(83v ]0ni');
define('LOGGED_IN_KEY',    'sZ%mWuJZmu3oS8XGIK_D|F]vxfB3?5.io0YS3C5zlMQn8rgn6A,lMh1#avf}?DIN');
define('NONCE_KEY',        '<;0d[88DKtbs04?eI:i}21A(:12l;Za<rf(/d!Qv%:&tSxPw_zB#Vr6qZai+XrIu');
define('AUTH_SALT',        'ku,a?4`R~8s6f7Vmj*1+CpW^8aO;&k%=K$P/qom,U:k4-<_5y^8@$^wQ2>|KT=Er');
define('SECURE_AUTH_SALT', '.G*$QmJ7~>)JpXI4:35B}BB8n L25(D<Q!ebXzKVxRNN{76`YTL7luSoEA#|Sgy_');
define('LOGGED_IN_SALT',   'ZHK50a`w{#E.eSkg8~wYtD9e/MwLtDh<]>S:!(rPl}R4sVtUQ*c@R$K$4?B#,i p');
define('NONCE_SALT',       'V]lu*~H-K=*uFoIa%vR=3xV$w?FCr/J0zA.z$!(,SpWB+5%+FFy%3dr~?!B@`A*d');

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
