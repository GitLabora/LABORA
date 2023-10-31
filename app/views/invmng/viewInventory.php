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
<?php require_once 'components/dashnavbar.php' ?>
    <div class="container_1">

        <div class="tablename">
            <h3>Inventory Item Details</h3>
        </div>
        <div class="line"></div>

        <div class="cards">
                    <div class="card-single">
                        <div>
                            <span>ADD</span>
                            <h1>Create Record</h1>
                        </div>
                        <div>
                            
                        </div>
                    </div>
                    <div class="card-single">
                        <div>
                            <span>NUMBER OF PASSENGERS</span>
                            <h1>250</h1>
                        </div>
                        <div>
                           
                        </div>
                    </div>
                </div>

        <div>

        <table>
        <thead>
            <tr>
                <th>Index</th>
                <th>Item ID</th>
                <th>Item Name</th>
                <th>Quantity in Stock</th>
                <th>Reorder Level</th>
                <th>Purchase Price</th>
                <th>Item List</th>
            </tr>
        </thead>
        <tbody>
        <tr>
        <td>1</td>
        <td>1001</td>
        <td>Laptop - Model A</td>
        <td>25</td>
        <td>10</td>
        <td>$800</td>
        <td><button type="submit" class="submit button">View</button></a>
                </td>
    </tr>
    <tr>
        <td>2</td>
        <td>1002</td>
        <td>Desktop PC - Model B</td>
        <td>15</td>
        <td>20</td>
        <td>$1200</td>
        <td><button type="submit" class="submit button">View</button></a>
                </td>
    </tr>
    <tr>
        <td>3</td>
        <td>1003</td>
        <td>Monitor - 27-inch</td>
        <td>30</td>
        <td>15</td>
        <td>$250</td>
        <td><button type="submit" class="submit button">View</button></a>
                </td>
    </tr>
    <tr>
        <td>4</td>
        <td>1004</td>
        <td>Keyboard - Wireless</td>
        <td>50</td>
        <td>30</td>
        <td>$30</td>
        <td><button type="submit" class="submit button">View</button></a>
                </td>
    </tr>
            <!-- Add more rows as needed -->
        </tbody>
        </table>
        </div>
    </div>
</body>
</html>