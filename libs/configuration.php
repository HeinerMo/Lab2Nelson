<?php

    //This file sets the configuration for the current PHP session
    require 'libs/Config.php';
    $config=Config::getInstance();
    
    $config->set('controllerFolder', 'controller/');
    $config->set('modelFolder', 'model/');
    $config->set('viewFolder', 'view/');
    
    $config->set('dbhost', 'localhost'); // ip del servidor
    $config->set('dbname', 'lenguajes2022');
    $config->set('dbuser', 'root');
    $config->set('dbpass', '');
