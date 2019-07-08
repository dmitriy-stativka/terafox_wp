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
define( 'DB_NAME', 'terafox' );

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
define( 'AUTH_KEY',         'iIkn$k{Go%V>?;lMK;a}yBph}i)gvMgwJ&|V^0VAC2tXK21H_$6GU_Mt)!yX GN#' );
define( 'SECURE_AUTH_KEY',  'B{NDPP6~0/mX,Otcte`Uo4++8,,a N%14H`({%7& wvckyp~~vsl#qCB]dJNt;]F' );
define( 'LOGGED_IN_KEY',    'H+k-2<35tT?EQ&v->oB9-)d9{{L*Q91$@s:N@?v0&CDz53W6a_}?~==aqTBaM#)U' );
define( 'NONCE_KEY',        'E~E#./O`&mikoiNcaIr.ll?uW9{G^PLA<p#zTNi1Pz0p9.=bA<PB[+?FB%|hm#iE' );
define( 'AUTH_SALT',        'ns_qw_mTrgi>^Eq+%n5$jH1NAZ1;{ch7$Z!&wZ0`Z/Waq]V3UHbUfHU__kYD%h`d' );
define( 'SECURE_AUTH_SALT', 'LbI;QAF0i@zV!oJgWg+M3vVzZM]Im~khk$MOasoGM4N6m7=/yyz3#T~Z.&l#gduI' );
define( 'LOGGED_IN_SALT',   'n{RlA&T$Wk(oDm7])V_<*CB3Xts B&nTU, _A9G3FUq>CjfvxAGjqzl]r3X>CY!q' );
define( 'NONCE_SALT',       '.5MycYGTt8byO^b:%i+iv!Ll,Be~zB;CmdoSM=+*Vu}k|Eh#@&+e{#u5%(S[*|08' );

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
