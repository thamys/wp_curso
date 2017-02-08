<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wp_curso');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'j<:8lg,c)of&{tu`kP?~0toYzbK_]dWD5yTWs,7p@fyN_*~_*XyRx|s(Ml:e?dIH');
define('SECURE_AUTH_KEY',  '6?ilHmlAgPV[Gx}VmJ_Yer>0K`rejOR|>Oapgrc!AHq7%,Ybid%p<7$VHKeM^V^o');
define('LOGGED_IN_KEY',    'TnAF7n+EMsPCnzdZV13U|@OT6Z~{2F]dH=tQ.n#_GSpjJHtn%1&tT[0Ji|KTkP^{');
define('NONCE_KEY',        'E[9{6ip3MB<$iSA0.IO=r][sz-}S1~|x$Oa*/27[sEz7?LlFbz6`&>x%4KtAsCh_');
define('AUTH_SALT',        '6lr%Igt 8Vve=txdh`bk7 dG[rqIFzeCcooTBrp0~wFeF]>g}oI+dvpeti|2&/pa');
define('SECURE_AUTH_SALT', 'ow6?d4OoE0g6+KS0ySt2]um(KRF20|zN,~Zu8K([5y:YcXx:vWS[](YKFL~[h41i');
define('LOGGED_IN_SALT',   '^u.F qR%`O],1ed H6Oc]d06yRZuwiR}OF81|oL/=>~E@2UV;+!MQADs|Ku=K?RQ');
define('NONCE_SALT',       '>FdSGtp}V.]JF]BlRNI,B.|RYYf>=m#wQDWMtQ=*GY@h.n=X_3+xVY^{k*wJ:0R3');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wpc_';

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
