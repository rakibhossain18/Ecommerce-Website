<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">


<head>
<title>TechZone</title>
</head>
<body>
    <!-- Header Section Fixed Start -->
    <?php include 'header.php';?>
    <!-- Header Section Fixed End -->


    <!-- Catagory Section Start -->
    <?php include 'nav.php';?>
    <!-- Catagory Section End -->


    <!-- Slider Section Start -->
    <div class="slider-section">
        <div class="slider">

            <div class="slider-wrapper theme-default dark">
                <div id="slider" class="nivoSlider" style="width: 94%;margin: 0px auto;">
                    <a href=""><img src="images/banner/1.jpg" data-thumb="images/toystory.jpg" alt="" /></a>
                    <a href=""><img src="images/banner/2.jpg" data-thumb="images/up.jpg" alt="" /></a>
                    <a href=""><img src="images/banner/3.jpg" data-thumb="images/walle.jpg" alt="" /></a>
                    <!-- <a href=""><img src="images/banner/4.jpg" data-thumb="images/nemo.jpg" alt="" /></a> -->
                    <!-- <a href=""><img src="images/banner/5.jpg" data-thumb="images/nemo.jpg" alt="" /></a> -->
                    <!-- <a href=""><img src="images/banner/6.jpg" data-thumb="images/nemo.jpg" alt="" /></a> -->
                    <!-- <a href=""><img src="images/banner/7.jpg" data-thumb="images/nemo.jpg" alt="" /></a> -->
                </div>
                <div id="htmlcaption" class="nivo-html-caption">
                    <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>.
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Section End -->

    <!-- Content Section Start -->
    <!-- Arduino -->
    <div class="content-section">
        <div class="catagory-arduino">
            <div class="arduino-heading-box">
                <div class="arduino-heading">
                    <span>Arduino</span>
                </div>
                <a class="arduino-seemore" href="catagory.php?id='Arduino' ">See More</a>
            </div>
            <hr class="arduino-hr">
            <div class="arduino-details">
                <?php
                    $sql="select * from products where Category='Arduino' ORDER BY `products`.`ID` DESC limit 5";
                    $run=mysqli_query($con,$sql);
                    while($row=mysqli_fetch_array($run)){
                ?>
                <div class="arduino-1">
                    <a href="product-details.php?id=<?php echo $row['ID'] ;?> ">
                        <div class="product">
                            <img src="admin_panel/uploads/images/<?php echo $row['Prodict_Image'];?>" alt="" height="50%" width="70%">
                            <p class="arduino-1-name" style="height: 38px;"><b><?php echo $row['Product_Name']; ?></b></p>
                            <p class="arduino-1-made">Made in <?php echo $row['Supplier']; ?></p>
                            <p class="arduino-1-price"><b><?php echo $row['Product_Price']; ?> Tk</b></p>
                        </div>
                    </a>
                </div>
                <?php    
                    }
                ?>
            </div>

        </div>
        <!-- Robotics -->
        <div class="catagory-robotics">
            <div class="arduino-heading-box">
                <div class="arduino-heading">
                    <span>Robotics</span>
                </div>
                <a class="arduino-seemore" href="catagory.php?id='Robotics' ">See More</a>
            </div>
            <hr class="arduino-hr">
            <div class="arduino-details">
                <?php
                    $sql="select * from products where Category='Robotics' ORDER BY `products`.`ID` DESC limit 5";
                    $run=mysqli_query($con,$sql);
                    while($row=mysqli_fetch_array($run)){
                ?>
                <div class="arduino-1">
                    <a href="product-details.php?id=<?php echo $row['ID'] ;?> ">
                        <div class="product">
                            <img src="admin_panel/uploads/images/<?php echo $row['Prodict_Image'];?>" alt="" height="50%" width="70%">
                            <p class="arduino-1-name" style="height: 38px;"><b><?php echo $row['Product_Name']; ?></b></p>
                            <p class="arduino-1-made">Made in <?php echo $row['Supplier']; ?></p>
                            <p class="arduino-1-price"><b><?php echo $row['Product_Price']; ?> Tk</b></p>
                        </div>
                    </a>
                </div>
                <?php    
                    }
                ?>
        
            </div>
        </div>
        <!-- Raspberry-Pi -->
        <div class="catagory-raspberry">
            <div class="arduino-heading-box">
                <div class="arduino-heading">
                    <span>Raspberry-Pi</span>
                </div>
                <a class="arduino-seemore" href="catagory.php?id='Raspberry-Pi' ">See More</a>
            </div>
            <hr class="arduino-hr">
            <div class="arduino-details">
                <?php
                    $sql="select * from products where Category='Raspberry-Pi' ORDER BY `products`.`ID` DESC limit 5";
                    $run=mysqli_query($con,$sql);
                    while($row=mysqli_fetch_array($run)){
                ?>
                <div class="arduino-1">
                    <a href="product-details.php?id=<?php echo $row['ID'] ;?> ">
                        <div class="product">
                            <img src="admin_panel/uploads/images/<?php echo $row['Prodict_Image'];?>" alt="" height="50%" width="70%">
                            <p class="arduino-1-name" style="height: 38px;"><b><?php echo $row['Product_Name']; ?></b></p>
                            <p class="arduino-1-made">Made in <?php echo $row['Supplier']; ?></p>
                            <p class="arduino-1-price"><b><?php echo $row['Product_Price']; ?> Tk</b></p>
                        </div>
                    </a>
                </div>
                <?php    
                    }
                ?>
            </div>
        </div>
        <!-- Starter -->
        <div class="catagory-starter">
            <div class="arduino-heading-box">
                <div class="arduino-heading">
                    <span>Starter</span>
                </div>
                <a class="arduino-seemore" href="catagory.php?id='Starter' ">See More</a>
            </div>
            <hr class="arduino-hr">
            <div class="arduino-details">
                <?php
                    $sql="select * from products where Category='Starter' ORDER BY `products`.`ID` DESC limit 5";
                    $run=mysqli_query($con,$sql);
                    while($row=mysqli_fetch_array($run)){
                ?>
                <div class="arduino-1">
                    <a href="#">
                        <div class="arduino-1">
                    <a href="product-details.php?id=<?php echo $row['ID'] ;?> ">
                        <div class="product">
                            <img src="admin_panel/uploads/images/<?php echo $row['Prodict_Image'];?>" alt="" height="50%" width="70%">
                            <p class="arduino-1-name" style="height: 38px;"><b><?php echo $row['Product_Name']; ?></b></p>
                            <p class="arduino-1-made">Made in <?php echo $row['Supplier']; ?></p>
                            <p class="arduino-1-price"><b><?php echo $row['Product_Price']; ?> Tk</b></p>
                        </div>
                    </a>
                </div>
                    </a>
                </div>
                <?php    
                    }
                ?>
            </div>
        </div>
        <!-- Wireless -->
        <div class="catagory-new">
            <div class="arduino-heading-box">
                <div class="arduino-heading">
                    <span>Wireless</span>
                </div>
                <a class="arduino-seemore" href="catagory.php?id='Wireless' ">See More</a>
            </div>
            <hr class="arduino-hr">
            <div class="arduino-details">
                <?php
                    $sql="select * from products where Category='Wireless' ORDER BY `products`.`ID` DESC limit 5";
                    $run=mysqli_query($con,$sql);
                    while($row=mysqli_fetch_array($run)){
                ?>
                <div class="arduino-1">
                    <a href="product-details.php?id=<?php echo $row['ID'] ;?> ">
                        <div class="product">
                            <img src="admin_panel/uploads/images/<?php echo $row['Prodict_Image'];?>" alt="" height="50%" width="70%">
                            <p class="arduino-1-name" style="height: 38px;"><b><?php echo $row['Product_Name']; ?></b></p>
                            <p class="arduino-1-made">Made in <?php echo $row['Supplier']; ?></p>
                            <p class="arduino-1-price"><b><?php echo $row['Product_Price']; ?> Tk</b></p>
                        </div>
                    </a>
                </div>
                <?php    
                    }
                ?>
            </div>
        </div>
        <!-- Tools -->
        <div class="catagory-tools">
            <div class="arduino-heading-box">
                <div class="arduino-heading">
                    <span>Tools</span>
                </div>
                <a class="arduino-seemore" href="catagory.php?id='Tools' ">See More</a>
            </div>
            <hr class="arduino-hr">
            <div class="arduino-details">
                <?php
                    $sql="select * from products where Category='Tools' ORDER BY `products`.`ID` DESC limit 5";
                    $run=mysqli_query($con,$sql);
                    while($row=mysqli_fetch_array($run)){
                ?>
                <div class="arduino-1">
                    <a href="product-details.php?id=<?php echo $row['ID'] ;?> ">
                        <div class="product">
                            <img src="admin_panel/uploads/images/<?php echo $row['Prodict_Image'];?>" alt="" height="50%" width="70%">
                            <p class="arduino-1-name" style="height: 38px;"><b><?php echo $row['Product_Name']; ?></b></p>
                            <p class="arduino-1-made">Made in <?php echo $row['Supplier']; ?></p>
                            <p class="arduino-1-price"><b><?php echo $row['Product_Price']; ?> Tk</b></p>
                        </div>
                    </a>
                </div>
                <?php    
                    }
                ?>
            </div>
        </div>
        
        
        
    </div>
    <!-- Content Section End -->
    <hr>
   
    <!-- Header Section Fixed Start -->
    <?php include 'footer.php';?>
    <!-- Header Section Fixed End -->



    <!-- Script Start -->
    <script type="text/javascript " src="scripts/jquery-1.9.0.min.js "></script>
    <script type="text/javascript " src="jquery.nivo.slider.js "></script>
    <script type="text/javascript ">
        $(window).load(function() {
            $('#slider').nivoSlider();
        });
    </script>
    <!-- Script End -->

</body>

</html>