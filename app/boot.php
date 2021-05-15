<?php
date_default_timezone_set('Europe/Istanbul');
require_once 'config.php';
require_once 'helpers/helper.php';
require_once 'library/CrudPDO.php';
require_once 'asystem/App.php';
require_once 'asystem/mainModel.php';
require_once 'asystem/mainController.php';
require_once 'asystem/mainView.php';
require_once 'route.php';

spl_autoload_register(function ($className) {
    $modul = explode("Model",$className);
    if(file_exists($inc=DIRECTORY."/moduls/{$modul[0]}/model/{$className}.php")){
        require_once $inc;
    }
});


?>