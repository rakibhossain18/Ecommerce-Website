<?php include 'config.php'; ?>
<?php //include 'search_query.php'; ?>

<?php
    // $id = $_REQUEST['id'];
    $user_id = $_COOKIE['user_id'];
    $total = $_REQUEST['id'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>TechZone | Shipping</title>
</head>

<body>
    
    <!-- Header Section Fixed Start -->
    <?php include 'header.php';?>
    <!-- Header Section Fixed End -->

    <!-- Catagory Section Start -->
    <?php include 'nav.php';?>
    <!-- Catagory Section End -->



    <!-- Content Section Start -->
    <div class="search-product_2">
        
            <div style="float:right; width:30%">
                <div class="row-box-table">
                    <?php
                    $sql = "SELECT SUM(total) FROM cart WHERE user_id='$user_id' ";
                    $run=mysqli_query($con,$sql);
                    $row=mysqli_fetch_array($run);
                    ?>
                    <table >
                        <tr>
                            <td><h2>Cart Summary</td></h2>
                            <td></td>
                        </tr>
                        <tr>
                            <td width="80%"><h3>Producr Price: </td></h3>
                            <td width="150%"><?php echo $row['SUM(total)']; ?></td>
                        </tr>
                        <tr>
                            <td><h3>Shipping: </td></h3>
                            <td>50 Tk</td>
                        </tr>
                        <tr>
                            <td><b><h3 style="color:orange">Total Payable: </b></td></h3>
                            <td><b style="color:orange"><?php echo $row['SUM(total)'] + 50; ?> Tk</b></td>
                        </tr>
                    </table>
                </div>
                <!-- <button class='already_cart' style="margin-top:10px" type='submit_2'><a href=''>confirm order</a></button> -->
            </div>
            <form action="" method="POST">
            <div class="info">
                <div class="col-lg-9">
                    <section class="content-body p-xl-4">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="row gx-3">
                                    <div class="col-lg-12  mb-3">
                                        <b><label class="form-label">Full name</label></b>
                                        <input name="name" class="form-control" type="text" required>
                                    </div>
                                    <br>
                                    <div class="col-lg-6  mb-3">
                                        <b><labelb class="form-label">Phone</label></b>
                                        <input name="phone" class="form-control" type="text" required>
                                    </div>
                                    <br>
                                    <div class="col-lg-6  mb-3">
                                        <b><labelb class="form-label">Address</label></b>
                                        <input name="address" class="form-control" type="text" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="max-width:920px">
                        </div>
                    </section>
                </div>
            </div>
            <br>
            <button class='already_cart' style="margin-top:10px" name='submit_2'>confirm order</button>
        </form>
        <?php
            if(isset($_POST['submit_2'])){
                $full_name = $_POST['name'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];

                $insertion1 = "insert into orders(user_name,user_id,total_price,address,mobile) values('$full_name', '$user_id', '$total','$address', '$phone') ";
                $run1 = mysqli_query($con, $insertion1);
                if( $run1){
                    echo "
                        <script>
                            alert('Order is Done! ');
                            window.location.href='index.php';
                        </script>
                    ";
                }
            }
        ?>

    </div>
     <!-- Content Section End -->

    <hr>
    <!-- Header Section Fixed Start -->
    <?php include 'footer.php';?>
    <!-- Header Section Fixed End -->


</body>

</html>

