<?php

class Config {
    //This class is a wrapper for setting and getting 
    //the current PHP configuration parameters

    private $vars;
    private static $instance;

    private function __construct() {
        $this->vars = array();
    } // constructor

    public function set($attributeName, $value) {
        if (!isset($this->vars[$attributeName])) {
            $this->vars[$attributeName] = $value;
        }
    } // generic set

    public function get($attributeName) {
        if (isset($this->vars[$attributeName]))
            return $this->vars[$attributeName];
    } // generic get

    public static function getInstance() {
        if (!isset(self::$instance)) {
            $tmpClass = __CLASS__;
            self::$instance = new $tmpClass;
        }
        return self::$instance;
    } // getInstance

} // fin clase
