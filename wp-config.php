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
define( 'DB_NAME', "u1170108_muraveynik" );


/** Имя пользователя MySQL */
define( 'DB_USER', "u1170108_muravey" );


/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', "4U5l0H7r" );


/** Имя сервера MySQL */
define( 'DB_HOST', "localhost" );


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
define( 'AUTH_KEY',         '.qgLkEloU7H_mhSTy{OvV0GomTvzKn*R1yx|cd/?Pw87$$RSGhI1J}4:xof;L3K^' );

define( 'SECURE_AUTH_KEY',  ')2Eb&~[nfD`B4J8ZOJ-:`|)Sxlf92rZ5}p@k$% [Wc9*Lg*1XnGc5e&3<xcf*s3x' );

define( 'LOGGED_IN_KEY',    'A(Ri@RWPj2;ldU%idm3VP]Rq_xYfh~eoW%nTk2FEi?Tw^3I,?}?LE?XhS_19W:<z' );

define( 'NONCE_KEY',        '`uDhGi/(UNuU;+0h5n]8>p)eW%V~IEifmhc>UOVIy!.sDI1~nR6,@d3w:U._RT$K' );

define( 'AUTH_SALT',        'xZWk|:b2KB`$~sIvNuI?q(3J@`~=5kb?3=^{*Y&Squ@Fa$nkj1m N0tl?,q8,,YC' );

define( 'SECURE_AUTH_SALT', 'sz75617[y/} (Ft@HOTx&EU@X>I*RC%#BSS8+zUzjAcM4-PrT!~?s;rf_6sPCKfC' );

define( 'LOGGED_IN_SALT',   'MXnZGoV[I7#tKfU7!QaJ:r;I0YO4qfsbHv{9F!~TBt7kR-gdV-%S<U4|e=XB3wo<' );

define( 'NONCE_SALT',       'ayC9OE9:-H/k%u-TO$<(l)o;9;iV/@^%*TTI^+TRK%}R_`g5eHctOKr$3s7i(q*J' );


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
