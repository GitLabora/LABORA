<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="refresh" content="600; url=http://localhost/labora/user/logout"> -->
    <link rel="stylesheet" href="<?php echo APPROOT.'/public/css/patientdashboard/components/nevbar.css'?>">
    <script src="<?php echo APPROOT.'/public/js/patientdashboard/patient.js';?>"></script>
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
                    <a href="#">
                    <span class="icon"><ion-icon name="grid"></ion-icon></span>
                    <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <span class="icon"><ion-icon name="calendar-number"></ion-icon></ion-icon></span>
                    <span class="title">Appointment</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <span class="icon"><ion-icon name="reader"></ion-icon></span>
                    <span class="title">Medical reports</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <span class="icon"><ion-icon name="thermometer"></ion-icon></span>
                    <span class="title">Medical tests</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <span class="title">Profile</span>
                    </a>
                </li>
            </ul>
            <a href="#">
                <span class="icon"><ion-icon name="log-out"></ion-icon></span>
                <span class="title">Log out</span>
            </a>
        </div>
    </div>

    <script>
        Let list = document.querySelectorAll('.navigation li');
        function activeLink(){
            list.forEach((item) =>
            item.classList.remove('hovered'));
            this.classList.add('hovered');
        }
        list.forEach((item) => item.addEventListener('mouseover',activeLink))
    </script>
</body>
</html>