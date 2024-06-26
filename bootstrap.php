<?php
define('_DIR_ROOT', __DIR__);



require_once 'app/configs/app.php'; //load routes config
require_once 'app/configs/database.php';
require_once 'app/configs/routes.php';
require_once 'app/core/Route.php';// load route class
require_once 'app/App.php'; //loaf app
require_once 'app/core/Controller.php'; //load base controller

if(!empty($config['database'])){
    $db_config = array_filter($config['database']);
    if(!empty($db_config)){
        require_once 'app/core/Connection.php';
        require_once 'app/core/Database.php';
        // $db = new Database();
    }
}


