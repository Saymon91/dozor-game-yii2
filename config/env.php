<?php
if (defined('YII_ENV') && YII_ENV === 'prod') {

} else {
    defined('DB_HOST') || define('DB_HOST', 'localhost');
    defined('DB_PORT') || define('DB_PORT', 2345);
    defined('DB_NAME') || define('DB_NAME', 'dozor-game');
    defined('DB_USER') || define('DB_USER', 'dozor-game');
    defined('DB_PASSWORD') || define('DB_PASSWORD', 'dozor-game');

    defined('REDIS_HOST') || define('REDIS_HOST', 'localhost');
    defined('REDIS_PORT') || define('REDIS_PORT', 6376);
    defined('REDIS_PASSWORD') || define('REDIS_PASSWORD', 'dozor-game');
    defined('REDIS_CACHE_DB') || define('REDIS_CACHE_DB', 0);
    defined('REDIS_SESSIONS_DB') || define('REDIS_SESSIONS_DB', 1);
    defined('REDIS_DATA_DB') || define('REDIS_DATA_DB', 2);
}