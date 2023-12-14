<?php
    class Supplier extends Controller{
        public function __construct(){

        }

        public function f_Supplier(){
            
            $data = [];
            $this->view("Supplier/dashboardSupplier" , $data);
        }
    }
?>