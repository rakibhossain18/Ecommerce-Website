<?php include '../config.php';?>

<!DOCTYPE HTML>
<html lang="en">

<head>
    <?php include 'head.php';?>
    <title>Admin Panel</title>
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
                <h2 class="content-title">Dashboard</h2>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="card card-body mb-4">
                        <article class="icontext">
                            <span class="icon icon-sm rounded-circle bg-primary-light"><i class="text-primary material-icons md-monetization_on"></i></span>
                            <div class="text">
                                <h6 class="mb-1">Total Sales</h6> <span>626,058 Tk</span>
                            </div>
                        </article>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-body mb-4">
                        <article class="icontext">
                            <span class="icon icon-sm rounded-circle bg-success-light"><i class="text-success material-icons md-local_shipping"></i></span>
                            <div class="text">
                                <h6 class="mb-1">Total Orders</h6> <span>87790</span>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-body mb-4">
                        <article class="icontext">
                            <span class="icon icon-sm rounded-circle bg-warning-light"><i class="text-warning material-icons md-shopping_basket"></i></span>
                            <div class="text">
                                <h6 class="mb-1">Total Products</h6> <span>5678</span>
                            </div>
                        </article>
                    </div>
                </div>
            </div>


            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Latest orders</h5>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <tr>
                                <td><b>Customer Name</b></td>
                                <td><b>E-mail</b></td>
                                <td><b>Phone</b></td>
                                <td><b>Price</b></td>
                                <td><b>Status</b></td>
                                <td></td>
                            </tr>
                            <?php
                                $sql1 = "SELECT user.Name, user.Phone, user.Email, orders.price 
                                FROM orders
                                INNER JOIN user ON orders.user_id=user.ID";
                                $run=mysqli_query($con,$sql1);
                                while($row=mysqli_fetch_array($run)){
                            ?> 
                            <tr>
                                <td><?php echo $row['Name']; ?></td>
                                <td><b><?php echo $row['Email']; ?></b></td>
                                <td><?php echo $row['Phone']; ?></td>
                                <td><?php echo $row['price']; ?> Tk</td>
                                <td><span class="badge rounded-pill alert-warning">Pending</span></td>
                            </tr>
                            <?php    
                                }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </section>

    </main>


    <script src="js/jquery-3.5.0.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script src="js/scriptc619.js?v=1.0" type="text/javascript"></script>

</body>


</html>