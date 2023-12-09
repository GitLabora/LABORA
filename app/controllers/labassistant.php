<?php
    class labassistant extends Controller{
        private $md_appointment;
        private $md_testtype;

        private $md_user;
        public function __construct(){
            $this->md_appointment = $this->model('M_appointment');
            $this->md_testtype = $this->model('M_testtype');
            $this->md_user = $this->model('M_user');
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
            $this->view("labassistant/dashboard" , $data);
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
            $this->view("labassistant/reports" , $data);
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
            
            $data = array();
            $result = $this->md_appointment->getRow();
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    // Add each row as an associative array to the $data array
                    if($row['Appointment_Status']=='Pending Approval' || $row['Appointment_Status']=='Send to MLT'){
                        $row['patient_name'] = $this->md_user->getUserName($row['patient_email']);
                        $data[] = $row;
                    }
                    
                }
            }else{
                $data = [[
                    'Id'=> "",
                    'Ref_No' => '',
                    'Test_Type' => '',
                    'Appointment_Date' => '',
                    'Appointment_Time'=> '',
                    'Appointment_Duration'=> '',
                    'Appointment_Status'=> '',
                    'Appointment_Notes'=> '',
                    'patient_name' => ''
                ],];
                $this->view("labassistant/appointment" , $data);
            }
            
            $this->view("labassistant/appointment" , $data);
        }

        public function patientdetails(){
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
            $result = $this->md_user->getRow();
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    // Add each row as an associative array to the $data array
                    $data[] = $row;
                }
            }else{
                $data = [[
                    'patient_id'=> "",
                    "patient_name"=> "",
                    'patient_email' => '',
                    'patient_phone' => '',
                    'patient_dob' => '',
                    'patient_gender' => '',
                    'patient_address' => ''
                ],
                ];
                $this->view("labassistant/patientdetails" , $data);
            }
            
            $this->view("labassistant/patientdetails" , $data);
            
        }

        public function inventory(){
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
            $result = $this->md_appointment->getRow();
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    // Add each row as an associative array to the $data array
                    $data[] = $row;
                }
            }else{
                $data = [
                    'Id'=> "",
                    'Ref_no' => '',
                ];
                $this->view("labassistant/inventory" , $data);
            }
            
            $this->view("labassistant/inventory" , $data);
            
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
            $this->view("labassistant/dashboard" , $data);
        }

        public function cancelAppointment($id){
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
            $row = $this->md_appointment->getRowList($id);
            if($row['Appointment_Status']=='Pending Approval'){
                $this->md_appointment->cancelAppointment($id);
            }
            header("Location: http://localhost/labora/labassistant/appointment");
        }

        public function sendAppointment($id){
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
            $data=[];
            $this->md_appointment->sendAppointment($id);
            header("Location: http://localhost/labora/labassistant/appointment");
        }
    }
?>

