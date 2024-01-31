<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="refresh" content="600; url=http://localhost/labora/user/logout"> -->
    <link rel="stylesheet" href="<?php echo APPROOT.'/public/css/invmng/product.css'?>">
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
            <h3>Inventory Item Details</h3>
        </div>
        <div class="line"></div>

        <div class="searchbar">
            <input type="text" class="search" placeholder="Enter Item">
            <a href="#" class="searchbtn">Search</a>
        </div>

        <div class="filter">
            <form action="#" method="post">
            <select id="item-type" name="item-type" placeholder="Select type">
                <option value="Chemical">Chemical</option>
                <option value="Laboratory Equipments">Laboratory Equipments</option>
            </select>
               
                <button type="submit" class="submit button">Filter</button>
            </form>
        </div>

        <div class="add">  
            <a href="http://localhost/labora/invmng/addInventoryForm" class="addbtn"><ion-icon name="add"></ion-icon> Add a New Item</a>
        </div>

        <div>
        <table>
        <thead>
            <tr>
         
                <th>Item ID</th>
                <th>Item Name</th>
                <th>Reorder Level</th>
                <th>Actions</th>
            </tr>
        </thead>
       
        <tbody>

         <?php
           // Sort the array based on Item_Id
            usort($data, function($a, $b) {
                return $a['Item_Id'] - $b['Item_Id'];
            });

            // Output the sorted array
            foreach ($data as $row) {
                echo '<tr>
                    <td>'.$row['Item_Id'].'</td>
                    <td>'.$row['Item_Name'].'</td>
                    <td>'.$row['Reorder_Level'].'</td>
                    <td><a href="http://localhost/labora/invmng/itemDetails/'.$row['Item_Id'].'" class="view" >View</a>
                    <a href="#" class="edit" >Edit</a>
                    <a href="http://localhost/labora/invmng/deleteItem/'.$row['Item_Id'].'" class="del">Delete</a>
                   </td>
                </tr>';
            }

            ?> 
            
       
       
        </tbody>
        </table>
        </div>
    </div>
</body>
</html>