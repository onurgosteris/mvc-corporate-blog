<?php 
define("DIRECTORY", __DIR__);
define("URL","http://".$_SERVER['SERVER_NAME']);
define('DBHOST','localhost');
define('DBUSER','root');
define('DBPASS','12345678');
define('DBNAME','mvc');
global $config;
$config[] = [
"home" => 
[
"modul" => "default",
"method" => "index"
]
];
