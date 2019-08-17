<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'turistic' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'q$>d|eG+S:zdN#)w!t%*s=Ls5&n`&-5*|ZnV5dLq(ya%Y!-U5[rKWVf~rSYM0&0U' );
define( 'SECURE_AUTH_KEY',  '%eA}gUBw`mWnP[AW:XDc=s,fLYfz(DMckO5h)6?-R&vKmx.J:[<7Z$mL6lHvC*j@' );
define( 'LOGGED_IN_KEY',    'mO}%o@8S-z#5I!n-gzcyl(-=oF|/VI#o^N|2NOt_%<?.IOJ{H!X5eRZ+Uh#_qN1]' );
define( 'NONCE_KEY',        '04CxMscAj0RXyc3ZGAYI KKK^i5UPr)b2`jVgh,@g?L404y9d^~`^|#{;Y$63{`&' );
define( 'AUTH_SALT',        'vj+e|(ujUd5H~[EBC+$y?*FvFAg3([[kePt`cR`IGw1R/lKzeUv{j8Er^J~YR-{m' );
define( 'SECURE_AUTH_SALT', 'w*[u+3wp#r)yr:zqr!xAOYNVp.k_;caRkS]]=0{5ON[oOT4-?t_2k*/*o5D[LhDJ' );
define( 'LOGGED_IN_SALT',   'TVNTfq4Ddt&eM? W^:]Yn}XBXt7wvq)AGMNhnX+C9;:QNzTB,@p{?/|gy$58!.ER' );
define( 'NONCE_SALT',       'b?SV]3-)NqNbe|6[ok&4N;t|<;gK66e$X{CZ$fRKIWTqh/Twb&8!8%_>>Y#)HM?F' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
