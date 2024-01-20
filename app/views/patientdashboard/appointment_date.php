<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo APPROOT.'/public/css/patientdashboard/appointment_date.css'?>">
    <title>Document</title>
</head>
<body>
    <?php require_once 'components/nevbar.php' ?>
    <div class="container_1">
        <div class="container_calender">
            <h2>Select Appointment Date</h2>
            <div class="calendar">
                <div class="header">
                <div class="month"></div>
                <div class="btns">
                    <div class="btn today-btn">
                    <i class="fas fa-calendar-day"></i>
                    </div>
                    <div class="btn prev-btn">
                    <i class="fas fa-chevron-left"></i>
                    </div>
                    <div class="btn next-btn">
                    <i class="fas fa-chevron-right"></i>
                    </div>
                </div>
                </div>
                <div class="weekdays">
                <div class="day">Sun</div>
                <div class="day">Mon</div>
                <div class="day">Tue</div>
                <div class="day">Wed</div>
                <div class="day">Thu</div>
                <div class="day">Fri</div>
                <div class="day">Sat</div>
                </div>
                <div class="days">
                <!-- lets add days using js -->
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo APPROOT.'/public/js/patientdashboard/appointment_date.js';?>"></script>

    <script>
        function getTime(date){
            
        }
    </script>
</body>
</html>