<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <!-- Link to the CSS file -->
    <link rel="stylesheet" type="text/css" href="<?php echo APPROOT.'/public/css/invmngdashboard/form.css'?>">
</head>
<body>
    <div class="container">
        <h1>Add Product</h1>
        <form action="" >
            <div class="form-group">
                <label for="product-name">Product Name</label>
                <input id="product-name" class="form-control" type="text" name="productName" required placeholder="Enter name...">
            </div>

            <div class="form-group">
                <label for="product-id">Product ID</label>
                <input id="product-id" class="form-control" type="text" name="productID" required placeholder="Enter phone number...">
            </div>

            <div class="form-group">
                <label for="specialist">Supplier</label>
                <input id="specialist" class="form-control" type="text" name="specialist" required placeholder="Enter specialist...">
            </div>

            <div class="form-group">
                <label for="staff-type">Expiery date</label>
               
            </div>

            <input class="btn btn-success" type="submit" name="Submit" value="Add Medical Staff">
        </form>
    </div>
</body>
</html>
