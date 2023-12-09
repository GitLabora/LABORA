<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="refresh" content="600; url=http://localhost/labora/user/logout"> -->
    <link rel="stylesheet" href="<?php echo APPROOT.'/public/css/receptionist/components/nevbar.css'?>">
    <!-- static icons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!-- annimation icons -->
    <script src="https://cdn.lordicon.com/lordicon-1.1.0.js"></script>
    <title>Patient dashboard</title>
</head>
<body>
    <div class="container">
        <div class="navigation">
            <div class="logooo">
                <img src="<?php echo APPROOT.'/public/';?>img/Health_Care__2_-removebg-preview.png" alt="">
                <h2>Sahanya Labs</h2>
            </div>
            <ul>
                <li>
                    <a href="http://localhost/labora/receptionist/dashboard">
                    <span class="icon"><ion-icon name="grid"></ion-icon></span>
                    <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="http://localhost/labora/receptionist/appointment">
                    <span class="icon"><ion-icon name="calendar-number"></ion-icon></ion-icon></span>
                    <span class="title">Appointment</span>
                    </a>
                </li>
                <li>
                    <a href="http://localhost/labora/receptionist/reports">
                    <span class="icon"><ion-icon name="reader"></ion-icon></span>
                    <span class="title">Medical reports</span>
                    </a>
                </li>
                <li>
                    <a href="http://localhost/labora/receptionist/medicaltest">
                    <span class="icon"><ion-icon name="thermometer"></ion-icon></span>
                    <span class="title">Medical tests</span>
                    </a>
                </li>
                <li>
                    <a href="http://localhost/labora/receptionist/profile">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <span class="title">Profile</span>
                    </a>
                </li>
            </ul>
            <div class="logout">
                <a href="http://localhost/labora/user/logout" class="button">
                <span class="icon"><ion-icon name="log-out"></ion-icon></span>
                <span class="log">Log out</span>
                </a>
            </div>
            
        </div>


    <!-- Top bar -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
                <div class="chat">
                    <ion-icon name="chatbubble-ellipses"></ion-icon>
                </div>
                <div class="notification">
                    <ion-icon name="notifications"></ion-icon>
                </div>
                <div class="user">
                    <h4><?php echo $_SESSION['role'].': '.$_SESSION['empname'];?></h4>
                    <img src="/labora/public/img/receptionist/user1.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</body>
</html>