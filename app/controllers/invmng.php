<?php
    class invmng extends Controller{
        public function __construct(){

        }

        public function invmngdashboard(){  
            $data = [];
            $this->view("invmng/dashboard" , $data);
        }

        public function invmngproduct(){  
            $data = [];
            $this->view("invmng/product" , $data);
        }

        public function invmngsupplier(){  
            $data = [];
            $this->view("invmng/supplier" , $data);
        }

        public function invmngorder(){  
            $data = [];
            $this->view("invmng/order" , $data);
        }
    }
?>