<?php include 'config.php'; ?>
<?php //include 'search_query.php'; ?>

<?php
    // $id = $_REQUEST['id'];
    $user_id = $_COOKIE['user_id'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>TechZone | Ordered Products</title>
</head>

<body>
    
    <!-- Header Section Fixed Start -->
    <?php include 'header.php';?>
    <!-- Header Section Fixed End -->

    <!-- Catagory Section Start -->
    <?php include 'nav.php';?>
    <!-- Catagory Section End -->



    <!-- Content Section Start -->
    <div class="search-product">
    <table  width="100%"  height="50px">
            <tr>
                <td width="15%">
                <h3> Product </h3>
                </td>
                <td width="40%">
                </td>
                <td width="10%">
                <h3> Price </h3>
                </td>
                <td width="10%">
                <h3> Quantity </h3>
                </td>
                <td width="10%">
                <h3> Total </h3>
                </td>
                <td width="10%">
                </td>
            </tr>
        </table>
        <?php
            // $sql1 = "SELECT products.Prodict_Image, products.Product_Name, products.Model_No, products.Product_Price, wish.product_id 
            // FROM wish
            // INNER JOIN products ON wish.product_id=products.ID where wish.user_id=$user_id ";
            $sql = "SELECT products.Prodict_Image, products.Product_Name, products.Model_No, products.Product_Price, cart.product_id, cart.user_id, cart.quantity, cart.price, user.Name
            FROM products
            LEFT JOIN cart ON cart.product_id=products.ID
            LEFT JOIN user ON cart.product_id=user.ID
            where cart.user_id=$user_id ";
            $run=mysqli_query($con,$sql);
            while($row=mysqli_fetch_array($run)){
        ?> 
        <div class="row-1-box">
        <table  width="100%"  height="150px">
            <tr>
                <td width="15%">
                    <a href="product-details.php?id=<?php echo $row['product_id'] ;?> "><img height="150px" width="150px" src="admin_panel/uploads/images/<?php echo $row['Prodict_Image'];?>" alt=""></a>
                </td>
                <td width="40%">
                    <h3><a href="product-details.php?id=<?php echo $row['product_id'] ;?> "> <?php echo $row['Product_Name']; ?></a> <br>Model No:  <?php echo $row['Model_No']; ?> <br></h3>
                </td>
                <td width="10%">
                    <h3><?php echo $row['Product_Price']; ?></h3>
                </td>
                <td width="10%">
                    <h3><?php echo $row['quantity']; ?> </h3>
                </td>
                <td width="10%">
                <h3><?php echo $row['Product_Price']*$row['quantity'] ; ?></h3>
                </td>
                <td width="10%">
                <a href="cart_dlt.php?id=<?php echo $row['product_id']; ?>"><img class=""  src="images/trash-icon.png" style="margin: -2px";></a>
                </td>
            </tr>
        </table>
        </div>
        <?php    
            }
        ?>
        <div style="float:right; width:30%">
            <div class="row-box-table">
                <?php
                // $sql = "SELECT * FROM cart WHERE user_id='$user_id' ";
                $sql = "SELECT SUM(total) FROM cart WHERE user_id='$user_id' ";
                $run=mysqli_query($con,$sql);
                $row=mysqli_fetch_array($run);
                ?>
                <table >
                    <tr>
                        <td><h2>Cart Summary</td></h2>
                        <td></td>
                    </tr>
                    <tr>
                        <td width="80%"><h3>Producr Price: </td></h3>
                        <td width="150%"><?php echo $row['SUM(total)']; ?></td>
                    </tr>
                    <tr>
                        <td><h3>Shipping: </td></h3>
                        <td>50 Tk</td>
                    </tr>
                    <tr>
                        <td><b><h3 style="color:orange">Total Payable: </b></td></h3>
                        <td><b style="color:orange"><?php echo $row['SUM(total)'] + 50; ?> Tk</b></td>
                        <?php $total = $row['SUM(total)'] + 50;?>
                    </tr>
                </table>
                
            </div>
        </div>
        <br>
        <div>
            <button class='confirm-order' style="margin-top:10px" type='submit'><a href='shipping.php?id=<?php echo $row['SUM(total)'] + 50; ?>'>Next Step</a></button>
        </div>
        <!-- end -->

    </div>
     <!-- Content Section End -->


    <hr>
    <!-- Header Section Fixed Start -->
    <?php include 'footer.php';?>
    <!-- Header Section Fixed End -->


</body>

</html>


<!-- <section class="content-main">

            <div class="card mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <tbody>
                            <?php
                                $sql = "select * from products";
                                $run = mysqli_query($con,$sql);
                                while($row = mysqli_fetch_array($run)){
                            ?> 
                            <tr>
                                <td><?php echo $row['ID']; ?></td>
                                <td>
                                    <img src="uploads/images/<?php echo $row['Prodict_Image'];?>" width="30px" height="30px" alt="">
                                </td>
                                <td><b>  
                                    <?php echo $row['Product_Name']; ?>
                                </b></td>
                                <td><?php echo $row['Category']; ?></td>
                                <td>
                                    <span class="badge rounded-pill alert-success">Active</span>
                                </td>
                                <td><?php echo $row['Product_Price']; ?></td>
                                <td><?php echo $row['Supplier']; ?></td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-light">Detail</a>
                                </td>
                            </tr>
                               <?php    
                                }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section> -->
