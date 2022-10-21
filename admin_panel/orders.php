<?php include '../config.php';?>

<!DOCTYPE HTML>
<html lang="en">

<head>
    <title>Admin Panel</title>
    <?php include 'head.php';?>
    
</head>

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

            <div class="content-header">
                <h2 class="content-title">Orders</h2>
            </div>

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
                                    <th scope="col">Name</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Address</th>
                                    <!-- <th scope="col">Date</th> -->
                                    <th scope="col" class="text-end"> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $sql="select * from orders";
                                    $run=mysqli_query($con,$sql);
                                    while($row=mysqli_fetch_array($run)){
                                ?> 
                                <tr>
                                    <!-- <td>0901</td> -->
                                    <td><b> <?php echo $row['user_name']; ?></b></td>
                                    <td><?php echo $row['mobile']; ?></td>
                                    <td><?php echo $row['total_price']; ?></td>
                                    <td><span ><?php echo $row['status']; ?></span></td>
                                    <td><?php echo $row['address']; ?></td>
                                    <td class="text-end">
                                        <a href="ordered_products.php?id=<?php echo $row['user_id']; ?>&id2=<?php echo $row['id']; ?> " class="btn btn-light">Details</a>
                                    </td>
                                </tr>
                                <?php    
                                    }
                                ?>

                                <!-- <tr>
                                    <td>2323</td>
                                    <td><b>Rakib Hossain</b></td>
                                    <td>rakib@gmail.com</td>
                                    <td>1200 Tk</td>
                                    <td><span class="badge rounded-pill alert-warning">Pending</span></td>
                                    <td>21.02.2020</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-light">Delete</a>
                                        </div>
                                    </td>
                                </tr> -->

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