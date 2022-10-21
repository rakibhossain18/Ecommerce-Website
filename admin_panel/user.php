<?php include '../config.php';?>
        
<!DOCTYPE HTML>
<html lang="en">

<head>
    <?php include 'head.php';?>
    <title>User Details</title>
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
            
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Customers Information</h5>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <tr>
                                <td><b>Customer Name</b></td>
                                <td><b>E-mail</b></td>
                                <td><b>Mobile</b></td>
                                <td><b>Action</b></td>
                                <td></td>
                            </tr>
                            <?php
                                $sql="select * from user";
                                $run=mysqli_query($con,$sql);
                                while($row=mysqli_fetch_array($run)){
                            ?> 
                            <tr>
                                <td><b>  
                                    <?php echo $row['Name']; ?>
                            
                                </b></td>
                                <td><?php echo $row['Email']; ?></td>
                                <td><?php echo $row['Phone']; ?></td>
                                <td>
                                    <a href="usr_dlt.php?id=<?php echo $row['ID']; ?>">
                                    <span class="badge rounded-pill alert-warning"> Delete </span></a>
                                </td>
                              
                                
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