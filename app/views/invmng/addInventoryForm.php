<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="refresh" content="600; url=http://localhost/labora/user/logout"> -->
    <link rel="stylesheet" href="<?php echo APPROOT.'/public/css/invmng/addInventoryForm.css'?>">
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

    <h1>Add a New Item to Inventory</h1>

    <?php if(isset($data['error'])): ?>
        <div class="error-message"><?php echo $data['error']; ?></div>
    <?php endif; ?>
    
    <form action="<?php echo URLROOT?>invmng/addInventoryForm" method="post" class="addinventory-form">
        <div class="form-group">
            <label for="Item-Type">Item Type</label>
            <select id="item-type" name="item-type" required>
                <option value="Chemical">Chemical</option>
                <option value="Laboratory Equipments">Laboratory Equipments</option>
            </select>
        </div>
        <!-- <div class="form-group">
            <label for="item-id">Item ID</label>
            <input type="text" id="item-id" name="item-id" required><br>  
            <span class="dateerr"><?php echo $data['dateerr'];?></span>  
        </div> -->
        <div class="form-group">
            <label for="item-name">Item Name</label>
            <input type="text" id="item-name" name="item-name" required><br> 
        </div>
        <div class="form-group">
            <label for="reorder-limit">Reorder Limit</label>
            <input type="text" id="reorder-limit" name="reorder-limit"><br> 
        </div>
    
        <div class="form-group">
            <label for="supplier-name">Suppliers</label>
            <select id="supplier-name" name="supplier-name" multiple>
                <option value="Supplier A">Supplier A</option>
                <option value="Supplier B">Supplier B</option>
            </select>
        </div>
        <button type="submit" class="button">Submit</button>
    </form>
    </div>
</body>
</html>