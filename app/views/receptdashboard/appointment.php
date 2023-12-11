<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="refresh" content="600; url=http://localhost/labora/user/logout"> -->
    <link rel="stylesheet" href="<?php echo APPROOT.'/public/css/receptdashboard/appointment2.css'?>">
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
            <h3>Appointments</h3>
        </div>
        <div class="line"></div>
        <div class="searchbar">
            <input type="text" class="search" placeholder="Enter reference number">
            <a href="#" class="searchbtn">Search</a>
        </div>

        <div class="filter">
            <form action="#" method="post">
                <input type="text" class="test-type" placeholder="Enter test type">
                <input type="date" class="from">
                <input type="date" class="to">
                <button type="submit" class="submit button">Filter</button>
            </form>
        </div>
        <div class="add">
            
            <a href="http://localhost/labora/PatientDashboard/appointment_form" class="addbtn"><ion-icon name="add"></ion-icon> Schedule appointment</a>
         </div>

        <div>
        <table>
    <thead>
        <tr>
            <th>Index</th>
            <th>Ref No</th>
            <th>Patient ID</th>
            <th>Patient Name</th>
            <th>Test Type</th>
            <th>Appointment Date</th>
            <th>Appointment Time</th>
            <th>Appointment Notes</th>
            <!-- <th></th> -->
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>AP12345</td>
            <td>PAT001</td>
            <td>John Doe</td>
            <td>Blood Test</td>
            <td>2023-11-15</td>
            <td>10:00 AM</td>
            <td>-</td>
            <!-- <td><button class="cancel">Cancel</button></td> -->
        </tr>
        <tr>
            <td>2</td>
            <td>AP54321</td>
            <td>PAT002</td>
            <td>Alice Smith</td>
            <td>MRI Scan</td>
            <td>2023-11-20</td>
            <td>02:30 PM</td>
            <td>-</td>
            <!-- <td><button class="cancel del">Delete</button></td> -->
        </tr>
        <tr>
            <td>3</td>
            <td>AP98765</td>
            <td>PAT003</td>
            <td>Mary Johnson</td>
            <td>Check-up</td>
            <td>2023-11-25</td>
            <td>09:15 AM</td>
            <td>-</td>
            <!-- <td><button class="cancel del">Delete</button></td> -->
        </tr>
        <tr>
            <td>4</td>
            <td>AP12345</td>
            <td>PAT004</td>
            <td>Robert Wilson</td>
            <td>Blood Test</td>
            <td>2023-11-15</td>
            <td>10:00 AM</td>
            <td>-</td>
            <!-- <td><button class="cancel">Cancel</button></td> -->
        </tr>
        <tr>
            <td>5</td>
            <td>AP54321</td>
            <td>PAT005</td>
            <td>Lisa Brown</td>
            <td>MRI Scan</td>
            <td>2023-11-20</td>
            <td>02:30 PM</td>
            <td>-</td>
            <!-- <td><button class="cancel del">Delete</button></td> -->
        </tr>
        <tr>
            <td>6</td>
            <td>AP98765</td>
            <td>PAT006</td>
            <td>Michael Davis</td>
            <td>Check-up</td>
            <td>2023-11-25</td>
            <td>09:15 AM</td>
            <td>-</td>
            <!-- <td><button class="cancel del">Delete</button></td> -->
        </tr>
        <tr>
            <td>7</td>
            <td>AP12345</td>
            <td>PAT007</td>
            <td>Susan Lee</td>
            <td>Blood Test</td>
            <td>2023-11-15</td>
            <td>10:00 AM</td>
            <td>-</td>
            <!-- <td><button class="cancel">Cancel</button></td> -->
        </tr>
        <tr>
            <td>8</td>
            <td>AP54321</td>
            <td>PAT008</td>
            <td>David Clark</td>
            <td>MRI Scan</td>
            <td>2023-11-20</td>
            <td>02:30 PM</td>
            <td>-</td>
            <!-- <td><button class="cancel del">Delete</button></td> -->
        </tr>
        <tr>
            <td>9</td>
            <td>AP98765</td>
            <td>PAT009</td>
            <td>Karen Rodriguez</td>
            <td>Check-up</td>
            <td>2023-11-25</td>
            <td>09:15 AM</td>
            <td>-</td>
            <!-- <td><button class="cancel del">Delete</button></td> -->
        </tr>
        <!-- Add more rows as needed -->
    </tbody>
</table>

        </div>
    </div>
</body>
</html>