<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', '730-22_96155' );

/** Имя пользователя базы данных */
define( 'DB_USER', '730-22_96155' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '87d18dc400a718852566' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'vqDM_O,<@pkb(>=hk0mlN}Ajft;s~OiiyA6/M12z%PIQSj5qyEg)195J5w.-W}Q&' );
define( 'SECURE_AUTH_KEY',  'y,fi&YsvClyX.],}`/&i%U-QSHP:E3 /j3>gJbppn}kRFR?Cg8-z4I,r~io<kkD}' );
define( 'LOGGED_IN_KEY',    '26PLl^ 3`oV10TOX](*GwTW(y]I|($~Kf5Yx-mL,=,TVVIeCGsK@>[|DW oLL+W-' );
define( 'NONCE_KEY',        'hCfRigv+6ZG5AE|KEN*AEO<;[&-fiBZL 8f.)[AM:^W gt$2cuJ_-lFKs&^ rQQy' );
define( 'AUTH_SALT',        '_$iK1.-6-]H_+jHAVM*7Z!ie-ZGV]n^rev)rOO4bF:uhyC;jjQRNqA:]~-i5N!>L' );
define( 'SECURE_AUTH_SALT', '!!}PmOj$xmUP@L2fhl }f9A_5j0C~@5)$E&68}d%HcU>,cql3!7%.]=45V.j{#9}' );
define( 'LOGGED_IN_SALT',   'QGqEx|*=Z=uUNRn6w=PisCrq!ug~/m;>>]E>a9b-(t2anKF{N6m(v`$A]0~!QO 8' );
define( 'NONCE_SALT',       'g-R8XhbQpb[.yt$.e:3m>1_;]:j`D~$<.*@=H+G5hjynTc|~%HE0-htrDKoFecY2' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = '9xCNn_';


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

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';