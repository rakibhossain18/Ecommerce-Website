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

    <!-- Lgin Section Start -->
    <div class="login-page-section">
        <div class="login-cintent-section">
            <div class="container">
                <form action="login.php" method="POST">
                    <h2 class="login-header">Account Login</h2>
                    <label class="login-text" for="email">Phone / E-Mail</label>
                    <input type="text" placeholder="Enter Phone or E-Mail" name="email" required>
                    <label class="login-text" for="psw">Password</label>
                    <input type="password" placeholder="Enter Password" name="pass" required>
                    <div class="rme-fp">
                        <label>
                        <input type="checkbox" checked="checked" name="remember"> Remember me
                        </label>
                        <label>
                        <span class="forgotten"><a href="forget_password.php">Forgotten Password?</a></span>
                        </label>
                    </div>
                    <button type="submit" name="submit1">Login</button>
                </form>

                <?php
                    //$message = "";
                
                ?>

                <?php
                    if(isset($_POST['submit1'])){
                        $email = $_POST['email'];
                        $password = $_POST['pass'];
                        
    
                        $row=mysqli_fetch_assoc(mysqli_query($con,"select Password from user where Email='$email'"));
                        $db_pass=$row['Password'];
                        $dec_pass = password_verify($password,$db_pass );


                        $query = "select * from user where Email='$email'";
                        $query_check = mysqli_query($con, $query);
                        $num=mysqli_num_rows($query_check);
                        $row = mysqli_fetch_array($query_check);
                        // $query2 = "select * from user where Password='$password' ";
                        // $query_check2 = mysqli_query($con, $query2);
                        
                        // setcookie("mail", $_POST['email'], time()+3600);
                        // setcookie("pass", $_POST['pass'], time()+3600);
                        $user_id = $row['ID'];

                        if($query_check){
                            if(mysqli_num_rows($query_check) > 0){
                                if($dec_pass){
                                    setcookie('is_logged','yes',time()+86400*30);
                                    setcookie("user_id","$user_id",time()+86400*30);

                                    echo "
                                    <script>
                                        alert('You are successfully login ');
                                        window.location.href='index.php';
                                    </script>
                                    ";
                                }
                                else{
                                    echo "
                                    <script>
                                        alert('Incorrect Passwprd');
                                        window.location.href='login.php';
                                    </script>
                                ";
                                }
                                
                            }
                            else{
                                echo "
                                <script>
                                    alert('Email is not Correct');
                                    window.location.href='login.php';
                                </script>
                            ";
                            }
                        }
                        else{
                            echo "
                                <script>
                                    alert('Connection failed!');
                                    window.location.href='login.php';
                                </script>
                            ";
                        }
                        
                    }
                    
                ?>

                <div class="no-account">
                    <span>Don't have any account? <a class="sugnup" href="signup.php">Sign Up!</a></span>
                </div>
            </div>
        </div>
    </div>
    <!-- Lgin Section End -->

    <!-- Footer Secton Start -->
    <?php include 'footer.php';?>
    <!-- Footer Secton End -->

</body>

</html>