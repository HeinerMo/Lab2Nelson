<?php

class CleaningProductController {

    public function __construct() {
        $this->view = new View();
    } // constructor

    public function AddProductView() {
        $this->view->show("AddCleaningProductView.php", NULL);
    }

    public function showProductView() {
        $this->view->show("ShowCleaningProductView.php", NULL);
    }

    public function addProduct() {

        require 'model/CleaningProductModel.php';
        $productModel = new CleaningProductModel();

        $data['result'] = $productModel->add($_POST['name'], $_POST['price'], $_POST['description']);
        $this->view->show("AddCleaningProductView.php", $data);
    } // add

    public function showProduct() {
        require 'model/CleaningProductModel.php';
        $productModel = new CleaningProductModel();
        $data['list'] = $productModel->show($_POST['name']);
        $this->view->show("ShowCleaningProductView.php", $data);
    } // show

    // show
}
