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
define('DB_NAME', 'yqlsxqcy_optika');

/** Имя пользователя MySQL */
define('DB_USER', 'yqlsxqcy_optika');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'rodikov1992');

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
define('AUTH_KEY',         'q/DwH4&/#J8`7,}v)3eL4`2#G<{y@;!CAso&@xW (Du4b&bM !m{0@N`7e;Cz_G%');
define('SECURE_AUTH_KEY',  'U{4yH06-Z@p1{A/kneA43)PGszsHUM]sr^W|Mlmt$AQu*a*`^:Q6XPQ4,>x|P&(#');
define('LOGGED_IN_KEY',    '&tq>{&I=Io9Q ?O[2x8<o,E4#g,]D`d,%KEoGuRL jN,mA1aWvIrF4vs-tt%YUQD');
define('NONCE_KEY',        'I*ugSj&7Ie#ZK.H%(@$J!9EGGo#,V)_,mUUp9l7$kYx[r/fD4C6v]$UOr k@e0^A');
define('AUTH_SALT',        '+|7EjjR-KA1qVE9$ZjXGImIRn$-yElEG.e`E>;:>@4U:pWwPJo_gE1`igRXbh)5f');
define('SECURE_AUTH_SALT', 'Zo$`1Zz!5.SeMMEl-!.>m+.t4?KneC,~&0!F1@a,DP&)DjCIFh6eI[dPo3q|T~.l');
define('LOGGED_IN_SALT',   '|f,PmYUtF7Kzp%b,GmVEd`# ]B::aC4BC=m;k6-6uQg^xI`kKPp)s[veTB`exxT0');
define('NONCE_SALT',       'W,+t,o,y4Ln6>x7R8QG0Wa.Qy?@|`yNy/P]-Vk[b25aM>Ly[?+4OVtTx)^Gqk(4d');

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');