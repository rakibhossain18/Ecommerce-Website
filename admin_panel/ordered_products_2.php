<?php include '../config.php';?>

<!DOCTYPE HTML>
<html lang="en">

<head>
    <title>Admin Panel</title>
    <?php include 'head.php';?>
    
</head>

<?php
    $user_id = $_REQUEST['id'];

?>



<body>

    <b class="screen-overlay"></b>

    <!-- Aside Section Start -->
    <?php include 'aside.php';?>
    <!-- Aside Section End -->

    <main class="main-wrap">
        <!-- Header Section Start -->
        <?php include 'header.php';?>
        <!-- Header Section End -->

        <section class="content-main">

            <!-- <div class="content-header">
                <h2 class="content-title">Orders</h2>
            </div> -->

            <div class="card mb-4">
                <!-- <header class="card-header">
                    <div class="row gx-3">
                        <div class="col-lg-4 col-md-6 me-auto">
                            <input type="text" placeholder="Search..." class="form-control">
                        </div>
                        <div class="col-lg-2 col-6 col-md-3">
                            <select class="form-select">
							<option>Status</option>
							<option>Active</option>
							<option>Disabled</option>
							<option>Show all</option>
						</select>
                        </div>
                        <div class="col-lg-2 col-6 col-md-3">
                            <select class="form-select">
							<option>Show 20</option>
							<option>Show 30</option>
							<option>Show 40</option>
						</select>
                        </div>
                    </div>
                </header> -->
                <!-- card-header end// -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <!-- <th>ID</th> -->
                                    <th scope="col">Product</th>
                                    <th scope="col">Model No</th>
                                    <th scope="col">Quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $sql1 = "SELECT products.Product_Name, products.Model_No, cart.quantity 
                                    FROM cart
                                    INNER JOIN products ON cart.product_id=products.ID where cart.user_id=$user_id ";
                                    $run=mysqli_query($con,$sql1);
                                    while($row=mysqli_fetch_array($run)){
                                ?> 
                                <tr>
                                    <td><b> <?php echo $row['Product_Name']; ?></b></td>
                                    <td><b> <?php echo $row['Model_No']; ?></b></td>
                                    <td><?php echo $row['quantity']; ?></td>
                                </tr>
                                <?php    
                                    }
                                ?>

                            </tbody>
                        </table>
                    </div>
                    <!-- table-responsive //end -->
                </div>
                <!-- card-body end// -->
            </div>
            <!-- card end// -->


        </section>
        <!-- content-main end// -->
    </main>

    <!-- <script>
        if (localStorage.getItem("darkmode")) {
            var body_el = document.body;
            body_el.className += 'dark';
        }
    </script>

    <script src="js/jquery-3.5.0.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <script src="js/scriptc619.js?v=1.0"></script> -->

</body>

<!-- Mirrored from www.ecommerce-admin.com/demo/page-orders-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jul 2022 15:05:05 GMT -->

</html>