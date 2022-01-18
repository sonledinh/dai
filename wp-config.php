<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'landing_dai' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'hW+M(KhrDhw^7a8kK-}8l[-sS]O$(-Ol2b,y3t~D@y)_(DcsWZe.}**PPE)J:IAV' );
define( 'SECURE_AUTH_KEY',  'b`-?3oKah2DX1]SeYFxD[uOmC02JeG1(?6/]QW1)kl)(/{:|6R2.#9<JGkOvx9:F' );
define( 'LOGGED_IN_KEY',    '#I7eC&~:6!&;ed<mr38b~9;_JEhQ|qIzPE|3.N^+rg`K|b%!Pec&$#Q;-fFL=Lwd' );
define( 'NONCE_KEY',        '=8 DsW~VU Bt~vQLhixwe|lVyLZ+N1[_1<D;$YNy!{ ,],TJQ_Icz!y^upH3{CBn' );
define( 'AUTH_SALT',        '{z@-&!j#NtG{gm8;:,y+~1m)VLZYOdDJ>GZ.E/6@psT7WP0$X8~~%[Yj,M95p+Jn' );
define( 'SECURE_AUTH_SALT', 'b~Ul8Yy)1&)}j4B.*C1S9&oPh^upKNvw(}+-=GLA%g?pJ&( + z9>):C{Nip--]O' );
define( 'LOGGED_IN_SALT',   'O%(c$R1cCR#v~M~90G~05%cpg;mRpUNeS(Zd2!!}yl(t;Ov5Q9(y>* & +@7[={9' );
define( 'NONCE_SALT',       ']|d6x>tX?<$KmU*xqV{z$n`Am<Or(;f2D>oUvuW$]}w<qX7J,r8%2wLmzM(6UUXH' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
