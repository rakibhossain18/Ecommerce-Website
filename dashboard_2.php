<!DOCTYPE html>
<html lang="en">

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
                                <a class="nav-link" href="#">Change Password</a>
                                <a class="nav-link" href="#">My Order</a>
                                <a class="nav-link" href="wishlist.php">My Wishlist</a>
                                <a class="nav-link" href="logout.php">Logout</a>
                            </nav>

                        </aside>
                        <div class="col-lg-9">

                            <section class="content-body p-xl-4">
                                <form>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="row gx-3">
                                                <div class="col-6  mb-3">
                                                    <label class="form-label">First name</label>
                                                    <input class="form-control" type="text" placeholder="Type here">
                                                </div>
                                                <!-- col .// -->
                                                <div class="col-6  mb-3">
                                                    <label class="form-label">Last name</label>
                                                    <input class="form-control" type="text" placeholder="Type here">
                                                </div>
                                                <!-- col .// -->
                                                <div class="col-lg-6  mb-3">
                                                    <label class="form-label">Email</label>
                                                    <input class="form-control" type="email" placeholder="example@mail.com">
                                                </div>
                                                <!-- col .// -->
                                                <div class="col-lg-6  mb-3">
                                                    <labelb class="form-label">Phone</label>
                                                    <input class="form-control" type="text" placeholder="+1234567890">
                                                </div>
                                                <!-- col .// -->
                                                <div class="col-lg-12  mb-3">
                                                    <label class="form-label">Address</label>
                                                    <input class="form-control" type="text" placeholder="Type here">
                                                </div>
                                                <!-- col .// -->
                                                <div class="col-lg-6  mb-3">
                                                    <label class="form-label">Birthday</label>
                                                    <input class="form-control" type="date">
                                                </div>
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