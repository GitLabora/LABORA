<?php
    class AdminDashboard extends Controller{
        public function __construct(){

        }

        public function index(){
            // if(!isset($_SESSION['userid'])){
            //     header("location: http://localhost/labora/user/logout");
            // }
            // }else{
            //     if((time()-$_SESSION['last_login_timestamp'])>600){
            //         header("location: http://localhost/labora/user/logout");
            //     }else{
            //         $_SESSION['last_login_timestamp'] = time();
            //     }
            // }

            $data = [];
            $this->view("admindashboard/Admin" , $data);
        }

        public function medicaltest(){
            // if(!isset($_SESSION['userid'])){
            //     header("location: http://localhost/labora/user/logout");
            // }
            // }else{
            //     if((time()-$_SESSION['last_login_timestamp'])>600){
            //         header("location: http://localhost/labora/user/logout");
            //     }else{
            //         $_SESSION['last_login_timestamp'] = time();
            //     }
            // }

            $data = [];
            $this->view("admindashboard/medicaltest" , $data);
        }

        public function userAccount(){
            // if(!isset($_SESSION['userid'])){
            //     header("location: http://localhost/labora/user/logout");
            // }
            // }else{
            //     if((time()-$_SESSION['last_login_timestamp'])>600){
            //         header("location: http://localhost/labora/user/logout");
            //     }else{
            //         $_SESSION['last_login_timestamp'] = time();
            //     }
            // }

            $data = [];
            $this->view("admindashboard/userAccount" , $data);
        }

        public function dashboard(){
            // if(!isset($_SESSION['userid'])){
            //     header("location: http://localhost/labora/user/logout");
            // }
            // }else{
            //     if((time()-$_SESSION['last_login_timestamp'])>600){
            //         header("location: http://localhost/labora/user/logout");
            //     }else{
            //         $_SESSION['last_login_timestamp'] = time();
            //     }
            // }

            $data = [];
            $this->view("admindashboard/dashboard" , $data);
        }

        public function reports(){
            // if(!isset($_SESSION['userid'])){
            //     header("location: http://localhost/labora/user/logout");
            // }
            // }else{
            //     if((time()-$_SESSION['last_login_timestamp'])>600){
            //         header("location: http://localhost/labora/user/logout");
            //     }else{
            //         $_SESSION['last_login_timestamp'] = time();
            //     }
            // }

            $data = [];
            $this->view("admindashboard/reports" , $data);
        }

        public function payment(){
            // if(!isset($_SESSION['userid'])){
            //     header("location: http://localhost/labora/user/logout");
            // }
            // }else{
            //     if((time()-$_SESSION['last_login_timestamp'])>600){
            //         header("location: http://localhost/labora/user/logout");
            //     }else{
            //         $_SESSION['last_login_timestamp'] = time();
            //     }
            // }

            $data = [];
            $this->view("admindashboard/payment" , $data);
        }
    }
?>