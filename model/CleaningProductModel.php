<?php

class CleaningProductModel {

    private $database;

    public function __construct() {
        require 'libs/SPDO.php';
        $this->database = SPDO::getInstance();
    }

    public function add($name, $price, $description) {
        $query = $this->database->prepare("call sp_add_cleaning_product('{$name}', {$price}, '{$description}')");
        $query->execute();
        $result = $query->errorCode();
        if ($result == 0) {
            return "Producto Registrado";
        } else {
            return "No se ha podido registrar el producto";
        }
    }

    public function show($name) {
        if ($name == null || $name == '') {
            $query = $this->database->prepare("call sp_show_cleaning_product(NULL)");
        } else {
            $query = $this->database->prepare("call sp_show_cleaning_product('{$name}')");
        }
        $query->execute();
        $result = $query->fetchAll();
        $query->closeCursor();
        return $result;
    }
}
