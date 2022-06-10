<?php

class View {

    public function __construct() {;
    } // constructor

    /*Loads $viewName*/
    public function show($viewName, $vars = array()) {
        $config = Config::getInstance();
        $path = $config->get('viewFolder') . $viewName;

        if (is_file($path) == FALSE) {
            trigger_error('Página ' . $path . ' No existe', E_USER_NOTICE);
            return false;
        }

        if (is_array($vars)) {
            foreach ($vars as $key => $value) {
                $key = $value;
            }
        }

        include $path;
    } // show

} // end class
