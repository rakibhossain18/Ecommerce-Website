<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="themes/light/light.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="themes/dark/dark.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="themes/bar/bar.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />

</head>

<body>
    <!-- Header Section Fixed Start -->
    <div class="header-section-fixed">
        <div class="logo-section">
            <a href="index.php"><img src="images/tech-zone-logo.png" class="logo_2" alt="logo"></a>
        </div>
        <div class="search-section_2">
            <input type="search" id="search-option_2" placeholder="Search by product name" value="">
            <a href="search.php" class="go-to-search-page_2" value="Search">Search</a>
        </div>
        <div class="top-right">
            <div class="top-right-2_2">
                <?php
                    if(!isset($_COOKIE['is_logged'])=='yes'){
                        echo'<a href="login.php">
                            <div class="wishlist-section">
                                <a href="login.php">
                                    <img src="images/wishlist-icon.png" alt="card_icon" class="">
                                </a>
                            </div>
                        </a>';
                    }
                    else{
                        echo'<a href="wishlist.php">
                            <div class="wishlist-section">
                                <img src="images/wishlist-icon.png" class="">
                            </div>
                        </a>';
                    }
                ?>
                <?php
                    if(!isset($_COOKIE['is_logged'])=='yes'){
                        echo'<a href="login.php">
                            <div class="cart-section">
                                <a href="login.php">
                                    <img src="images/cart-icon-hover.png" alt="card_icon" class="">
                                </a>
                            </div>
                        </a>';
                    }
                    else{
                        echo'<a href="cart.php">
                            <div class="cart-section">
                                <img src="images/cart-icon-hover.png" class="">
                            </div>
                        </a>';
                    }
                ?>
                <?php
                    if(!isset($_COOKIE['is_logged'])=='yes'){
                        echo'<a href="login.php">
                            <div class="login-section">
                                Login
                            </div>
                        </a>';
                        }
                    else{
                        echo'<a href="dashboard.php">
                            <div class="login-section">
                                <img src="images/user-icon.png" class="">
                            </div>
                        </a>';
                    }
                ?>
            
            </div>
        </div>
    </div>
    <!-- Header Section Fixed End -->
</body>
</html>
