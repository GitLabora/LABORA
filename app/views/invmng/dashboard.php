<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - Inventory Manager</title>
    <link rel="stylesheet" type="text/css" href="<?php echo APPROOT.'/public/css/invmngdashboard/dashboard.css'?>">
    <script src="https://kit.fontawesome.com/594166b593.js" crossorigin="anonymous"></script>
</head>

<body>
    <div id = "dashboardMainContainer">
        <div class = "dashboard_sidebar" id="dashboard_sidebar">
            <h3 class="dashboard_logo" id="dashboard_logo">Labora</h1>
            <div class="dashboard_sidebar_user">
                <img src ="images/user/im1.jpeg" alt="user image" id="userImage"/>
                <span id="userName">Perera</span>
            </div>
            <div class="dashboard_sidebar_menu">
                <ul class="dashboard_menu_list">
                    <li class="menuActive">
                        <a href="dashboardInventory.html" class="menuActive"><i class="fa fa-dashboard"></i><span class="menuText">Dashboard</span>
                    </li>
                    <li> 
                        <a href="product.html"><i class="fa-solid fa-flask"></i><span class="menuText">Product</span> 
                    </li>
                    <li>
                        <a href="supplier.html"><i class="fa-solid fa-users"></i><span class="menuText">Supplier</span> 
                    </li>
                    <li>
                        <a href="order.html"><i class="fa-solid fa-cart-shopping"></i><span class="menuText">Purchase Order</span></a>
                    </li>
                </ul>
            </div>    
        </div>            
        <div class = "dashboard_content_container" id="dashboard_content_container">
            <div class="dashboard_topNav">
                <a href="" id="toggleBtn"><i class="fa-solid fa-bars"></i></a>
                <a href="" id="logoutBtn"><i class="fa-solid fa-right-to-bracket"></i>Log Out</a>
            </div>
            <div class="dashboard_content">
                <div class="dashboard_content_main"></div>
            </div>
        </div>
    </div>

<script>

    var sidebarIsOpen = true;

    toggleBtn.addEventListener('click',(event) => {
        event.preventDefault();

        if(sidebarIsOpen){
            sidebarIsOpen = false;
            dashboard_sidebar.style.width = '5%';
            dashboard_content_container.style.width = '95%';
            dashboard_logo.style.fontSize = '20px';
            userImage.style.width = '40px';
            userName.style.fontSize = '12px';

            menuIcons = document.getElementsByClassName('menuText');
            for(var i=0; i < menuIcons.length; i++){
                menuIcons[i].style.display = 'none';
            }

            document.getElementsByClassName('dashboard_menu_list')[0].style.textAlign = 'center';
        }
        else{
            dashboard_sidebar.style.width = '15%';
            dashboard_sidebar.style.transition = '0.3s all';
            dashboard_content_container.style.width = '85%';
            dashboard_logo.style.fontSize = '40px';
            userImage.style.width = '60px';
            userName.style.fontSize = '20px';

            menuIcons = document.getElementsByClassName('menuText');
            for(var i=0; i < menuIcons.length; i++){
                menuIcons[i].style.display = 'inline-block';
            }

            document.getElementsByClassName('dashboard_menu_list')[0].style.textAlign = 'left';
            sidebarIsOpen = true;
        }
       
    });
</script>

</body>
</html>