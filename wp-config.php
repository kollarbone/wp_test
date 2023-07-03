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
define( 'DB_NAME', 'wp_test' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '{1vqKj1BJUxeSn$Xi[72ALw1y`=T-_}fQh5<KQ0>rR/bE^pb:x7lPB6dd/wU$tAj' );
define( 'SECURE_AUTH_KEY',  'Z{f;5d6}q^FvpqY#.;&n*iE*2VZaFfV[2$fA bQ/n7`:stgX9/Ffk|T-P<PU`zAg' );
define( 'LOGGED_IN_KEY',    'BzNGmX2dSH@QxM=ocSG(&pTDs,)kCgkEllyv@01l:fc Oj+tP4$,;ZS,xb-|ZPMs' );
define( 'NONCE_KEY',        'NoWJ+XrWMB]}!DGIrH9VO,vQM!jT!u$/|aaLt*t1rtEr+^C#AK)lNQF##;eb}p1f' );
define( 'AUTH_SALT',        'hssR77>NVM!/:bhkJxjhE@SH&8_z|<|8;M{.k/sT,FKp>!$X7j_S2$X*bDqlM`Sr' );
define( 'SECURE_AUTH_SALT', 'K]z]{50rKa<~SUbOyGErnb!0>%*sWm=L#uDFX.F1~s[J^_#SBz4kSi!=~0wR@XR9' );
define( 'LOGGED_IN_SALT',   'S&z3o0HxzifTX(&enrw;1$Z?h~#}?lA%xzd*SQt<}oKoDjr6[{$_Kf_NMX|>F*%B' );
define( 'NONCE_SALT',       '-nO30]Pz[F :wQP#Dr.+dF@a[q]:I+l3bN.cU=k1N;Tmk?2FY`sban>Cm.*(< 6x' );

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

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
