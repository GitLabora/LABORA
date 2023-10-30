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

        public function invmngAddProduct(){  
            $data = [];
            $this->view("invmng/addProduct" , $data);
        }

        public function invmngUpdateProduct(){  
            $data = [];
            $this->view("invmng/updateProduct" , $data);
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