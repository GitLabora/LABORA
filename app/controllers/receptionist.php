<?php
    class receptionist extends Controller{
        public function __construct(){

        }

        public function index(){
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
            $this->view("receptionist/Patient" , $data);
        }

        public function reports(){
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
            $this->view("receptionist/reports" , $data);
        }

        public function appointment(){
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
            $this->view("receptionist/appointment" , $data);
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
            $this->view("receptionist/dashboard" , $data);
        }

        public function profile(){
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
            $this->view("receptionist/profile" , $data);
        }

        public function medicaltest(){
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
            $this->view("receptionist/medicaltest" , $data);
        }
    }
?>