<?php
    class Labassistantdashboard extends Controller{
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
            $this->view("Labassistantdashboard/Patient" , $data);
        }

        public function Medicalreports(){
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
            $this->view("Labassistantdashboard/Medicalreports" , $data);
        }

        public function patientdetails(){
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
            $this->view("Labassistantdashboard/patientdetails" , $data);
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
            $this->view("Labassistantdashboard/dashboard" , $data);
        }

        
        public function Itemrequest(){
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
            $this->view("Labassistantdashboard/Itemrequest" , $data);
        }

        public function Validations(){
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
            $this->view("Labassistantdashboard/Validations" , $data);
        }

        public function Itemrequest(){
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
            $this->view("Labassistantdashboard/Itemrequest" , $data);
        }
    }
?>