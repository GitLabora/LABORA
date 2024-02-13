<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="refresh" content="600; url=http://localhost/labora/user/logout"> -->
    <link rel="stylesheet" href="<?php echo APPROOT.'/public/css/invmng/itemDetails.css'?>">
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

        
        <div class="add">  
            <a href="http://localhost/labora/invmng/addInventoryForm" class="addbtn"><ion-icon name="add"></ion-icon> Add a New Item</a>
        </div>
        
            <table>
                <thead>
                    <tr>
                        <th>Item ID</th>
                        <th>Item Name</th>
                        <th>Reorder Level</th>
                        <th>Quantity</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($item_details as $item): ?>
                        <tr>
                            <td><?php echo $item['Item_Id']; ?></td>
                            <td><?php echo $item['Item_Name']; ?></td>
                            <td><?php echo $item['Reorder_Level']; ?></td>
                            <td></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <table>
                <thead>
                    <tr>
                        <th>Batch ID</th>
                        <th>Supplier ID</th>
                        <th>Added Date</th>
                        <th>Expired Date</th>
                        <th>Quantity</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php  
                foreach ($data as $row) {
                    echo '<tr>
                        <td>'.$row['batch_id'].'</td>
                        <td>'.$row['supplier_id'].'</td>
                        <td>'.$row['added_date'].'</td>
                        <td>'.$row['expired_date'].'</td>
                        <td>'.$row['quantity'].'</td>
                        <td><a href="#" class="edit" >Edit</a>
                        <td><a href="#" class="del" >Delete</a>
                    </td>
                    </tr>';
                }?>
                </tbody>
            </table>

                
    </tr>
        </tbody>
        </table>
        </div>
    </div>
   
</body>
</html>