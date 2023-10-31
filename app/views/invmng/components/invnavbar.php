<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="refresh" content="600; url=http://localhost/labora/user/logout"> -->
    <link rel="stylesheet" href="<?php echo APPROOT.'/public/css/invmng/components/nevbar.css'?>">
    <!-- static icons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!-- annimation icons -->
    <script src="https://cdn.lordicon.com/lordicon-1.1.0.js"></script>
    <title>Patient dashboard</title>
</head>
<body>
    <div class="container">
        <div class="navigation">
            <div class="logooo">
                <img src="<?php echo APPROOT.'/public/';?>img/Health_Care__2_-removebg-preview.png" alt="">
                <h2>Sahanya Labs</h2>
            </div>
            <ul>
                <li>
                    <a href="http://localhost/labora/invmng/product">
                    <span class="icon"><ion-icon name="arrow-back"></ion-icon></span>
                    <span class="title">Back</span>
                    </a>
                </li>
              
                
            </ul>
            <div class="logout">
                <a href="http://localhost/labora/user/logout" class="button">
                <span class="icon"><ion-icon name="log-out"></ion-icon></span>
                <span class="log">Log out</span>
                </a>
            </div>
            
        </div>


    <!-- Top bar -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
                <div class="chat">
                    <ion-icon name="chatbubble-ellipses"></ion-icon>
                </div>
                <div class="notification">
                    <ion-icon name="notifications"></ion-icon>
                </div>
                <div class="user">
                    <h4><?php echo $_SESSION['username'];?></h4>
                    <img src="/labora/public/img/invmng/user1.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</body>
</html>