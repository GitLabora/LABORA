<!DOCTYPE html>
<html>
<head>
    <title>Lab assistant dashboard</title>
    <link rel="stylesheet" href="<?php echo APPROOT.'/public/css/Labassistant dashboard/dashboardLabassistant.css'?>">
    <script src ="https://use.fontawsome.com/0c7a3095b5.js"></script>
</head>

<body>
    <div id = "dashboardMainContainer">
        <div class = "dashboard_sidebar">
            <h3 class="dashboard_logo">Labora</h1>
            <div class="dashboard_sidebar_user">
                <img src ="public/img/user1.jpeg" alt="user image"/>
                <span>Mr.Gamage</span>
            </div>
            <div class="dashboard_sidebar_menu">
                <ul class="dashboard_menu_list">
                    <li>
                        <a href="dashboardLabassistant.html"><i class="fa fa-dashboard"></i>Dashboard
                    </li>
                    <li> 
                        <a href="Patient's_details.html"><i class="fa fa-dashboard"></i>Patient details
                    </li>
                    <li>
                        <a href="ReturnItems.html"><i class="fa fa-dashboard"></i>Return Items
                    </li>
                    <li>
                        <a href="Validations.html"><i class="fa fa-dashboard"></i>Validations</a>
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