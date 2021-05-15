<?php 
define("DIRECTORY", __DIR__);
define("URL",$_SERVER['SERVER_NAME']."/");
define('DBHOST','localhost');
define('DBUSER','root');
define('DBPASS','3213311ss');
define('DBNAME','mvc');
global $config;
$config[] = [
"home" => 
[
"modul" => "default",
"method" => "index"
]
];
