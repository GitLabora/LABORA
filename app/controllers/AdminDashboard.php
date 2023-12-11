<?php
    class AdminDashboard extends Controller{
        private $md_employee;
        public function __construct(){
            $this->md_employee = $this->model('M_employee');
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

            $data = array();
            $result = $this->md_employee->getRow();
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {;
                        $data[] = $row;
                }
            }else{
                $data = [[
                    'id'=> "",
                    'full_name' => '',
                    'email' => '',
                    'phone' => '',
                    'dob'=> '',
                    'address'=> '',
                    'gender'=> '',
                    'role'=> '',
                ],];
            }

            // $data = [];
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
        public function user_form(){
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
            $this->view("admindashboard/user_form" , $data);
        }

        public function addUser(){
            if($_SERVER['REQUEST_METHOD']=="POST"){
                $_POST = filter_input_array(INPUT_POST , FILTER_SANITIZE_STRING);

                $role = trim($_POST['employeeRole']);
                $fullname = trim($_POST['full_name']);
                $email = trim($_POST['email']);
                $phone = trim($_POST['phone']);
                $dob = $_POST['dob'];
                $address = trim($_POST['address']);
                $gender = trim($_POST['gender']);
                $data = [
                    // error variable
                    'emailerr' => '',
                    'fullname' => $fullname,
                    'email' => $email,
                    'phone' => $phone,
                    'dob' => $dob,
                    'address' => $address,
                    'gender' => $gender,
                    'role' => $role
                ];
                //input validation

                if($this->md_employee->isEnteredEmail($email)){
                    $data['emailerr'] = 'This email already exist';
                }

                if(empty($data['emailerr'])){
                    $password = $this->generateRandomPassword();
                    $subject = 'Your New Employee Account Credentials';
                    $body = 'Dear'.$fullname.',<br>

                    Welcome to our team! Your employee account details are as follows:<br>
                    
                    Username:'.$email.'<br>
                    Password:'.$password.'.';

                    sendEmail($email , $fullname , $body , $subject);
                    $hashed_password = password_hash($password,PASSWORD_DEFAULT);
                    $this->md_employee->enterUserData($fullname,$email,$phone,$dob,$address ,$gender ,$role, $hashed_password);
                    header('location: http://localhost/labora/admin/userAccount');
                }

            }else{

                // initial state
                $data = [
                    // error variable
                    'emailerr' => '',
                    'fullname' => '',
                    'email' => '',
                    'phone' => '',
                    'dob' => '',
                    'address' => '',
                    'gender'=> '',
                    'role' => '',
                ];
            }

            $this->view('admindashboard/user_form' , $data);
            // for avoiding form resubmission
            stopResubmission();      

        }

        function generateRandomPassword($length = 12) {
            // Define character sets
            $upperCaseChars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $lowerCaseChars = 'abcdefghijklmnopqrstuvwxyz';
            $digitChars = '0123456789';
            $specialChars = '!@#$%^&*()-_+=[]{}|;:,.<>?';
        
            // Create a pool of characters to choose from
            $characters = $upperCaseChars . $lowerCaseChars . $digitChars . $specialChars;
        
            // Initialize the password variable
            $password = '';
        
            // Generate the random password
            for ($i = 0; $i < $length; $i++) {
                $password .= $characters[random_int(0, strlen($characters) - 1)];
            }
        
            return $password;
        }

        public function deleteEmployee($email){
            $this->md_employee->deleteFromMail($email);
            header('location: http://localhost/labora/admindashboard/userAccount');
        }
    }
?>