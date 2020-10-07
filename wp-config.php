<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'wordpress' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'root' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '(8zaALuq 3=f[hQ;VlfK/UNS}~2|scfvm|(,Xt6PpbY{8:: H[2^8#{;~2e@*+Nt' );
define( 'SECURE_AUTH_KEY',  'q,e<&E?14]A=BYwY-+AsieF[n]T64cy,-}t%dsq2Z?_AXFMMr82~[>}QHd(N@c.K' );
define( 'LOGGED_IN_KEY',    'tRHo5J@S8vyofZ}0oGPhoQ/C`yu;~ ^)n>g4iI!a}E?Y}vQA,I?]5I1nYHmBEA]:' );
define( 'NONCE_KEY',        '_3V#rqCdZ6NCO[nu_*{B~#shpnCd;zP_v$MWQ;~1.fIf!_a0,N(/{9LIdJu/@#MX' );
define( 'AUTH_SALT',        'eyLN:~_%{>T9M,C5dQI5Bw5,GSIUf=Tf=j// dk6n8R9ZpwF-W(1yHjLGh1T^yK4' );
define( 'SECURE_AUTH_SALT', ']dOiOVM2e=k$%T1F^d$b0<~Y:+(_{{t~R+fZRSFQw(Wt[C_[vj3:@]VcZzf0X$nN' );
define( 'LOGGED_IN_SALT',   '^vcTzx,[tx?Dp}A/k7ni6Gy%N!g,f&zyHG5[MTx8UFyrll5VYH%7a` cX,v&8x7z' );
define( 'NONCE_SALT',       '69,*A4Dm[|qwdCOa-FG#J<6,j~ur;Om1yOHtVN<Ra9.Ry?@1xR#_*2:j:U&S!=QZ' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
