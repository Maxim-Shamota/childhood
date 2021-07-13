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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'childhood' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'child_admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '123123' );

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
define( 'AUTH_KEY',         'p~%l@AkRbTY+fZm- 3,6J](:Qs,b|CwZ!|[`h{;J</ci3eFUq|utDw 0:`3o}{+.' );
define( 'SECURE_AUTH_KEY',  '@FkV0{00[Tl9<+D:f}fv_JV<L0$aHr@cMh5f(Hy?Q;r MGE6W+=[,I+CExf8e(?t' );
define( 'LOGGED_IN_KEY',    '%TsI><)xYq48dug@Uc!/UriS];;AKS;L|(sd_z4;UW*kfsu Vzmg-e}s$(@/3h[1' );
define( 'NONCE_KEY',        'H&.0pd+6;bTb2fsLD##Z~aln5T3(3Z+F/#c/QPs*3>ejzP9&{l^Z`f04C+v*d:2@' );
define( 'AUTH_SALT',        '*@C*2C1(OhsXs>(qndFWF>/= x-e-[%dlv*^b_!BOUK^oP[18:/L;}vqAeSR}mA1' );
define( 'SECURE_AUTH_SALT', 'XbQ1.~MM*0+# <]$=%G~G+,n>[$^.[o0lWsb dBFtX]t8^GCL3cM>0(oRQk0f9,D' );
define( 'LOGGED_IN_SALT',   'Y>,R-m13H{g,0>=RZ#!e5 !%vQ#9?PVBQ-qwud[~YHgf*i~V-PHFZy94:)Lz7FXU' );
define( 'NONCE_SALT',       'x=?.(%S+8N|xvZcQB&[<*jJ4ww|83uQyI_E,2`vp!VaPKtJ!68|(+BWnU_1N0BSA' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
