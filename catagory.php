<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>TechZone | Catagory</title>
</head>

<body>

    <!-- Header Section Fixed Start -->
    <?php include 'header.php';?>
    <!-- Header Section Fixed End -->

    <!-- Catagory Section Start -->
    <?php include 'nav.php';?>
    <!-- Catagory Section End -->

    <?php
        $id = $_REQUEST['id'];
        $user_id = $_COOKIE['user_id'];
    ?>



    <!-- Content Section Start -->
    <div class="search-product">
        <!-- <div class="row-1"> -->
            <?php
                // $sql="select * from products where Category=$id";
                $sql="select * from products where Category=$id ORDER BY `products`.`ID` DESC";
                $run=mysqli_query($con,$sql);
                while($row=mysqli_fetch_array($run)){
            ?> 
            <div class="row-1-box">
                <table  width="100%"  height="150px">
                    <tr>
                        <td width="25%">
                            <a href="product-details.php?id=<?php echo $row['ID'] ;?> "><img height="150px" width="150px" src="admin_panel/uploads/images/<?php echo $row['Prodict_Image'];?>" alt=""></a>
                        </td>
                        <td width="40%">
                            <h3><a href="product-details.php?id=<?php echo $row['ID'] ;?> "> <?php echo $row['Product_Name']; ?></a> <br>Model No:  <?php echo $row['Model_No']; ?> <br>Tk : <?php echo $row['Product_Price']; ?> </h3>
                        </td>
                        <td width="10%">
                        </td>
                        

                       
                    </tr>
                </table>
            </div>
            <?php    
                }
            ?>
            
            
        <!-- </div> -->
        <!-- end -->

    </div>
     <!-- Content Section End -->


    <hr>
    <!-- Header Section Fixed Start -->
    <?php include 'footer.php';?>
    <!-- Header Section Fixed End -->


</body>

</html>

