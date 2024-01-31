<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="refresh" content="600; url=http://localhost/labora/user/logout"> -->
    <link rel="stylesheet" href="<?php echo APPROOT.'/public/css/invmng/supplier.css'?>">
    <script src="<?php echo APPROOT.'/public/js/invmng/invmng.js';?>"></script>
    <!-- static icons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!-- annimation icons -->
    <script src="https://cdn.lordicon.com/lordicon-1.1.0.js"></script>
    <title>Inventory Manager dashboard</title>
</head>
<body>
    <?php require_once 'components/nevbar.php' ?>
    <div class="container_1">

        <div class="tablename">
            <h3>Supplier Details</h3>
        </div>
        <div class="line"></div>
        <div class="searchbar">
            <input type="text" class="search" placeholder="Enter Suplier">
            <a href="#" class="searchbtn">Search</a>
        </div>

        <div>
        <table>
        <thead>
            <tr>
                <th>Index</th>
                <th>Supplier ID</th>
                <th>Supplier Name</th>
                <th>Contact No</th>
                <th>Address</th>
                <th>Email</th>
                <th>Supplier Items</th>
                
            </tr>
        </thead>
        <tbody>
        <tr>
        <td>1</td>
        <td>101</td>
        <td>ABC Supplies</td>
        <td>+94 -123-4567</td>
        <td>123 Main St, City, ST</td>
        <td>john.smith@email.com</td>
        <td><button type="submit" class="submit button">View</button></a>
                </td>
    </tr>
 
        </tbody>
        </table>
        </div>
    </div>
</body>
</html>