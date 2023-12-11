<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="refresh" content="600; url=http://localhost/labora/user/logout"> -->
    <link rel="stylesheet" href="<?php echo APPROOT.'/public/css/receptdashboard/register.css'?>">
    <script src="<?php echo APPROOT.'/public/js/receptdashboard/recept.js';?>"></script>
    <!-- static icons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!-- annimation icons -->
    <script src="https://cdn.lordicon.com/lordicon-1.1.0.js"></script>
    <title>Receptionist dashboard</title>
</head>
<body>
    <?php require_once 'components/nevbar.php' ?>
    <div class="container_1">

        <div class="tablename">
            <h3>Register Patient</h3>
        </div>
        <div class="line"></div>
        <div class="searchbar">
            <input type="text" class="search" placeholder="Enter patient name">
            <a href="#" class="searchbtn">Search</a>
        </div>

        <!-- <div class="filter">
            <form action="#" method="post">
                <input type="text" class="test-type" placeholder="Enter test type">
                <input type="date" class="from">
                <input type="date" class="to">
                <button type="submit" class="submit button">Filter</button>
            </form>
        </div> -->
        <div class="add">
            
            <a href="http://localhost/labora/PatientDashboard/patient_form" class="addbtn"><ion-icon name="add"></ion-icon> Add Patient</a>
         </div>
        <div>
        <table>
        <thead>
        <tr>
            <!-- <th>Index</th> -->
            <th>Patient ID</th>
            <th>Patient Name</th>
            <th>Contact Number</th>
            <th>Address</th>
            <!-- <th>Appointment Duration</th>
            <th>Appointment Status</th>
            <th>Appointment Notes</th> -->
            <!-- <th></th> -->
        </tr>
    </thead>
    <tbody>
        <tr>
            <!-- <td>1</td> -->
            <td>PAT001</td>
            <td>John Doe</td>
            <td>+94 123 456 789</td>
            <td>123 Main Street, Colombo</td>
            <!-- <td>30 minutes</td>
            <td>Scheduled</td>
            <td>Reminder call sent</td>
            <td><button class="cancel">Cancel</button></td> -->
        </tr>
        <tr>
            <!-- <td>2</td> -->
            <td>PAT002</td>
            <td>Alice Smith</td>
            <td>+94 987 654 321</td>
            <td>456 Elm Road, Kandy</td>
            <!-- <td>1 hour</td>
            <td>Completed</td>
            <td>N/A</td>
            <td><button class="cancel del">Delete</button></td> -->
        </tr>
        <tr>
            <!-- <td>3</td> -->
            <td>PAT003</td>
            <td>Mary Johnson</td>
            <td>+94 777 888 999</td>
            <td>789 Oak Avenue, Galle</td>
            <!-- <td>45 minutes</td>
            <td>Canceled</td>
            <td>Patient rescheduled</td>
            <td><button class="cancel del">Delete</button></td> -->
        </tr>
            <tr>
                <!-- <td>4</td>
                <td>AP12345</td>
                <td>Check-up</td>
                <td>2023-11-15</td>
                <td>10:00 AM</td>
                <td>30 minutes</td>
                <td>Scheduled</td>
                <td>Reminder call sent</td>
                <td><button class="cancel">Cancel</button></td>
            </tr>
            <tr>
                <td>5</td>
                <td>AP54321</td>
                <td>MRI Scan</td>
                <td>2023-11-20</td>
                <td>02:30 PM</td>
                <td>1 hour</td>
                <td>Completed</td>
                <td>N/A</td>
                <td><button class="cancel del">Delete</button></td>
            </tr>
            <tr>
                <td>6</td>
                <td>AP98765</td>
                <td>Dental Check-up</td>
                <td>2023-11-25</td>
                <td>09:15 AM</td>
                <td>45 minutes</td>
                <td>Canceled</td>
                <td>Patient rescheduled</td>
                <td><button class="cancel del">Delete</button></td>
            </tr>
            <tr>
                <td>7</td>
                <td>AP12345</td>
                <td>Check-up</td>
                <td>2023-11-15</td>
                <td>10:00 AM</td>
                <td>30 minutes</td>
                <td>Scheduled</td>
                <td>Reminder call sent</td>
                <td><button class="cancel">Cancel</button></td>
            </tr>
            <tr>
                <td>8</td>
                <td>AP54321</td>
                <td>MRI Scan</td>
                <td>2023-11-20</td>
                <td>02:30 PM</td>
                <td>1 hour</td>
                <td>Completed</td>
                <td>N/A</td>
                <td><button class="cancel del">Delete</button></td>
            </tr>
            <tr>
                <td>9</td>
                <td>AP98765</td>
                <td>Dental Check-up</td>
                <td>2023-11-25</td>
                <td>09:15 AM</td>
                <td>45 minutes</td>
                <td>Canceled</td>
                <td>Patient rescheduled</td>
                <td><button class="cancel del">Delete</button></td>
            </tr> -->
            <!-- Add more rows as needed -->
        </tbody>
        </table>
        </div>
    </div>
</body>
</html>