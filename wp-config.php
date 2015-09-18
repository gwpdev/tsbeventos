<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'guilh029_tsbeventos');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'guilh029_geerox');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'gui412289');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ':U-~[WkvL$Wf,9|W-}2m|Ryt{|V`Gu!DyeaM4a|`c9_~>C>`4W?8$JYn+N,c*5uw');
define('SECURE_AUTH_KEY',  'dfV=-y9T*;kjYbNYNtC+1P|pBT%csa-I7)Y3p/1>-O`k}j9a0$n|}z<m6im??*(O');
define('LOGGED_IN_KEY',    'tocnqSD|ciF`4XYs}O+|vJ4AiVLJQhkUwWx{,R|khAPVae,7(-Zo7i9BN]uwF-F=');
define('NONCE_KEY',        ',GE?|]-u)nvoa@uJA!$i,KsO]k3Qawo)ZUC4(`A,DCI:Gz?l)l~<;i&lk xrnH;l');
define('AUTH_SALT',        '476AD,XkfpRt||I>6* 1doACqFCIN>-e(g.9]3S?.Pw>nAgAnXLPLH3-ggE85>eY');
define('SECURE_AUTH_SALT', 'Fxlc.AM;quSoC:s0EDD/dcC0vPX;;PiK{AeoQi<ALcyUZG!fcz6b|e3eHr9H#~a%');
define('LOGGED_IN_SALT',   'j5TYH2d%J+-,eY{k2*P -+hv?4dYYS0@h>,LXM$mh%})s^2Jsl[MC1dQ2|$`_Qc!');
define('NONCE_SALT',       'snhq:%rsW_rcm++(dZ&Sg[PYodXoX(l9BNrjLT[8<!o$*?`4($t1+>=z@.CiH@G ');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
