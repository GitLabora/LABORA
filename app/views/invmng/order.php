<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="refresh" content="600; url=http://localhost/labora/user/logout"> -->
    <link rel="stylesheet" href="<?php echo APPROOT.'/public/css/invmng/order.css'?>">
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
            <h3>Purchase Order</h3>
        </div>
        <div class="line"></div>
        <div class="searchbar">
            <input type="text" class="search" placeholder="Enter reference number">
            <a href="#" class="searchbtn">Search</a>
        </div>

        <div class="filter">
            <form action="#" method="post">
                <input type="date" class="from">
                <button type="submit" class="submit button">Filter</button>
            </form>
        </div>

        <div>
        <table>
        <thead>
            <tr>
                <th>Index</th>
                <th>Ref No</th>
                <th>Supplier</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>REF-001</td>
                <td>Supplier 1</td>
                <td><button type="submit" class="submit button">View</button></td>

                
                
            </tr>
            <tr>
                <td>2</td>
                <td>REF-002</td>
                <td>Supplier 1</td>
                <td><button type="submit" class="submit button">View</button></td>
               
                
            </tr>
            <tr>
                <td>2</td>
                <td>REF-002</td>
                <td>Supplier 1</td>
                <td><button type="submit" class="submit button">View</button></td>
             
              
            </tr>
            <tr>
                <td>2</td>
                <td>REF-002</td>
                <td>Supplier 1</td>
                <td><button type="submit" class="submit button">View</button></td>
               
            </tr>
            <tr>
                <td>2</td>
                <td>REF-002</td>
                <td>Supplier 1</td>
                <td><button type="submit" class="submit button">View</button></td>
              
             
            </tr>
            <tr>
                <td>2</td>
                <td>REF-002</td>
                <td>Supplier 1</td>
                <td><button type="submit" class="submit button">View</button></td>
               
            </tr>
            <tr>
                <td>2</td>
                <td>REF-002</td>
                <td>Supplier 1</td>
                <td><button type="submit" class="submit button">View</button></td>
                
             
            </tr>
            <!-- Add more rows as needed -->
        </tbody>
        </table>
        </div>
    </div>
</body>
</html>