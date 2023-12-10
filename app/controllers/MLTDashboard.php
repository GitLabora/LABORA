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
            $this->view("mltdashboard/MLT" , $data);
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
            $this->view("mltdashboard/reports" , $data);
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
            $this->view("mltdashboard/appointment" , $data);
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
            $this->view("mltdashboard/dashboard" , $data);
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
            $this->view("mltdashboard/profile" , $data);
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
            $this->view("mltdashboard/medicalTests" , $data);
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
            $this->view("mltdashboard/test_form" , $data);
        }
    }
?>