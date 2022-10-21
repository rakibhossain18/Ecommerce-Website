<?php include '../config.php'; ?>

<!DOCTYPE HTML>
<html lang="en">

<head>
    <title>Product List</title>
    <?php include 'head.php';?>
</head>

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
                                    <th>#ID</th>
                                    <th>Icon</th>
                                    <th>Product</th>
                                    <th>Category</th>
                                    <th>Model No</th>
                                    <th>Price (Tk)</th>
                                    <th>Supplier</th>
                                    <th>Status</th>
                                    <th class="text-end"> Action </th>
                                </tr>
                            </thead>
                            <tbody>

                            <?php
                                $sql = "select * from products ORDER BY `products`.`ID` DESC";
                                // $sql = "select * from products";
                                $run = mysqli_query($con,$sql);
                                while($row = mysqli_fetch_array($run)){
                            ?> 
                            <tr>
                                <td><?php echo $row['ID']; ?></td>
                                <td>
                                    <!-- icon -->
                                    <img src="uploads/images/<?php echo $row['Prodict_Image'];?>" width="30px" height="30px" alt="">
                                    <?php // echo $row['Prodict_Image']; ?>
                                </td>
                                <td><b>  
                                    <?php echo $row['Product_Name']; ?>
                                </b></td>
                                <td><?php echo $row['Category']; ?></td>
                                <td><?php echo $row['Model_No']; ?></td>
                                <td><?php echo $row['Product_Price']; ?></td>
                                <td><?php echo $row['Supplier']; ?></td>
                                <td>
                                    <a href="pdt_dlt.php?id=<?php echo $row['ID']; ?>">
                                    <span class="badge rounded-pill alert-warning"> Delete </span></a>
                                </td>
                                <td class="text-end">
                                    <!-- <a href="edit_product.php" class="btn btn-light">Edit</a> -->
                                    <!-- <a href="edit_product.php?id=<?php echo $row['ID']; ?>&name=<?php echo $row['Product_Name'];?>&price=<?php echo $row['Product_Price'];?>&model=<?php echo $row['Model_No'];?>&catagory=<?php echo $row['Catagory'];?>&supplier=<?php echo $row['Supplier'];?>&description=<?php echo $row['Description'];?>&documentation=<?php echo $row['Documentation'];?>&image=<?php echo $row['Prodict_Image'];?> " class="btn btn-light">Edit</a> -->
                                    <a href="edit_product.php?id=<?php echo $row['ID'];?>&name=<?php echo $row['Product_Name'];?>&price=<?php echo $row['Product_Price'];?>&model=<?php echo $row['Model_No'];?>&catagory=<?php echo $row['Category'];?>&supplier=<?php echo $row['Supplier'];?>&description=<?php echo $row['Description'];?>&documentation=<?php echo $row['Documentation'];?>&image=<?php echo $row['Prodict_Image'];?> " class="btn btn-light">Edit</a>
                                </td>
                            </tr>
                               <?php    
                                }
                            ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- table-responsive end // -->

                    <!-- <nav class="float-end mt-3" aria-label="Page navigation">
                        <ul class="pagination">
                            <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav> -->

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