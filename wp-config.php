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
 * * データベース設定
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

// ** データベース設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'OJT_kh' );

/** データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** データベースのパスワード */
define( 'DB_PASSWORD', 'root' );

/** データベースのホスト名 */
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
define( 'AUTH_KEY',         ']uj<>c+_+k^J;iT>AUUd7h5dW}|=5=]:&n$.nZb2_i@vq_?Nki/f zt!wdZAjCS~' );
define( 'SECURE_AUTH_KEY',  '^XU.zRLZYd_2p&,m3Wgo-Mk?LVd7fo-f. -k zQd3rJU}$41vK32.dT~4p5iH#KJ' );
define( 'LOGGED_IN_KEY',    'U[>/cta*_{0n9Rmlb9+FlA{AIRrM#BZ4|2;JSRr{W~&-r?E_IsYX1:0YE!<lRbol' );
define( 'NONCE_KEY',        '&KGhS0|1{g5r/{MH5>!kfU{E]J@.&1?cE B8l#=9g bEu9S_@3#}=[hEs lk-bDL' );
define( 'AUTH_SALT',        'y`%u-TrM$gkdMr}gJ&]3D{18wu*?VZ:l[,b0$bKQU[wb.WQhvv#iS,m3WBuKU_aU' );
define( 'SECURE_AUTH_SALT', 'HJG(;5T<uwmri>VjXyvPM4)RO/4#7cgJv;LtO}np!6!SOO{m>{9oJhqZFzq=l#CW' );
define( 'LOGGED_IN_SALT',   '2B%(x-8Qf:rOJ]%v:]|z+=yxw-[]O8}HxCoM!Y3i>6juW!LHY=mt1^XAQ2qZ!C83' );
define( 'NONCE_SALT',       'XNiQHx&Do4yYUi& 7+:-o&sSdpBh_oMP%dSMUe%er6} s_A5v))/*%#d zsfwP$b' );

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
define( 'WP_DEBUG', false );

/* カスタム値は、この行と「編集が必要なのはここまでです」の行の間に追加してください。 */



/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
