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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         '>0K} {!:x%G`+6,Vn%)TaC)yrefGqq:hLlp2ndc=0]X*tKt#P-1+]C.ByR{2s $4' );
define( 'SECURE_AUTH_KEY',  'tK=`b[oA-S>.1Gknrrx}[PI+3(3qt^>o>.: !M+ ]#DQ!g|PV=2i1t@!aa?g^*yJ' );
define( 'LOGGED_IN_KEY',    'HZu~ n`lq!S;^ !Rnk;7aI*]c<l)ZHd~5),]lyRrizAq]HF,~2/(=.N&!t%a`C:E' );
define( 'NONCE_KEY',        'ZR,L54qga-jzoug.f1Y!2`a,%z9omf *{&0^|u7|zWwTNCy^DG7/3o};e8[UN/n8' );
define( 'AUTH_SALT',        ',,t(-8rlx*qIX9z~tkz|ZK^;eG1q[`V|pXtHosj4VJA.dLtjkx%#K1tDtKn)11Q7' );
define( 'SECURE_AUTH_SALT', 'KtXap_/t$zynCW{ij!]!@p@[zWCnH!J+A<9CEg.$(!5fTtMvt1R,y1J~6of_:kP<' );
define( 'LOGGED_IN_SALT',   '%/oPZN:{tbz8usk~?6:*ur!X9<9ZV*4Hj~aO%Z_w-vQgKbN,:krG-{b`^v5Lfv3,' );
define( 'NONCE_SALT',       '{rB&SbxruDYIvQ?8[At#8Mf)7@<#|Zv+yG7Kt}R5@:gRMQ%9m6Dt#=_#E]|m#5Y[' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'pf_';

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
