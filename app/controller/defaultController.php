<?php
    class defaultController{
        private $vista;

        public function index(){
            $vista="app/view/admin/adminHomeView.php";
            include_once("app/view/admin/plantilla2View.php");
        }
    }
?>