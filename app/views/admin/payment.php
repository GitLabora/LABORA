<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="refresh" content="600; url=http://localhost/labora/user/logout"> -->
    <link rel="stylesheet" href="<?php echo APPROOT.'/public/css/admin/payment.css'?>">
    <script src="<?php echo APPROOT.'/public/js/admin/patient.js';?>"></script>
    <!-- static icons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!-- annimation icons -->
    <script src="https://cdn.lordicon.com/lordicon-1.1.0.js"></script>
    <title>Admin dashboard</title>
</head>
<body>
    <?php require_once 'components/nevbar.php' ?>
    <div class="container_1">

        <div class="tablename">
            <h3>Payment Details</h3>
        </div>
        <div class="line"></div>
        <!-- <div class="searchbar">
            <input type="text" class="search" placeholder="Enter test name">
            <a href="#" class="searchbtn">Search</a>
        </div> -->

        <div class="filter">
            <form action="#" method="post">
                <!-- <input type="text" class="test-type" placeholder="Enter test type"> -->
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
            <th>Bill No</th>
            <th>Patient</th>
            <th>Test Name</th>
            <th>Date</th>
            <th>Price(Rs)</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>SL-001</td>
            <td>Alice Silva</td>
            <td>Blood Test</td>
            <td>2023-10-29</td>
            <td>2500</td>
            <!-- Add actions or links for this row -->
            <!-- <td>
                <a href="#" class="download"><ion-icon name="arrow-down-circle"></ion-icon></a>
                <a href="#" class="delete"><ion-icon name="trash"></ion-icon></a>
            </td> -->
        </tr>
        <tr>
            <td>2</td>
            <td>SL-002</td>
            <td>John Perera</td>
            <td>X-Ray Scan</td>
            <td>2023-10-30</td>
            <td>3500</td>
            <!-- Add actions or links for this row -->
            <!-- <td>
                <a href="#" class="download"><ion-icon name="arrow-down-circle"></ion-icon></a>
                <a href="#" class="delete"><ion-icon name="trash"></ion-icon></a>
            </td> -->
        </tr>
        <tr>
            <td>3</td>
            <td>SL-003</td>
            <td>Mary Fernando</td>
            <td>Ultrasound</td>
            <td>2023-10-30</td>
            <td>2800</td>
            <!-- Add actions or links for this row -->
            <!-- <td>
                <a href="#" class="download"><ion-icon name="arrow-down-circle"></ion-icon></a>
                <a href="#" class "delete"><ion-icon name="trash"></ion-icon></a>
            </td> -->
        </tr>
        <tr>
            <td>4</td>
            <td>SL-004</td>
            <td>David Rajapakse</td>
            <td>CT Scan</td>
            <td>2023-10-30</td>
            <td>4500</td>
            <!-- Add actions or links for this row -->
            <!-- <td>
                <a href="#" class="download"><ion-icon name="arrow-down-circle"></ion-icon></a>
                <a href="#" class="delete"><ion-icon name="trash"></ion-icon></a>
            </td> -->
        </tr>
        <!-- You can add more rows with similar data as needed -->
    </tbody>
</table>


        </div>
    </div>
</body>
</html>