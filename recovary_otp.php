<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>TechZone | Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Header Section Fixed Start -->
    <?php include 'header.php';?>
    <!-- Header Section Fixed End -->

    <?php
        $phone = $_REQUEST['phone'];
    ?>



    <!-- Lgin Section Start -->
    <div class="login-page-section">
        <div class="login-cintent-section">
            <div class="container">
                <form action="#" method="POST">
                    <h2 class="login-header">Please enter recovery code to recover account</h2>
                    <label class="login-text" for="email">Code</label>
                    <input type="text" placeholder="Enter your code" name="code">
                    <button name="submit2" type="submit">Submit</button>
                </form>
                <?php
                    if(isset($_POST['submit2'])){
                        $otp = $_POST['code'];
                        $query = "select * from recovary_otp where phone='$phone' and otp='$otp' ";
                        $query_check = mysqli_query($con, $query);
                        if($query_check){
                            if(mysqli_num_rows($query_check) > 0){
                                echo "
                                    <script>
                                        window.location.href='reset_password.php?phone=$phone ';
                                    </script>
                                ";
                            }
                            else{
                                echo "
                                    <script>
                                        alert('Wrong OTP');
                                    </script>
                                ";
                            }
                        }
                        else{
                            // Query 
                        }
                    }
                
                ?>
            </div>
        </div>
    </div>
    <!-- Lgin Section End -->

    <!-- Footer Secton Start -->
    <?php include 'footer.php';?>
    <!-- Footer Secton End -->

</body>

</html>