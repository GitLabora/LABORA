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
            <img src =<?php echo APPROOT.'/public/img/invmng/im1.jpeg';?> alt="user image" id="userImage"/>
                <span id="userName">Perera</span>
            </div>
            <div class="dashboard_sidebar_menu">
                <ul class="dashboard_menu_list">
                    <li class="menuActive">
                        <a href="<?php echo APPROOT.'/invmng/dashboard.php'?""> class="menuActive"><i class="fa fa-dashboard"></i><span class="menuText">Dashboard</span>
                    </li>
                    <li> 
                        <a href="<?php echo APPROOT.'/invmng/product.php'?>"><i class="fa-solid fa-flask"></i><span class="menuText">Product</span> 
                    </li>
                    <li>
                        <a href="<?php echo APPROOT.'/invmng/supplier.php'?>"><i class="fa-solid fa-users"></i><span class="menuText">Supplier</span> 
                    </li>
                    <li>
                        <a href="<?php echo APPROOT.'/invmng/order.php'?>"><i class="fa-solid fa-cart-shopping"></i><span class="menuText">Purchase Order</span></a>
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
                <div class="dashboard_content_main">
                    <section class="main">          
                        <section class="details">
        
                            <div class="Detail-List">

                                <div class="header">
                                    <h1>List of Products</h1>
                                    <button class="add-user-button">+Add Product</button>
                                </div>
                                                                    
                                <table class="table">
            
                                    <thead id="table-head">
                
                                        <tr>
                
                                        <th>Product Id</th>
                                        <th>Name</th>
                                        <th>Stock</th>
                                        <th>Descrition</th>
                                        <th>Suppliers</th>
                                        <th>Created By</th>
                                        <th>Action</th>
                
                                        </tr>
                
                                        <tbody>
                    
                                            <tr class="active">
                                                <td>C01</td>
                                                <td>saman</td>
                                                <td>Lab Assistant</td>
                                                <td>Received</td>
                                                <td>Astrox</td>
                                                <td>Received</td>
                                                <td><button>
                                                    <a href=""><i class="fa-solid fa-pen-to-square"></i></i><span class="menuText"></span></a>
                                                </button>
                                                <button>
                                                    <a href=""><i class="fa-solid fa-trash"></i></i><span class="menuText"></span></a>
                                                </button>
                                                </td>
                                            </tr>
                    
                                            <tr class="active">
                                                <td>D02</td>
                                                <td>Zoy</td>
                                                <td>Astrox</td>
                                                <td>Received</td>
                                                <td>Astrox</td>
                                                <td>Received</td>
                                                <td><button>
                                                    <a href=""><i class="fa-solid fa-pen-to-square"></i></i><span class="menuText"></span></a>
                                                </button>
                                                <button>
                                                    <a href=""><i class="fa-solid fa-trash"></i></i><span class="menuText"></span></a>
                                                </button>
                                                </td>
                                            </tr>
                    
                                            <tr class="active">
                                                <td>E03</td>
                                                <td>Syringe</td>
                                                <td>MLT</td>
                                                <td>Not Received</td>
                                                <td>Astrox</td>
                                                <td>Received</td>
                                                <td><button>
                                                    <a href=""><i class="fa-solid fa-pen-to-square"></i></i><span class="menuText"></span></a>
                                                </button>
                                                <button>
                                                    <a href=""><i class="fa-solid fa-trash"></i></i><span class="menuText"></span></a>
                                                </button>
                                                </td>
                                            </tr>
                    
                                            <tr class="active">
                                                <td>F04</td>
                                                <td>Volumetric Flask</td>
                                                <td>Aston</td>
                                                <td>Not Received</td>
                                                <td>Astrox</td>
                                                <td>Received</td>
                                                <td><button>
                                                    <a href=""><i class="fa-solid fa-pen-to-square"></i></i><span class="menuText"></span></a>
                                                </button>
                                                <button>
                                                    <a href=""><i class="fa-solid fa-trash"></i></i><span class="menuText"></span></a>
                                                </button>
                                                </td>
                                            </tr>
                    
                                        </tbody>
                                    </thead>
            
                                </table>
                            </div>
            
                        </section>
                    </section>
                </div>
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