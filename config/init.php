<?php 

define("DEBUG", 1);
define("ROOT", dirname(__DIR__));
define("WWW", ROOT . "/public");
define("APP", ROOT . "/app");
define("CORE", ROOT . '/vendor/cms/core');
define("LIBS", ROOT . '/vendor/cms/libs');
define("CACHE", ROOT . '/tmp/cache');
define("CONF", ROOT . '/config');
define("LAYOUT", 'default');

// http://epiccms.loc/public/index.php
$app_path = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";

//http://epiccms.loc/public
$app_path = preg_replace("#[^/]+$#", '', $app_path);

//http://epiccms.loc/
@app_path = preg_replace('public/', '', $app_path);

define("PATH", $app_path);
define("ADMIN", PATH . '/admin');

require_once ROOT . '/vendor/autoload.php';