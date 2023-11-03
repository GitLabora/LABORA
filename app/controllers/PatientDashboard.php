<?php
    class PatientDashboard extends Controller{
        private $md_appointment;
        private $md_testtype;

        private $md_user;

        private $md_report;
        public function __construct(){
            $this->md_appointment = $this->model('M_appointment');
            $this->md_testtype = $this->model('M_testtype');
            $this->md_user = $this->model('M_user');
            $this->md_report = $this->model('M_report');
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
            $this->view("patientdashboard/Dashboard" , $data);
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
            
            $data = array();
            $result = $this->md_appointment->getRowByEmail($_SESSION['useremail']);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    // Add each row as an associative array to the $data array
                    $data[] = $row;
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
                ],];
                $this->view("patientdashboard/appointment" , $data);
            }
            
            $this->view("patientdashboard/appointment" , $data);
            
        }

        public function searchAppointment(){
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
            
            $data = array();
            $result = $this->md_appointment->getRowByEmail($_SESSION['useremail']);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    // Add each row as an associative array to the $data array
                    $data[] = $row;
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
                ],];
                $this->view("patientdashboard/appointment" , $data);
            }
            
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
            $data = [
                'dateerr' => ""
            ];

            if($_SERVER['REQUEST_METHOD']=="POST"){
                $currentDate = date('Y-m-d');

                $_POST = filter_input_array(INPUT_POST , FILTER_SANITIZE_STRING);

                $test_type = trim($_POST['test-type']);
                $appointment_date = trim($_POST['appointment-date']);
                $appointment_time = trim($_POST['appointment-time']);
                $appointment_notes = trim($_POST['appointment-notes']);

                $data = [
                    'dateerr' => ""
                ];

                $today = new DateTime($currentDate);
                $appday = new DateTime($appointment_date);

                if($appday < $today){
                    $data = [
                        'dateerr' => "Enter valid date"
                    ];
                }

                if(empty($data["dateerr"])){
                $formattedNumber = str_pad($this->md_appointment->getNextId(), 4, '0', STR_PAD_LEFT);

                $refno = 'LB-'.$formattedNumber;
                
                $appointment_duration = $this->md_testtype->getDuration($test_type);
                
                $appointment_status = "Pending Approval";

                $this->md_appointment->enterAppointmentData($refno,$test_type,$appointment_date,$appointment_time,$appointment_duration,$appointment_status,$appointment_notes,$_SESSION['useremail']);
                }


            }else{
                
            }
            $this->view("patientdashboard/appointment_form" , $data);

            stopResubmission();
        }

        public function cancelAppointment($id){
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
            $data=[];
            $this->md_appointment->cancelAppointment($id);
            header("Location: http://localhost/labora/PatientDashboard/appointment");
        }

        public function editProfile(){
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


            if($_SERVER['REQUEST_METHOD']=="POST"){
                $_POST = filter_input_array(INPUT_POST , FILTER_SANITIZE_STRING);

                $data = [
                    'fullname' => trim($_POST['fullname']),
                    'email' => $_SESSION['useremail'],
                    'phone' => trim($_POST['phone']),
                    'dob' => trim($_POST['dob']),
                    'address' => trim($_POST['address'])
                ];

                $this->md_user->changeName($data['email'] , $data['fullname']);
                $this->md_user->changePhone($data['email'] , $data['phone']);
                $this->md_user->changeDob($data['email'] , $data['dob']);
                $this->md_user->changeAddress($data['email'] , $data['address']);

            }else{
                $current_user=$this->md_user->getUser( $_SESSION['useremail']);
                $data = [
                    'fullname' => $current_user['patient_name'],
                    'email' => $_SESSION['useremail'],
                    'phone' => $current_user['patient_phone'],
                    'dob' => $current_user['patient_dob'],
                    'address' => $current_user['patient_address'],
                ];
            }

            $this->view('patientdashboard/profile' , $data);

            //for avoiding form resubmission
            stopResubmission();
        }


        public function report(){
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
            
            $data = array();
            $result = $this->md_report->getRowByEmail($_SESSION['useremail']);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    // Add each row as an associative array to the $data array
                    $data[] = $row;
                }
            }else{
                $data = [[
                    'id'=> "",
                    'ref_No' => '',
                    'Test_Type' => '',
                    'date' => '',
                    'message'=> '',
                ],];
                $this->view("patientdashboard/reports" , $data);
            }
            
            $this->view("patientdashboard/reports" , $data);
            
        }

        public function deleteReport($id , $path){ 
  
            // Use unlink() function to delete a file 
            echo $path;
            if (!unlink('C:\\xampp\\htdocs\\uploads\\'.$path)) { 
                $this->md_report->deleteFromId($id);
            }
            header("location: http://localhost/labora/PatientDashboard/report");


        }
    }
?>

