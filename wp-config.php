<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи и ABSPATH. Дополнительную информацию можно найти на странице
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется скриптом для создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения вручную.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'new-ppu.loc');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Ow=M cY(VQJWI$h|FZhCL-~^-BQmrHRjIoNr4Eo@Q|6Q1%(R-bxaXstB1!-$:zK&');
define('SECURE_AUTH_KEY',  '-`fg4w#NYp-#_eLG^siu|Bu$b,{ X]@qvQ5c|`LXX7tZCJ@&(o}q;Z!x)M$$LIy&');
define('LOGGED_IN_KEY',    'tUU1mc8+lv01bB*[Le>z_bEc:MwC6T6W=XzD$A%-N?Jy+vI+O3Rh1D|vJQ`j2r[w');
define('NONCE_KEY',        'e?=g~G{^Oz?//>r^Bz[Ef]>`yw3CvRpDv/0N8Yy,x+k.%?N43/+^N|4OC9Iku+c8');
define('AUTH_SALT',        'Dr<u}De{?M#jL-HQzlj.RH*=n^:kF_OH^<+5w^&(bd[eH:.2$DZm}!c+D|=Gs{(_');
define('SECURE_AUTH_SALT', 'E d>K/^|D$ZDbL<Vc<Ox|t*Wci@6B?eYJ`lCL4Hy5OD*g3@N!cT-gS+5W9|U&fl<');
define('LOGGED_IN_SALT',   '+G4,i3]_oIl7AOq(JO}iXJ}$.*l?*+a5G18a-dZ&y*+`rN$xKXS{%q>(Syr/>|kX');
define('NONCE_SALT',       'l!hg=ZRF/:>]gb/JJoV6m#f6#%I$qr_ loMA:ObQBuXDiuIl$GUIzP:Me0Lz)|$a');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'pu_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
