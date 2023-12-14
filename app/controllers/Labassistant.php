<?php
    class Labassistant extends Controller{
        public function __construct(){

        }

        public function f_labassistant(){
         

            $data = [];
            $this->view("Labassistant/dashboardLabassistant" , $data);
        }
    }
?>