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
                    <h2 class="login-header">Reset Password</h2>
                    <label class="login-text" for="npass">New Password</label>
                    <input type="password" placeholder="Enter your new password" name="npass">
                    <label class="login-text" for="cpass">Confirm New Password</label>
                    <input type="password" placeholder="Confirm new password" name="cpass">
                    <button name="submit1" type="submit">Confirm</button>
                </form>
                <?php
                    if(isset($_POST['submit1'])){
                        $npass = $_POST['npass'];
                        $cpass = $_POST['cpass'];
                        if($npass == $cpass){
                            $hash = password_hash($npass, PASSWORD_DEFAULT);

                            $query1 = "update user set Password='$hash' where Phone='$phone' ";
                            $query_run = mysqli_query($con, $query1);
                            if($query_run){
                               //  echo var_dump($query_run);
                                echo "
                                <script>
                                    alert('Password changed Successfully');
                                    window.location.href='index.php';
                                </script>
                                ";
                            }
                            else{
                                echo "
                                <script>
                                    alert('Password is not updated. Try again!');
                                    window.location.href='reset_password.php';
                                </script>
                                ";
                            }
                        }
                        else{
                            echo "
                                <script>
                                    alert('Password does not matched');
                                
                                </script>
                            ";
                        }
                    }
                    else{
                        // not isset
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