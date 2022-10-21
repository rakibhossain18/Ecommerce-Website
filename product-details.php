<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<?php
    $id = $_REQUEST['id'];
    $user_id = $_COOKIE['user_id'];
?>


<head>
    <meta charset="UTF-8">
    <title>Product</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Header Section Fixed Start -->
    <?php include 'header.php';?>
    <!-- Header Section Fixed End -->


    <!-- Catagory Section Start -->
    <?php include 'nav.php';?>
    <!-- Catagory Section End -->


    <!-- Product Overview Section Start -->
    <div class="product-details-section-body">
        <div class="product-details-section">
            <div class="part-1">

                <?php
                    $sql = "SELECT * FROM products WHERE ID = '$id' ";
                    $run = mysqli_query($con,$sql);
                    $row = mysqli_fetch_array($run);
                ?>

                <div class="part-1-box-1">
                    <div class="product-image">
                        <div class="image-location">
                            <img width="100%" height="100%" src="admin_panel/uploads/images/<?php echo $row['Prodict_Image'];?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="part-1-box-2">
                    <form action="" method="POST">
                        <div class="product-details">
                            <div class="product-name">
                                <h2>Product Name: <?php echo $row['Product_Name']; ?></h2>
                            </div>
                            <div class="product-price">
                                <h3>Price: <?php echo $row['Product_Price']; ?> Tk</h3>
                                <?php $price =  $row['Product_Price']; ?>
                            </div>
                            <!-- <div class="product-availability">
                                <h3>Availability: </h3>
                                <div class="stock">In Stock</div>
                            </div> -->
                            <div class="product-price">
                                <h3>Product ID: <?php echo $row['Model_No']; ?></h3>
                            </div>
                            <div class="product-quantity">
                                <h3>Quantity: <input  min="1" id="qty" class="product_quantity" type="number" name="quantity"> </h3>
                            </div>
                            <div class="product-add-wishlist">
                                <?php
                                    $query = "select * from wish where product_id='$id' AND user_id='$user_id' ";
                                    $query_check = mysqli_query($con, $query);
                                    if($query_check){
                                        if(mysqli_num_rows($query_check) > 0){
                                            echo'
                                            <button class="already_wish" type="submit" name="">Already in Wishlist <img class=""  src="images/wishlist-icon.png" alt="card_icon" style="margin: -10px;padding-left: 7px;";></button>
                                            ';
                                        }
                                        else{
                                            echo'
                                            <button class="add_to_wish" type="submit" name="add_to_wish">Save to Wishlist <img class=""  src="images/wishlist-icon.png" alt="card_icon" style="margin: -10px;padding-left: 7px;";></button>
                                            ';
                                        }
                                    }

                                    $query2 = "select * from cart where product_id='$id' AND user_id='$user_id' ";
                                    $query_check2 = mysqli_query($con, $query2);
                                    if($query_check2){
                                        if(mysqli_num_rows($query_check2) > 0){
                                            echo"
                                         <button class='already_cart' type='submit'><a href='cart.php?id=$id'>Go to Cart <img  src='images/cart-icon-hover.png' alt='card_icon' style='margin: -10px;padding-left: 7px;'></a></button>
                                            ";
                                        }
                                        else{
                                            echo'
                                                <button class="add_to_cart" type="submit" name="add_to_cart">Add to Cart <img class=""  src="images/cart-icon-hover.png" alt="card_icon" style="margin: -10px;padding-left: 7px;";></button>
                                            ';
                                        }
                                    }
                                    
                                ?>

                                <!-- <button class="add_to_cart" type="submit" name="add_to_wish">Add to Cart <img class=""  src="images/cart-icon-hover.png" alt="card_icon" style="margin: -10px;padding-left: 7px;";></button>
                                <button class="add_to_wish" type="submit" name="add_to_wish">Save to Wishlist <img class=""  src="images/wishlist-icon.png" alt="card_icon" style="margin: -10px;padding-left: 7px;";></button>
                                <button class="already_wish" type="submit" name="add_to_wish">Already in Wishlist <img class=""  src="images/wishlist-icon.png" alt="card_icon" style="margin: -10px;padding-left: 7px;";></button> -->


                                <!-- <a href="#" class="go-to-search-page" type="submit" name="add_to_wish" value=""><img class=""  src="images/wishlist-icon.png" alt="card_icon" style="margin: -10px;padding-left: 7px;";>. Save to Wishlist</a> -->
                                <!-- <a href="#" class="go-to-search-page" type="submit" name="add_to_cart" value=""><img class=""  src="images/cart-icon-hover.png" alt="card_icon" style="margin: -10px;padding-left: 7px;";>. Add to Cart</a> -->
                                
                            </div>
                            <!-- <div class="product-add-cart">
                                <a href="#" class="go-to-search-page" type="submit" name="" value=""><img class=""  src="images/cart-icon-hover.png" alt="card_icon" style="margin: -10px;padding-left: 7px;";>. Add to Cart</a>
                            </div> -->
                            <div class="product-catagory">
                                <h3>Category: <?php echo $row['Category']; ?></h3>
                            </div>
                            <div class="product-made-in">
                                <h3>Supplier: <?php echo $row['Supplier']; ?></h3>
                            </div>
                        </div>
                        
                    </form>

                    
                    <?php
                        if(isset($_POST['add_to_wish'])){
                            $query1 = "select * from wish where product_id='$id' AND user_id='$user_id' ";
                            $query_check1 = mysqli_query($con, $query1);
                            if($query_check1){
                                if(mysqli_num_rows($query_check1) > 0){
                                    //
                                }
                                else{
                                    $insertion1 = "insert into wish(product_id, user_id) values('$id', '$user_id') ";
                                    $run1 = mysqli_query($con, $insertion1);
                                    echo"<script>location.reload();</script>";
                                }
                            }
                        }
                        if(isset($_POST['add_to_cart'])){
                            $quantity = $_POST['quantity'];
                            $query2 = "select * from cart where product_id='$id' AND user_id='$user_id' ";
                            $query_check2 = mysqli_query($con, $query2);
                            if($query_check2){
                                if(mysqli_num_rows($query_check2) > 0){
                                    //
                                }
                                else{
                                    $total = $price*$quantity;
                                    $insertion2 = "insert into cart(product_id, price, quantity, total, user_id) values('$id','$price', '$quantity', '$total', '$user_id') ";
                                    $run2 = mysqli_query($con, $insertion2);
                                    echo"<script>location.reload();</script>";
                                }
                            }
                        }
                    ?>
                </div>
            </div>
            <!-- <div class="part-2">
                <div class="part-2-box-1">
                    <div class="part-2-box-1-heahing">
                        <a href="#">Details</a>
                        <a href="#">Documents</a>

                    </div>
                    <div class="part-2-box-1-main">
                        <div class="specification">

                        </div>
                    </div>
                </div>
                <div class="part-2-box-2">
                    <div class="related-product">
                        <div class="related-product-headline">
                            <h2>Related Products</h2>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    <!-- Product Overview Section End -->


    <!-- Footer Secton Start -->
    <?php include 'footer.php';?>
    <!-- Footer Secton End -->


</body>

</html>