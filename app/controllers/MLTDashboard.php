<?php
    class MLTDashboard extends Controller{
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
            $this->view("MLTdashboard/MLT" , $data);
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
            $this->view("MLTdashboard/reports" , $data);
        }

        public function appointment(){
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
            $this->view("MLTdashboard/appointment" , $data);
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
            $this->view("MLTdashboard/dashboard" , $data);
        }

        public function profile(){
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
            $this->view("MLTdashboard/profile" , $data);
        }

        public function medicalTests(){
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
            $this->view("MLTdashboard/medicalTests" , $data);
        }
        public function test_form(){
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
            $this->view("MLTdashboard/test_form" , $data);
        }
    }
?>