<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<?php
    $id = $_COOKIE['user_id'];
?>

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
 
</head>

<body>
    <!-- Header Section Fixed Start -->
    <?php include 'header_2.php';?>
    <?php include 'admin_panel/head.php';?>
    <!-- Header Section Fixed End -->


    <!-- Catagory Section Start -->
    <?php include 'nav.php';?>
    <!-- Catagory Section End -->
  
        <section class="content-main">

            <!-- <div class="content-header">
                <h2 class="content-title" style="margin-left:20px;">Dashboard</h2>
            </div> -->

            <div class="card">
                <div class="card-body">
                    <div class="row gx-5">
                        <aside class="col-lg-3 border-end">

                            <nav class="nav nav-pills flex-lg-column mb-4">
                                <!-- <a class="nav-link active" aria-current="page" href="#">General</a> -->
                                <!-- <a class="nav-link" aria-current="page" href="#">General</a> -->
                                <a class="nav-link" href="#">Account</a>
                                <a class="nav-link" href="forget_password.php">Change Password</a>
                                <a class="nav-link" href="order.php">My Order</a>
                                <a class="nav-link" href="wishlist.php">My Wishlist</a>
                                <a class="nav-link" href="logout.php">Logout</a>
                            </nav>

                        </aside>
                        <div class="col-lg-9">

                            <section class="content-body p-xl-4">
                                <?php
                                    $sql = "select * from user where ID=$id ";
                                    $run = mysqli_query($con,$sql);
                                    $row = mysqli_fetch_array($run);
                                ?>
                                <form action="" method="POST">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="row gx-3">
                                                <div class="col-lg-12  mb-3">
                                                    <label class="form-label">Firull name</label>
                                                    <input name="name" class="form-control" type="text" value="<?php echo $row['Name'];?>">
                                                </div>
                                                <!-- col .// -->
                                                <div class="col-lg-6  mb-3">
                                                    <label class="form-label">Email</label>
                                                    <input name="email" class="form-control" type="email" value="<?php echo $row['Email'];?>">
                                                </div>
                                                <!-- col .// -->
                                                <div class="col-lg-6  mb-3">
                                                    <labelb class="form-label">Phone</label>
                                                    <input name="phone" class="form-control" type="text" value="<?php echo $row['Phone'];?>">
                                                </div>
                                                <!-- col .// -->
                                                <!-- <div class="col-lg-12  mb-3">
                                                    <label class="form-label">Address</label>
                                                    <input name="address" class="form-control" type="text" value="<?php echo $row['Address'];?>">
                                                </div> -->
                                                <!-- col .// -->
                                                <!-- <div class="col-lg-6  mb-3">
                                                    <label class="form-label">Birthday</label>
                                                    <input class="form-control" type="date">
                                                </div> -->
                                                <!-- col .// -->
                                            </div>
                                            <!-- row.// -->
                                        </div>
                                        <!-- col.// -->
                                        <!-- <aside class="col-lg-4">
                                            <figure class="text-lg-center">
                                                <img class="img-lg mb-3 img-avatar" src="../images/download.png" alt="User Photo">
                                                <figcaption>
                                                    <a class="btn btn-outline-primary" href="#">
                                                        <i class="icons material-icons md-backup"></i> Upload
                                                    </a>
                                                </figcaption>
                                            </figure>
                                        </aside> -->
                                        <!-- col.// -->
                                    </div>
                                    <!-- row.// -->
                                    <br>
                                    <button class="btn btn-primary" type="submit">Save changes</button>
                                </form>


                                <?php
                                    if(isset($_POST['submit'])){
                                        $pfull_name = $_POST['name'];
                                        $email = $_POST['email'];
                                        $phone = $_POST['phone'];
                                        // $address = $_POST['address'];

                                        
                                        $update_2 = "update user set Name='$full_name',Email='$email',Phone='$phone',User_Address='$address' WHERE ID='$id' ";
                                        $run = mysqli_query($con, $update_2);
                                    
                                        if($run){
                                            echo "
                                                <script>
                                                    alert('Successfully Updated');
                                                    window.location.href='dashboard.php';
                                                </script>
                                            ";
                                        }
                                        else{
                                            echo "
                                                <script>
                                                    alert('Product Couldn't Updated!');
                                                    window.location.href='dashboard.php';
                                                </script>
                                            ";
                                        }
                                    }
                                ?>

                                <hr class="my-5">

                                <div class="row" style="max-width:920px">
                                    <!-- <div class="col-md">
                                        <article class="box mb-3 bg-light">
                                            <a class="btn float-end btn-light btn-sm" href="forget_password.php">Change</a>
                                            <h6>Password</h6>
                                            <small class="text-muted d-block" style="width:70%">You can reset or change your password by clicking here</small>
                                        </article>
                                    </div> -->
                                    <!-- col.// -->
                                    <!-- <div class="col-md">
                                        <article class="box mb-3 bg-light">
                                            <a class="btn float-end btn-outline-danger btn-sm" href="#">Deactivate</a>
                                            <h6>Remove account</h6>
                                            <small class="text-muted d-block" style="width:70%">Once you delete your account, there is no going back.</small>
                                        </article>
                                    </div> -->
                                    <!-- col.// -->
                                </div>
                                <!-- row.// -->


                            </section>
                            <!-- content-body .// -->

                        </div>
                        <!-- col.// -->
                    </div>
                    <!-- row.// -->

                </div>
                <!-- card body end// -->
            </div>
            <!-- card end// -->


        </section>
   
    <!-- Footer Secton Start -->
    <?php include 'footer.php';?>
    <!-- Footer Secton End -->

 
</body>

</html>