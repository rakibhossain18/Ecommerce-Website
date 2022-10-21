<?php include '../config.php'; ?>

<!DOCTYPE HTML>
<html lang="en">

<head>
    <title>Product List</title>
    <?php include 'head.php';?>
</head>

<?php
    $user_id = $_REQUEST['id'];
    $id = $_REQUEST['id2'];
?>

<body>

    <!-- Aside Section Start -->
    <?php include 'aside.php';?>
    <!-- Aside Section End -->

    <main class="main-wrap">
        <!-- Header Section Start -->
        <?php include 'header.php';?>
        <!-- Header Section End -->

        <section class="content-main">

            <!-- <div class="content-header">
                <h2 class="content-title">Products table </h2>
            </div> -->

            <div class="card mb-4">
                <!-- <header class="card-header">
                    <div class="row gx-3">
                        <div class="col-lg-4 col-md-6 me-auto">
                            <input type="text" placeholder="Search..." class="form-control">
                        </div>
                        <div class="col-lg-2 col-6 col-md-3">
                            <select class="form-select">
                            <option>All category</option>
                            <option>Arduino</option>
                            <option>Wireless</option>
                            <option>Robotics</option>
                        </select>
                        </div>
                        <div class="col-lg-2 col-6 col-md-3">
                            <select class="form-select">
                            <option>Status</option>
                            <option>Active</option>
                            <option>Disabled</option>
                            <option>Show all</option>
                        </select>
                        </div>
                    </div>
                </header> -->
                <!-- card-header end -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <!-- <th>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </th> -->
                                    <th>Icon</th>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Model No</th>
                                    <!-- <th class="text-end"> Action </th> -->
                                </tr>
                            </thead>
                            <tbody>

                            <?php
                                $sql1 = "SELECT products.Product_Name, products.Prodict_Image, products.Model_No, cart.quantity 
                                FROM cart
                                INNER JOIN products ON cart.product_id=products.ID where cart.user_id=$user_id ";
                                $run=mysqli_query($con,$sql1);
                                while($row=mysqli_fetch_array($run)){
                            ?> 
                            <tr>
                                <td>
                                    <!-- icon -->
                                    <img src="uploads/images/<?php echo $row['Prodict_Image'];?>" width="30px" height="30px" alt="">
                                    <?php // echo $row['Prodict_Image']; ?>
                                </td>
                                <td><b>  
                                    <?php echo $row['Product_Name']; ?>
                                </b></td>
                                <td><?php echo $row['quantity']; ?></td>
                                <td><?php echo $row['Model_No']; ?></td>
                            </tr>
                               <?php    
                                }
                            ?>
                            </tbody>
                        </table>
                    </div>
                    <form action="" method="POST">
                        <div class="row gx-2">
                            <div class="col-sm-6 mb-3">
                                <label class="form-label">Order Status</label>
                                <select name="status" class="form-select">
                                    <option> Pending </option>
                                    <option> Delevered </option>
                                    <!-- <option> Shipping </option> -->
                                </select>
                            </div>
                        </div>
                        <button class="btn btn-primary" name="submit">Submit</button>
                    </form>

                    <?php

                        if(isset($_POST['submit'])){
                            
                            $status = $_POST['status'];

                            $update_2 = "UPDATE orders SET status='$status' WHERE id='$id' ";
                            $run = mysqli_query($con, $update_2);
                        }
                    ?>

                </div>
                <!-- card-body end// -->
            </div>
            <!-- card end// -->


        </section>
        <!-- content-main end// -->
    </main>



</body>

<!-- Mirrored from www.ecommerce-admin.com/demo/page-products-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jul 2022 15:05:04 GMT -->

</html>