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
        <th>Purchase Order ID</th>
        <th>Supplier Name</th>
        <th>Order Date</th>
        <th>Expected Delivery Date</th>
        <th>Total Cost</th>
        <th>Status</th>
        <th>Admin Approval</th>
        <th>Items Ordered</th>
        
        <th>Invoices</th>
        
    </tr>
        </thead>
        <tbody>
        
    <tr>
        <td>PO-001</td>
        <td>ABC Electronics</td>
        <td>2023-10-15</td>
        <td>2023-10-30</td>
        <td>$5,000</td>
        <td>Pending</td>
        <td>Pending</td>
        
        <td><button type="submit" class="submit button">View</button></a>
                </td>
       
       
        <td><a href="link-to-invoice-001.pdf">Invoice 001</a></td>
        
    </tr>
    <tr>
        <td>PO-002</td>
        <td>XYZ Supplies</td>
        <td>2023-11-05</td>
        <td>2023-11-20</td>
        <td>$1,500</td>
        <td>Confirmed</td>
        <td>Approved</td>
        
        <td><button type="submit" class="submit button">View</button></a>
                </td>
       
       
        <td><a href="link-to-invoice-002.pdf">Invoice 002</a></td>
    </tr>
            
            <!-- Add more rows as needed -->
        </tbody>
        </table>
        </div>
    </div>
</body>
</html>