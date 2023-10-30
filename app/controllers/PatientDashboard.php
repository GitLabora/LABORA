<?php
    class PatientDashboard extends Controller{
        public function __construct(){

        }

        public function index(){
            if(!isset($_SESSION['userid'])){
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
            $this->view("patientdashboard/Patient" , $data);
        }

        public function reports(){
            if(!isset($_SESSION['userid'])){
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
            $this->view("patientdashboard/reports" , $data);
        }

        public function appointment(){
            if(!isset($_SESSION['userid'])){
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
            $this->view("patientdashboard/appointment" , $data);
        }

        public function dashboard(){
            if(!isset($_SESSION['userid'])){
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
            $this->view("patientdashboard/dashboard" , $data);
        }

        public function profile(){
            if(!isset($_SESSION['userid'])){
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
            $this->view("patientdashboard/profile" , $data);
        }

        public function medicaltest(){
            if(!isset($_SESSION['userid'])){
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
            $this->view("patientdashboard/medicaltest" , $data);
        }

        public function appointment_form(){
            if(!isset($_SESSION['userid'])){
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
            $this->view("patientdashboard/appointment_form" , $data);
        }
    }
?>

