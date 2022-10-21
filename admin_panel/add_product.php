<?php include '../config.php'; ?>

<!DOCTYPE HTML>
<html lang="en">

<head>
    <title>Add Product</title>
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

        <section class="content-main" style="max-width: 720px">

            <div class="content-header">
                <h2 class="content-title">Add Products </h2>
            </div>

            <div class="card mb-4">
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="mb-4">
                            <label for="product_name" class="form-label">Product Name</label>
                            <input name="product_name" type="text" placeholder="Type here" class="form-control" id="product_name">
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Full description</label>
                            <textarea name="description" placeholder="Type here" class="form-control" rows="4"></textarea>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Images</label>
                            <input name="fileToUpload" class="form-control" type="file">
                        </div>

                        <!-- <div class="mb-4">
                            <label class="form-label">Documentation</label>
                            <input name="Documentation" class="form-control" type="file">
                        </div> -->

                        <div class="mb-4">
                            <label for="product_name" class="form-label">Supplier</label>
                            <input name="supplier" type="text" class="form-control">
                        </div>

                        <div class="mb-4">
                            <label for="product_name" class="form-label">Model Number</label>
                            <input name="model_no" type="text" class="form-control">
                        </div>

                        <div class="row gx-2">
                            <div class="col-sm-6 mb-3">
                                <label class="form-label">Category</label>
                                <select name="catagory" class="form-select">
                                    <option> Wireless </option>
                                    <option> Robotics </option>
                                    <option> Microcontroller </option>
                                    <option> Basic-Components </option>
                                    <option> Development-Board </option>
                                    <option> Display </option>
                                    <option> New-Products </option>
                                    <option> Tools </option>
                                    <option> Starter </option>
                                    <option> Arduino </option>
                                    <option> Raspberry-Pi </option>
                                    <option> Integrated-Circuit </option>
                                    <option> Miscellaneous </option>
                                    <option> Sensor </option>
                                    <option> Accessories </option>
					            </select>
                            </div>
                            <label class="form-label">Price (Tk)</label>
                            <div class="row gx-2">
                                <div class="col-4">
                                    <input name="product_price" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <label class="form-check mb-4"></label>
                        <button class="btn btn-primary" name="submit">Submit item</button>
                    </form>

                    <?php

                        if(isset($_POST['submit'])){
                            $up_path = "uploads/images/";
                            $name = $_FILES['fileToUpload']['name'];

                            $up_path_2 = "uploads/documentation/";
                            $name_2 = $_FILES['Documentation']['name'];
                        

                            move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $up_path.$name);
                            move_uploaded_file($_FILES['Documentation']['tmp_name'], $up_path_2.$name_2);

                            $product_name = $_POST['product_name'];
                            $product_price = $_POST['product_price'];
                            $description = $_POST['description'];
                            $catagory = $_POST['catagory'];
                            $supplier = $_POST['supplier'];
                            $model_no = $_POST['model_no'];

                            $insertion = "insert into products(Product_Name,Model_No,Product_Price,Category,Supplier,Description,Prodict_Image,Documentation) values(' $product_name','$model_no','$product_price','$catagory','$supplier','$description','$name','$name_2') ";
                            $run = mysqli_query($con, $insertion);
                        }
                    ?>

                </div>
            </div>
            <!-- card end// -->


        </section>
        <!-- content-main end// -->
    </main>

    <!-- <script src="js/jquery-3.5.0.min.js"></script> -->
    <!-- <script src="js/bootstrap.bundle.min.js"></script> -->

    <!-- Custom JS -->
    <!-- <script src="js/scriptc619.js?v=1.0"></script> -->

</body>


</html>