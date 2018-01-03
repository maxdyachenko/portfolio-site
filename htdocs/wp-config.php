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
define('DB_NAME', 'portfolio');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'n,TEX@Nd#tS)VprxnvZmb]k[=la$:68e^0I^:]bc%=}- !55WUha;nh/+v#djE/V');
define('SECURE_AUTH_KEY',  'LdQdp#(r+tbJ05d&iPwo,Q#@w1%i~DAGVja~[%L4V3Q0zos#=T K?@PN%+7s;)LW');
define('LOGGED_IN_KEY',    'mLjQ&|8oskCeA%@EGk]DQ}i^Yox0D!0zuAw6xohBD;<<:m#kb<VFa~*aDo*j(]VO');
define('NONCE_KEY',        '?u1`@fnF]Ygu`/5=er8 -+bPXih^)A*:UZ-FM{&ce9MTVujE-ARRb2YbhNC`uEb=');
define('AUTH_SALT',        '2X/N/8zsd;R bD z9UD.`R&y;3^mwfyiQ4^Ae06vH248{%[gUHy@3-U%6Pn!YY|M');
define('SECURE_AUTH_SALT', 'jGJb`lkkB|nGlql21&;<jK]0}P<h_A>W8GrqdSA BV*Gp0m1d*x6&U{DvD#WbUx&');
define('LOGGED_IN_SALT',   'CkKEVU,isXW]RGA(kV3yN*JbCVI}?{LK^WzIT3t$)6yX:I q7#Q6[q!HN%|4lBSO');
define('NONCE_SALT',       'KvDrQIGx>kbQ&F*N|}+LahXl(t;}b83}):!bVe_)%T)Id=9OWPJ(%$W2^Q?~zi^&');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', true);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
