<?php

class IndexController {

    public function __construct() {
        $this->view = new View();
    } // constructor

    public function show() {
        $data['listado'] = array("dato proveniente del controlador");
        $this->view->show("indexView.php", $data);
    } // show

}
