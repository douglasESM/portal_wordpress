<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'portal_wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '~bL(6y0^E<^vB{WElj>x6hA+sD^P%@D>etl i,Iajkmw9/kQ<0Q#&UjOD04Br7%b' );
define( 'SECURE_AUTH_KEY',  'oOKsEy>+Id5b#)cp&(Tr1-1XGy2<T>@y0< eZ+)W?4uixO=b~0N%QHmp%yT=NbR=' );
define( 'LOGGED_IN_KEY',    'DP&,n(lk*P]|wP1]6<#Q+2d4!A{MUN$CqtC*Q,g21=1)c[)FT%([Atc#an6yc5)i' );
define( 'NONCE_KEY',        '4-9$=]m&~Gl7RU-K{U.N|b-35bDN*^1/U-cK5=nwx*tB.+pvTbfLp]-ri438#HO9' );
define( 'AUTH_SALT',        '_DvOdu$47L12Y^&)iJ`Kv<.)C+Ph%Wy !3^Y6<R{lhU%nW6SWd$^k-Z$.?rgwq0k' );
define( 'SECURE_AUTH_SALT', '-0N&M)@RR20B>T?p/xr=ma[/y$[_$-T]^Qkyj_e&q7^@2-3Qr5pp{^c<(4oX7Td`' );
define( 'LOGGED_IN_SALT',   'yc=Q&A!5X*_;s7b }wD_51.D$AWEfeev#v~HJ)u3PQI>Mrhz]:tmK^lbBm_wZG[V' );
define( 'NONCE_SALT',       '%C/cNhInFg)-BjtK^QE#Hsa 5PIG/9`w-ml3];1mVXP`]Y_o-[>V{!d/ACHYB,EJ' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
