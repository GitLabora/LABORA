<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="refresh" content="600; url=http://localhost/labora/user/logout"> -->
    <link rel="stylesheet" href="<?php echo APPROOT.'/public/css/admindashboard/medicaltest.css'?>">
    <script src="<?php echo APPROOT.'/public/js/admindashboard/admin.js';?>"></script>
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
            <h3>Medical Tests</h3>
        </div>
        <div class="line"></div>
        <div class="searchbar">
            <input type="text" class="search" placeholder="Enter test name">
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
                    <th>Test ID</th>
                    <th>Test Name</th>
                    <th>Short Name</th>
                    <th>Test Type</th>
                    <th>No. of Tests</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>SL-001</td>
                    <td>Blood Test</td>
                    <td>Blood</td>
                    <td>Medical</td>
                    <td>100</td>
                    <!-- Add actions or links for this row -->
                    <!-- <td>
                        <a href="#" class="download"><ion-icon name="arrow-down-circle"></ion-icon></a>
                        <a href="#" class="delete"><ion-icon name="trash"></ion-icon></a>
                    </td> -->
                </tr>
                <tr>
                    <td>2</td>
                    <td>SL-002</td>
                    <td>X-Ray Scan</td>
                    <td>X-Ray</td>
                    <td>Medical</td>
                    <td>50</td>
                    <!-- Add actions or links for this row -->
                    <!-- <td>
                        <a href="#" class="download"><ion-icon name="arrow-down-circle"></ion-icon></a>
                        <a href="#" class="delete"><ion-icon name="trash"></ion-icon></a>
                    </td> -->
                </tr>
                <tr>
                    <td>3</td>
                    <td>SL-003</td>
                    <td>Ultrasound</td>
                    <td>USG</td>
                    <td>Medical</td>
                    <td>75</td>
                    <!-- Add actions or links for this row -->
                    <!-- <td>
                        <a href="#" class="download"><ion-icon name="arrow-down-circle"></ion-icon></a>
                        <a href="#" class="delete"><ion-icon name="trash"></ion-icon></a>
                    </td> -->
                </tr>
                <tr>
                    <td>4</td>
                    <td>SL-004</td>
                    <td>CT Scan</td>
                    <td>CT</td>
                    <td>Medical</td>
                    <td>30</td>
                    <!-- Add actions or links for this row -->
                    <!-- <td>
                        <a href="#" class="download"><ion-icon name="arrow-down-circle"></ion-icon></a>
                        <a href="#" class="delete"><ion-icon name="trash"></ion-icon></a>
                    </td> -->
                </tr>
                <tr>
                    <td>5</td>
                    <td>SL-005</td>
                    <td>ECG</td>
                    <td>ECG</td>
                    <td>Medical</td>
                    <td>45</td>
                    <!-- Add actions or links for this row -->
                    <!-- <td>
                        <a href="#" class="download"><ion-icon name="arrow-down-circle"></ion-icon></a>
                        <a href="#" class="delete"><ion-icon name="trash"></ion-icon></a>
                    </td> -->
                </tr>
                <tr>
                    <td>6</td>
                    <td>SL-006</td>
                    <td>MRI</td>
                    <td>MRI</td>
                    <td>Medical</td>
                    <td>25</td>
                    <!-- Add actions or links for this row -->
                    <!-- <td>
                        <a href="#" class="download"><ion-icon name="arrow-down-circle"></ion-icon></a>
                        <a href="#" class="delete"><ion-icon name="trash"></ion-icon></a>
                    </td> -->
                </tr>
                <!-- Add more rows with similar data as needed -->
            </tbody>
        </table>

        </div>
    </div>
</body>
</html>