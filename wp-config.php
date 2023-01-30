<?php
/**
 * WordPress için başlangıç ayar dosyası.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * Bu dosya şu ayarları içerir:
 * 
 * * MySQL ayarları
 * * Gizli anahtarlar
 * * Veritabanı tablo ön eki
 * * ABSPATH
 * 
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL ayarları - Bu bilgileri servis sağlayıcınızdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define( 'DB_NAME', 'girayaktas' );

/** MySQL veritabanı kullanıcısı */
define( 'DB_USER', 'root' );

/** MySQL veritabanı parolası */
define( 'DB_PASSWORD', '' );

/** MySQL sunucusu */
define( 'DB_HOST', 'localhost' );

/** Yaratılacak tablolar için veritabanı karakter seti. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define( 'DB_COLLATE', '' );

/**#@+
 * Eşsiz doğrulama anahtarları ve tuzlar.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz. Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ']M1|YVR>LJDJ18yCTCQ3(*x]IZ`&kG yk`Lf_TjzH{Hm&4+InZ;)jP7>LgUhuN(/' );
define( 'SECURE_AUTH_KEY',  'sQUz({>]Ac0O!^0V4 `)MjzS{lp7[2%,^HEpj}b44[*ts#mIM$$eSaD2q.?DhcvG' );
define( 'LOGGED_IN_KEY',    'n@|Z}4FN%k~d$O){Y+nKz?9*h19P,< gzMwLD._.`&;IxfQ81r{c%Zl^Qu $}2JI' );
define( 'NONCE_KEY',        'b-}2|u}zywV{XnxO0iW0+H~D<(ol#V:ZA[s9vx!K^GbW)tTH~kd_t(tPpWNAFj+J' );
define( 'AUTH_SALT',        '~PDwv5%t~.cPzZuJC( &+mlbsqRHLb_=>b(D[:x(5 }Y)Mw@v Zr32!puJzImSo{' );
define( 'SECURE_AUTH_SALT', '{&on+dMSGymP2X)}{SkOHoF/x3<TVmI+k|i_.}Ywb ,+sb1Qf 1#o2ChRcR8Q,0Z' );
define( 'LOGGED_IN_SALT',   '>{?u[:btT?pdz]>TR$#x60E~0rYUx0x9u_V+q%q72er}^h<DUYkJMQ+_Z[^221!=' );
define( 'NONCE_SALT',       '<|@v N JfTh3%fzRQZ.Jc;darlhmu76l#V}_OzH@vs/}@7]GUnoUu2@6]EsQWE,$' );

/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix = 'wp_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri "true" yaparak geliştirme sırasında hataların ekrana basılmasını sağlayabilirsiniz.
 * Tema ve eklenti geliştiricilerinin geliştirme aşamasında WP_DEBUG
 * kullanmalarını önemle tavsiye ederiz.
 * 
 * Hata ayıklama için kullanabilecek diğer sabitler ile ilgili daha fazla bilgiyi
 * belgelerden edinebilirsiniz.
 * 
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** WordPress değişkenlerini ve yollarını kurar. */
require_once ABSPATH . 'wp-settings.php';