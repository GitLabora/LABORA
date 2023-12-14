<!DOCTYPE html>
<html>
<head>
    <title>Supplier dashboard</title>
    <link rel="stylesheet" href="<?php echo APPROOT.'/public/css/supplier/dashboardSupplier.css'?>">
    <script src ="https://use.fontawsome.com/0c7a3095b5.js"></script>
</head>

<body>
    <div id = "dashboardMainContainer">
        <div class = "dashboard_sidebar">
            <h3 class="dashboard_logo">Labora</h1>
            <div class="dashboard_sidebar_user">
                <img src ="img/Supplier/user2.jpeg" alt="user image"/>
                <span>Mr.Silva</span>
            </div>
            <div class="dashboard_sidebar_menu">
                <ul class="dashboard_menu_list">
                    <li>
                        <a href="dashboardSupplier.html"><i class="fa fa-dashboard"></i>Dashboard
                    </li>
                    <li> 
                        <a href="Orderdetails.html"><i class="fa fa-dashboard"></i>Order details
                    </li>
                    <li>
                        <a href="Quotation approval details.html"><i class="fa fa-dashboard"></i>Quotation approval details
                    </li>
                    <li>
                        <a href="Catalogs.html"><i class="fa fa-dashboard"></i>Catalog</a>
                    </li>
                </ul>
            </div>    
        </div>            
        <div class = "dashboard_content_container">
            <div class="dashboard_topNav">
                <a href=""><i class="fa fa-navicon"></i></a>
                <a href="" id="logoutBtn"><i class="fa-solid fa-power-off"></i>Log Out</i></a>
            </div>
            <div class="dashboard_content">
                <div class="dashboard_content_main"></div>
            </div>
        </div>
    </div>

</body>
</html>