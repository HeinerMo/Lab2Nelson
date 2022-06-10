<?php

//Database managing
class SPDO extends PDO {

    private static $instance = null;

    public function __construct() {
        $config = Config::getInstance();
        // setup database
        parent::__construct(
            'mysql:host=' . $config->get('dbhost') . ';dbname=' . $config->get('dbname'),
            $config->get('dbuser'),
            $config->get('dbpass')
        );
    } // constructor

    //Singleton.
    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new self();
        }
        return self::$instance;
    } // getInstance

}
