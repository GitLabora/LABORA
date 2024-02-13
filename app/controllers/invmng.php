<?php
    class invmng extends Controller{
        private $md_product;
        private $md_supplier;

        public function __construct(){
            $this->md_product = $this->model('M_product'); 
            $this->md_supplier = $this->model('M_supplier');      
        }

        public function order(){
            if(!isset($_SESSION['empid'])){
                header("location: http://localhost/labora/user/logout");
            }
            // }else{
            //     if((time()-$_SESSION['last_login_timestamp'])>600){
            //         header("location: http://localhost/labora/user/logout");
            //     }else{
            //         $_SESSION['last_login_timestamp'] = time();
            //     }
            // }

            $data = [];
            $this->view("invmng/order" , $data);
        }

        public function product(){
            if(!isset($_SESSION['empid'])){
                header("location: http://localhost/labora/user/logout");
            }
            // }else{
            //     if((time()-$_SESSION['last_login_timestamp'])>600){
            //         header("location: http://localhost/labora/user/logout");
            //     }else{
            //         $_SESSION['last_login_timestamp'] = time();
            //     }
            // }

            $data = array();
            $result = $this->md_product->getRowById();
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    // Add each row as an associative array to the $data array
                    $data[] = $row;
                }
            }else{
                $data = [[
                    'Item_Id'=> "",
                    'Item_Name' => '',
                   // 'Quantity' => '',
                    'Reorder_Level' => '',
                ],];
                $this->view("invmng/product" , $data);
            }

            $this->view("invmng/product" , $data);
        }

        public function supplier(){
            if(!isset($_SESSION['empid'])){
                header("location: http://localhost/labora/user/logout");
            }
        
            // Fetch supplier data from the model
            $data = array();
            $suppliers = $this->md_supplier->getAllSuppliers();
            if ($suppliers->num_rows > 0) {
                while ($row = $suppliers->fetch_assoc()) {
                    // Add each row as an associative array to the $data array
                    $data[] = $row;
                }
            }else{
                $data = [[
                    'supplier_id'=> "",
                    'supplier_name' => '',
                    'contact_no' => '',
                    'address' => '',
                    'email' => '',
                ],];
                $this->view("invmng/supplier" , $data);
            }
            $this->view("invmng/supplier", $data);
        }

        public function dashboard(){
            if(!isset($_SESSION['empid'])){
                header("location: http://localhost/labora/user/logout");
            }
            // }else{
            //     if((time()-$_SESSION['last_login_timestamp'])>600){
            //         header("location: http://localhost/labora/user/logout");
            //     }else{
            //         $_SESSION['last_login_timestamp'] = time();
            //     }
            // }

            $data = [];
            $this->view("invmng/dashboard" , $data);
        }


        public function expiredChemicals(){
            if(!isset($_SESSION['empid'])){
                header("location: http://localhost/labora/user/logout");
            }
            // }else{
            //     if((time()-$_SESSION['last_login_timestamp'])>600){
            //         header("location: http://localhost/labora/user/logout");
            //     }else{
            //         $_SESSION['last_login_timestamp'] = time();
            //     }
            // }

            $data = [];
            $this->view("invmng/expiredChemicals" , $data);
        }

        public function reorder(){
            if(!isset($_SESSION['empid'])){
                header("location: http://localhost/labora/user/logout");
            }
            // }else{
            //     if((time()-$_SESSION['last_login_timestamp'])>600){
            //         header("location: http://localhost/labora/user/logout");
            //     }else{
            //         $_SESSION['last_login_timestamp'] = time();
            //     }
            // }

            $data = [];
            $this->view("invmng/reorder" , $data);
        }

        public function invoices(){
            if(!isset($_SESSION['empid'])){
                header("location: http://localhost/labora/user/logout");
            }
            // }else{
            //     if((time()-$_SESSION['last_login_timestamp'])>600){
            //         header("location: http://localhost/labora/user/logout");
            //     }else{
            //         $_SESSION['last_login_timestamp'] = time();
            //     }
            // }

            $data = [];
            $this->view("invmng/invoices" , $data);
        }

        public function quotations(){
            if(!isset($_SESSION['empid'])){
                header("location: http://localhost/labora/user/logout");
            }
            // }else{
            //     if((time()-$_SESSION['last_login_timestamp'])>600){
            //         header("location: http://localhost/labora/user/logout");
            //     }else{
            //         $_SESSION['last_login_timestamp'] = time();
            //     }
            // }

            $data = [];
            $this->view("invmng/quotations" , $data);
        }
        
        public function addInventoryForm(){
            // Check if the user is logged in
            if(!isset($_SESSION['empid'])){
                header("location: http://localhost/labora/user/logout");
            }
        
            $data = []; // Initialize data array
        
            if($_SERVER['REQUEST_METHOD']=="POST"){
                $_POST = filter_input_array(INPUT_POST , FILTER_SANITIZE_STRING);
        
                // Extract form data
                $item_name = trim($_POST['item-name']);
                $reorder_level = trim($_POST['reorder-limit']);
                $supplier_name = trim($_POST['supplier-name']);
        
                // Check if the item name already exists
                if($this->md_product->isItemNameExists($item_name)) {
                    // If item name exists, set an error message
                    $data['error'] = "Item name already exists. Please enter a unique item name.";
                } else {
                    // Otherwise, proceed to add the item to the inventory
                    $formattedNumber = str_pad($this->md_product->getNextId(), 4, '0', STR_PAD_LEFT);
                    $refno = 'LB-'.$formattedNumber;
        
                    // Call the model function to add the item
                    $this->md_product->enterItemData($item_name, $reorder_level, $supplier_name);
                    // Optionally, you can redirect the user to another page after successfully adding the item
                }
            }
        
            // Load the view with data
            $this->view("invmng/addInventoryForm" , $data);
        }
        


        public function itemDetails(){
            if(!isset($_SESSION['empid'])){
                header("location: http://localhost/labora/user/logout");
            }
            // }else{
            //     if((time()-$_SESSION['last_login_timestamp'])>600){
            //         header("location: http://localhost/labora/user/logout");
            //     }else{
            //         $_SESSION['last_login_timestamp'] = time();
            //     }
            // }

            $data = [];
            $this->view("invmng/itemDetails" , $data);
        }

        public function invnavbar(){
            if(!isset($_SESSION['empid'])){
                header("location: http://localhost/labora/user/logout");
            }
            // }else{
            //     if((time()-$_SESSION['last_login_timestamp'])>600){
            //         header("location: http://localhost/labora/user/logout");
            //     }else{
            //         $_SESSION['last_login_timestamp'] = time();
            //     }
            // }

            $data = [];
            $this->view("invmng/invnavbar" , $data);
        }

        public function orderForm(){
            if(!isset($_SESSION['empid'])){
                header("location: http://localhost/labora/user/logout");
            }
            // }else{
            //     if((time()-$_SESSION['last_login_timestamp'])>600){
            //         header("location: http://localhost/labora/user/logout");
            //     }else{
            //         $_SESSION['last_login_timestamp'] = time();
            //     }
            // }

            $data = [];
            $this->view("invmng/orderForm" , $data);
        }



        public function deleteItem($item_id){
            if ($this->md_product->getItemById($item_id)) {
                if ($this->md_product->deleteItemById($item_id)) {
                    // Item successfully deleted
                    $this->view("invmng/deleteSuccess");
                } else {
                    // Failed to delete item
                    echo "Error deleting item with ID $item_id.";
                }
            } else {
                // Item does not exist
                echo "Item with ID $item_id does not exist.";
            }
        }
    }
?>