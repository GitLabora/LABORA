<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="refresh" content="600; url=http://localhost/labora/user/logout"> -->
    <link rel="stylesheet" href="<?php echo APPROOT.'/public/css/admin/userAccount.css'?>">
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
            <h3>User Accounts</h3>
        </div>
        <div class="line"></div>
        <div class="searchbar">
            <input type="text" class="search" placeholder="Enter user name">
            <a href="#" class="searchbtn">Search</a>
        </div>

        <div class="filter">
            <form action="#" method="post">
                <!-- <input type="text" class="test-type" placeholder="Enter test type"> -->
                <select type="text" class="test-type">
                    <option value="option1">All</option>
                    <option value="option2">Supplier</option>
                    <option value="option3">MLT</option>
                    <option value="option2">Lab Assistant</option>
                    <option value="option2">Inventory Manager</option>
                    <option value="option2">Receptionist</option>

                </select>
                <!-- <input type="date" class="from">
                <input type="date" class="to"> -->
                <button type="submit" class="submit button">Filter</button>
            </form>
        </div>
        <div class="add">          
            <a href="http://localhost/labora/admin/addUser" class="addbtn"><ion-icon name="add"></ion-icon> Add User</a>
         </div>
         
        <table>
            <thead>
                <tr>
                    <th>Index</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Date Of Birth</th>
                    <th>Address</th>
                    <th>gender</th>
                    <th>role</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <?php
                $reversedArray = array_reverse($data, true);
                foreach ($reversedArray as $row) {
                    echo '<tr>
                    <td>'.$row['id'].'</td>
                    <td>'.$row['full_name'].'</td>
                    <td>'.$row['email'].'</td>
                    <td>'.$row['phone'].'</td>
                    <td>'.$row['dob'].'</td>
                    <td>'.$row['address'].'</td>
                    <td>'.$row['gender'].'</td>
                    <td>'.$row['role'].'</td>
                    <td><a href="#" class="cancel">Edit</a><a href="http://localhost/labora/admin/deleteEmployee/'.$row['email'].'" class="cancel">Delete</a></td>
                </tr>';
                }
                ?>
                <!-- You can add more rows with similar data as needed -->
            </tbody>
        </table>
        </div>
    </div>
</body>
</html>