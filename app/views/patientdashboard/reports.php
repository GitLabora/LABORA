<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="refresh" content="600; url=http://localhost/labora/user/logout"> -->
    <link rel="stylesheet" href="<?php echo APPROOT.'/public/css/patientdashboard/reports.css'?>">
    <script src="<?php echo APPROOT.'/public/js/patientdashboard/patient.js';?>"></script>
    <!-- static icons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!-- annimation icons -->
    <script src="https://cdn.lordicon.com/lordicon-1.1.0.js"></script>
    <title>Patient dashboard</title>
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
                <input type="text" class="test-type" placeholder="Enter test type">
                <input type="date" class="from">
                <input type="date" class="to">
                <button type="submit" class="submit button">Filter</button>
            </form>
        </div>

        <div>
        <table>
        <thead>
            <tr>
                <th>Index</th>
                <th>Ref No</th>
                <th>Test Type</th>
                <th>Date</th>
                <th>Message</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        <?php
            $reversedArray = array_reverse($data, true);
            foreach ($reversedArray as $row) {
                echo '<tr>
                <td>'.$row['id'].'</td>
                <td>'.$row['ref_no'].'</td>
                <td>'.$row['test_type'].'</td>
                <td>'.$row['date'].'</td>
                <td>'.$row['message'].'</td>
                <td><a href="http://localhost/uploads/'.$row['path'].'" >View</a><a href="http://localhost/labora/PatientDashboard/deleteReport/'.$row['id'].'/'.$row['path'].'">delete</a></td>
                
            </tr>';
            }
            ?>
            <!-- Add more rows as needed -->
        </tbody>
        </table>
        </div>
    </div>
</body>
</html>