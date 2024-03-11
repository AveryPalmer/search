<?php
error_reporting(0);
define('FIR', true);

define('DB_HOST', 'localhost');
define('DB_USER', 'astrosearch_data');
define('DB_NAME', 'astrosearch_data');
define('DB_PASS', 'uk61F9y9S!ebjmTzp');

define('URL_PATH', 'https://www.astrosearch.com');

define('PUBLIC_PATH', 'public');
define('THEME_PATH', 'themes');
define('STORAGE_PATH', 'storage');
define('UPLOADS_PATH', 'uploads');

define('COOKIE_PATH', preg_replace('|https?://[^/]+|i', '', URL_PATH).'/');