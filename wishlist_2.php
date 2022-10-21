<?php include 'config.php'; ?>
<?php //include 'search_query.php'; ?>

<?php
    // $id = $_REQUEST['id'];
    $id = 'arduino';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>TechZone | Wishlist</title>
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
        <?php
            // $sql = "SELECT * FROM products ";
            $sql = "SELECT * FROM `products` WHERE `Product_Name` LIKE '%$id%' ";
            $run=mysqli_query($con,$sql);
            while($row=mysqli_fetch_array($run)){
        ?> 
        <div class="row-1-box">
        <table  width="100%"  height="150px">
            <tr>
                <td width="25%">
                    <a href="product-details.php?id=<?php echo $row['ID'] ;?> "><img height="150px" width="150px" src="admin_panel/uploads/images/<?php echo $row['Prodict_Image'];?>" alt=""></a>
                </td>
                <td width="40%">
                    <h3><a href="product-details.php?id=<?php echo $row['ID'] ;?> "> <?php echo $row['Product_Name']; ?></a> <br>Model No:  <?php echo $row['Model_No']; ?> <br>Tk : <?php echo $row['Product_Price']; ?> </h3>
                </td>
                <td width="10%">
                </td>
                <td width="25%">
                    <!-- <a href="#"> Wishlist</a> -->
                    <a href="#"><img class=""  src="images/cart-icon-hover.png" style="margin: -10px";>. Add to Cart </a>
                    <br>
                    <br>
                    <a href="#" ><img class=""  src="images/trash-icon.png" style="margin: -2px";>. Remove from Wishlist</a>
                    <!-- <a href="#"> Wishlist</a> -->
                </td>
            </tr>
        </table>
        </div>
        <?php    
            }
        ?>
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
