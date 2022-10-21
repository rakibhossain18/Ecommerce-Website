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
        $email = $_REQUEST['email'];
        $phone = $_REQUEST['phone'];
        $name = $_REQUEST['name'];
        $pass = $_REQUEST['pass'];
    ?>

    <!-- Lgin Section Start -->
    <div class="login-page-section">
        <div class="login-cintent-section">
            <div class="container">
                <form action="" method="POST">
                    <h2 class="login-header">Verification code has been sent to your Phone.</h2>
                    <h2 style="text-align:center;">Phone Number: </h2>
                    <h2 style="text-align:center;"><?php echo $_REQUEST['phone'];?></h2>
                    <input type="text" placeholder="Enter your code" name="otp">
                    <label><span name="resend"> Didn't Receive Code? <a href="#">Resend Now</a></span></label>
                    <button type="submit" name ="submit1">Submit</button>
                </form>
                <?php
                    if(isset($_POST['submit1'])){
                        $otp = $_POST['otp'];
                        $query = "select * from submit_otp where phone='$phone'and otp='$otp' ";
                        $query_check = mysqli_query($con, $query);
                        if($query_check){
                            if(mysqli_num_rows($query_check) >= 0){
                                $hash = password_hash($pass, PASSWORD_DEFAULT);
                                $insertion = "insert into user(Name,Phone,Email,Password) values('$name', '$phone', '$email', '$hash') ";
                                $run = mysqli_query($con, $insertion);

                                if($run){

                                    $query2 = "select * from user where Email='$email'";
                                    $query_check2 = mysqli_query($con, $query2);
                                    $num=mysqli_num_rows($query_check2);
                                    $row2 = mysqli_fetch_array($query_check2);
                                    $user_id = $row2['ID'];
                                    setcookie('is_logged','yes',time()+86400*30);
                                    setcookie("user_id","$user_id",time()+86400*30);

                                    echo "
                                        <script>
                                            alert('You are successfully regestered');
                                            window.location.href='index.php';
                                        </script>
                                    ";
                                }
                                else{
                                    echo "
                                        <script>
                                            alert('Connection failed');
                                            window.location.href='signup_otp.php';
                                        </script>
                                    ";
                                }
                            }
                            else{
                                echo "
                                    <script>
                                        alert('Wrong OTP');
                                        window.location.href='';
                                    </script>
                                ";
                            }
                        }
                        else{
                            echo "
                                <script>
                                    alert('Connection failed!');
                                    window.location.href='signup_otp.php';
                                </script>
                            ";
                        }
                    }
                ?>
            </div>
        </div>
    </div>
    <!-- Lgin Section End -->

    <?php

            // $insertion = "insert into user(Name,Phone,Email,Password) values('$name', '$phone', '$email', '$pass') ";
            // $run = mysqli_query($con, $insertion);
            // if($run){
            //     echo "
            // <script>
            //     alert('You are successfully regestered');
            //     window.location.href='signup_otp.php';
            // </script>
            // ";
            // }
            // else{
            //     echo "
            //     <script>
            //         alert('Connection failed');
            //         window.location.href='signup.php';
            //     </script>
            // ";
            // }
    ?>

    <!-- Footer Secton Start -->
    <?php include 'footer.php';?>
    <!-- Footer Secton End -->

</body>

</html>

