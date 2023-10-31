<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="refresh" content="600; url=http://localhost/labora/user/logout"> -->
    <link rel="stylesheet" href="<?php echo APPROOT.'/public/css/invmng/viewInventory.css'?>">
    <script src="<?php echo APPROOT.'/public/js/invmng/invmng.js';?>"></script>
    <!-- static icons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!-- annimation icons -->
    <script src="https://cdn.lordicon.com/lordicon-1.1.0.js"></script>
    <title>Inventory Manager dashboard</title>
</head>
<body>
<?php require_once 'components/invnavbar.php' ?>
    <div class="container_1">

        <div class="tablename">
            <h3>Inventory Item Details</h3>
        </div>
        <div class="line"></div>

        <div class="detailList">
            <h4>Item Name</h4><h5>Item Name</h5>
        </div>

        <div class="detailList">
            <h4>Re-Order Limit</h4><h5>Item Name</h5>
        </div>


        <table>
        <thead>
            <tr>
                <th>Index</th>
                <th>Sub ID</th>
                <th>Supplier</th>
                <th>Quantity in Stock</th>
                <th>Date Added</th>
                <th>Expiery Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <tr>
        <td>1</td>
        <td>11A</td>
        <td>Supplier A</td>
        <td>12</td>
        <td>2022-12-1</td>
        <td>2024-12-1</td>
        <td><a href="#" class="download"><ion-icon name="add"></ion-icon>
        <a href="#" class="download"><ion-icon name="pencil">
        <a href="#" class="download">
        </ion-icon><ion-icon name="trash"></ion-icon>
                </td>
                
    </tr>
    <tr>
        <td>2</td>
        <td>11B</td>
        <td>Supplier D</td>
        <td>57</td>
        <td>2022-12-1</td>
        <td>2025-12-1</td>
        <td><a href="#" class="download"><ion-icon name="add"></ion-icon>
        <a href="#" class="download"><ion-icon name="pencil"></ion-icon>
        <a href="#" class="download"><ion-icon name="trash"></ion-icon>
                </td>
    </tr>
   
            <!-- Add more rows as needed -->
        </tbody>
        </table>
        </div>
    </div>
</body>
</html>