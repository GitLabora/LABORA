<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="refresh" content="600; url=http://localhost/labora/user/logout"> -->
    <link rel="stylesheet" href="<?php echo APPROOT.'/public/css/mltdashboard/report2.css'?>">
    <script src="<?php echo APPROOT.'/public/js/mltdashboard/mlt.js';?>"></script>
    <!-- static icons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!-- annimation icons -->
    <script src="https://cdn.lordicon.com/lordicon-1.1.0.js"></script>
    <title>MLT dashboard</title>
</head>
<body>
    <?php require_once 'components/nevbar.php' ?>
    <div class="container_1">

    <div class="tablename">
            <h3>Medical Reports</h3>
        </div>
        <div class="line"></div>
        <div class="searchbar">
            <input type="text" class="search" placeholder="Enter reference number">
            <a href="#" class="searchbtn">Search</a>
        </div>

        <div class="filter">
            <form action="#" method="post">
                <!-- <input type="text" class="test-type" placeholder="Enter test type"> -->
                <select type="text" class="test-type">
                <option value="option1">All</option>
                <option value="option1">Pending</option>
                <option value="option2">Completed</option>
                </select>
                <!-- <input type="date" class="from">
                <input type="date" class="to"> -->
                <button type="submit" class="submit button">Filter</button>
            </form>
        </div>
        <!-- <div class="add">
            
            <a href="#" class="addbtn"><ion-icon name="add"></ion-icon> Schedule appointment</a>
         </div> -->
        <div>
        <table>
    <thead>
        <tr>
            <th>Index</th>
            <th>Ref No</th>
            <th>Test Type</th>
            <th>Arrival Date</th>
            <th>Arrival Time</th>
            <th>Status</th>
            <!-- <th>Approve Status</th> -->
            <th>Notes</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>AP12345</td>
            <td>Check-up</td>
            <td>2023-11-15</td>
            <td>10:00 AM</td>
            <td>Pending</td>
            <!-- <td>Scheduled</td> -->
            <td>Reminder call sent</td>
            <!-- <td><button class="cancel">Cancel</button></td> -->
            <td><a href="#" class="download"><ion-icon name="arrow-forward-circle-outline"></ion-icon></a></td>
        </tr>
        <tr>
            <td>2</td>
            <td>AP54321</td>
            <td>MRI Scan</td>
            <td>2023-11-20</td>
            <td>02:30 PM</td>
            <td>Completed</td>
            <!-- <td>Completed</td> -->
            <td>Valid</td>
            <!-- <td><button class="cancel del">Delete</button></td> -->
            <td><a href="#" class="download"><ion-icon name="arrow-forward-circle-outline"></ion-icon></a></td>
        </tr>
        <tr>
            <td>3</td>
            <td>AP98765</td>
            <td>Dental Check-up</td>
            <td>2023-11-25</td>
            <td>09:15 AM</td>
            <td>Pending</td>
            <!-- <td>Canceled</td> -->
            <td>Invalid</td>
            <!-- <td><button class="cancel del">Delete</button></td> -->
            <td><a href="#" class="download"><ion-icon name="arrow-forward-circle-outline"></ion-icon></a></td>
        </tr>
        <tr>
            <td>4</td>
            <td>AP12345</td>
            <td>Check-up</td>
            <td>2023-11-15</td>
            <td>10:00 AM</td>
            <td>Pending</td>
            <!-- <td>Scheduled</td> -->
            <td>Valid</td>
            <!-- <td><button class="cancel">Cancel</button></td> -->
            <td><a href="#" class="download"><ion-icon name="arrow-forward-circle-outline"></ion-icon></a></td>
        </tr>
        <tr>
            <td>5</td>
            <td>AP54321</td>
            <td>MRI Scan</td>
            <td>2023-11-20</td>
            <td>02:30 PM</td>
            <td>Completed</td>
            <!-- <td>Completed</td> -->
            <td>Valid</td>
            <!-- <td><button class="cancel del">Delete</button></td> -->
            <td><a href="#" class="download"><ion-icon name="arrow-forward-circle-outline"></ion-icon></a></td>
        </tr>
        <tr>
            <td>6</td>
            <td>AP98765</td>
            <td>Dental Check-up</td>
            <td>2023-11-25</td>
            <td>09:15 AM</td>
            <td>Pending</td>
            <!-- <td>Canceled</td> -->
            <td>Invalid</td>
            <!-- <td><button class="cancel del">Delete</button></td> -->
            <td><a href="#" class="download"><ion-icon name="arrow-forward-circle-outline"></ion-icon></a></td>
        </tr>
        <tr>
            <td>7</td>
            <td>AP12345</td>
            <td>Check-up</td>
            <td>2023-11-15</td>
            <td>10:00 AM</td>
            <td>Pending</td>
            <!-- <td>Scheduled</td> -->
            <td>Valid</td>
            <!-- <td><button class="cancel">Cancel</button></td> -->
            <td><a href="#" class="download"><ion-icon name="arrow-forward-circle-outline"></ion-icon></ion-icon></a></td>
        </tr>
        <!-- Add more rows as needed -->
    </tbody>
        </div>
    </div>
</body>
</html>