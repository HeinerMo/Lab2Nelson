<?php

class FrontController {

    //This uses a $_GET that contains a $controllerName and an $actionName
    //with this, the new controller is loaded and the action is executed.
    public static function main() {
        require 'libs/View.php';
        require 'libs/configuration.php';

        if (!empty($_GET['Controller'])) {
            $controllerName = $_GET['Controller'] . 'Controller';
        } else {
            $controllerName = 'IndexController';
        }

        if (!empty($_GET['action'])) {
            $actionName = $_GET['action'];
        } else {
            $actionName = 'show';
        }

        //Note the use of get('controllerfolder'), this being declared in Config.php
        $controllerPath = $config->get('controllerFolder') . $controllerName . '.php';

        //if the new $controllerPath exist, then load it
        if (is_file($controllerPath)) {
            require $controllerPath;
        } else {
            //Literally die.
            die('Controller not found - 404 not found');
        }

        if (is_callable(array($controllerName, $actionName)) == FALSE) {
            trigger_error($controllerName . '-' . $actionName . ' does not exist', E_USER_NOTICE);
            return FALSE;
        }

        $controller = new $controllerName(); //create new object from text in variable.
        $controller->$actionName(); //load the action in that controller from $actionName
        //           ^^^^^^^^ This doesn't seem very safe. 
    } // main

}
