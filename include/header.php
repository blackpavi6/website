<?php 
session_start();
//include "db_conn.php";
$page="home";
?>
    
    <link rel="stylesheet" type="text/css" href="include/head.css">

    <header>

         <div class="top-bar">
               
                <ul> 
                                                
                        <?php if (isset($_SESSION['email']) && isset($_SESSION['fname'])
                            && isset($_SESSION['lname'])) {
                        ?>  
                            <li><div class="togglemenu"><a href="#" class="nav-link dropdown-toggle flex" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php echo "My Account " ?> &dtrif;
                            </a></div>
                                <ul>
                                    <img src="images/profile-user.png" alt="profile">
                                    <h6><?php echo $_SESSION['fname'] ?></h6>
                                    <h6><?php echo $_SESSION['lname'] ?></h6>
                                    <hr>
                                    <div class="drop">
                                    <li><a class="dropdown-item" href="shopping_cart.php">My Cart</a></li>
                                    <li><a class="dropdown-item" href="#">My Wishlist</a></li>
                                    </div>
                                    <hr>
                                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                                </ul>
                            </li>
                            
                            
                
                            
                            
                    <?php }else{?>
                            <li><a href="signin_page.php" class="flex-c-m trans-01 p-lr-25" id="account">
                                <?php echo "Login" ?>
                            </a></li>
                    <?php }?>
                        <li><a href="#" class="flex-c-m trans-04 p-lr-25">
                            <?php echo "Help & FAQs" ?>
                        </a></li>
    
                        <li><a href="#" class="flex-c-m trans-04 p-lr-25">
                            <?php echo "EN" ?>
                        </a></li>
    
                        <li><a href="#" class="flex-c-m trans-04 p-lr-25">
                            <?php echo "LKR" ?></li>
                        </a>
            
                </ul>
        </div>

        <!-- Menu bar -->
        <div class="wrap-menu">
                <nav class="limiter-menu container">
    
                    <!-- Logo -->
                    <a href="#" class="logo">
                        <img src="images/oxygensport_logo.png" alt="IMG-LOGO">
                    </a>
                        
                    <!-- Menu -->
                    <div class="menu">
                        <ul class="main-menu">
                            <li <?php if($page == 'home'){ echo 'class = "active"';} ?> >
                                <a href="index.php">Home</a>
                            </li>   
    
                            <li <?php if($page == 'shop'){ echo 'class = "active"';} ?>>
                                <a href="shopping_page.php">Shop</a>
                            </li>
    
                            <li <?php if($page == 'blog'){ echo 'class = "active"';} ?>>
                                <a href="blog.php">Blog</a>
                            </li>
    
                            <li <?php if($page == 'about'){ echo 'class = "active"';} ?>>
                                <a href="about.php">About</a>
                            </li>
    
                            <li <?php if($page == 'contact'){ echo 'class = "active"';} ?>>
                                <a href="contact.php">Contact</a>
                            </li>
                        </ul>
                    </div>
    
                    <!-- Icon header -->
                    <div class="wrap-icon-header">
                        <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
                            <!-- <i class="zmdi zmdi-search"></i> -->
                            <iconify-icon icon="zmdi:search"></iconify-icon>
    
                        </div>
                        <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" data-notify="2">
                            <a href="shopping_cart.php">
                            <iconify-icon icon="zmdi:shopping-cart"<?php if($page == 'cart'){ echo 'id = "icon-active"';} ?>></iconify-icon>
                            <!-- <i class="zmdi zmdi-shopping-cart" <?php if($page == 'cart'){ echo 'id = "icon-active"';} ?>></i> -->
                        </div>
    
                        <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti"
                           data-notify="0">
                           <iconify-icon icon="zmdi:favorite-outline"></iconify-icon>
                            <!-- <i class="zmdi zmdi-favorite-outline"></i> -->
                        </a>
                    </div>
                </nav>
            </div>

     </header>
     <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
