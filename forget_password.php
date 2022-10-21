<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>TechZone | Forget Password</title>
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
                <form action="forget_password.php" method="POST">
                    <h2 class="login-header">Please Enter Your Phone Number to Receive code</h2>
                    <label class="login-text" for="email">Phone</label>
                    <input type="text" placeholder="Enter your Phone Number" name="phone" required>
                    <button name="submit" type="submit">Submit</button>
                </form>
                <?php
                    if(isset($_POST['submit'])){
                        $phone = $_POST['phone'];
                        $query = "select * from user where Phone='$phone' ";
                        $query_check = mysqli_query($con, $query);
                        if($query_check){
                            if(mysqli_num_rows($query_check) > 0){
                                $code = rand(111111,999999);
                                    
                                //
                                

                                $code = rand(111111,999999);

                                $to = $phone;
                                $token = "831802232216610270029f852d1d44177101624a5bd736f76af4";
                                $message = "আপনার TechZone নিবন্ধন ওটিপি কোড: $code, ধন্যবাদ।";

                                $url = "http://api.greenweb.com.bd/api.php?json";


                                $data= array(
                                'to'=>"$to",
                                'message'=>"$message",
                                'token'=>"$token"
                                ); // Add parameters in key value
                                $ch = curl_init(); // Initialize cURL
                                curl_setopt($ch, CURLOPT_URL,$url);
                                curl_setopt($ch, CURLOPT_ENCODING, '');
                                curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
                                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                                $smsresult = curl_exec($ch);

                                //Result
                                echo $smsresult;

                                //Error Display
                                echo curl_error($ch);


                                $insertion1 = "insert into recovary_otp(otp,phone) values('$code', '$phone') ";
                                $run1 = mysqli_query($con, $insertion1);
                                echo "
                                    <script>
                                        window.location.href='recovary_otp.php?phone=$phone ';
                                    </script>
                                ";
                            }
                            else{
                                echo "
                                    <script>
                                        alert('Phone is not  Correct');
                                        window.location.href='forget_password.php';
                                    </script>
                                ";
                            }

                        }
                        else{
                            echo "
                                <script>
                                    alert('Query not work');
                                    window.location.href='forget_password.php';
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