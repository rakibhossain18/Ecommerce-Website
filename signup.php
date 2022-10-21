<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TechZone | Sign Up</title>
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
                <form action="signup.php" method="POST">
                    <h2 class="login-header">Register Account</h2>
                    <label class="login-text" for="text"> First Name</label>
                    <input type="text" placeholder="Enter First Name" name="firstname" required>
                    <label class="login-text" for="text"> Last Name</label>
                    <input type="text" placeholder="Enter Last Name" name="lastname">
                    <label class="login-text" for="phone">Phone</label>
                    <input type="text" placeholder="Enter Phone Number" name="phone" required>
                    <label class="login-text" for="email">E-Mail</label>
                    <input type="email" placeholder="Enter E-Mail" name="email" required>
                    <label class="login-text" for="email">Password</label>
                    <!-- <input type="password" placeholder="Enter password" name="pass" required> -->
                    <input type="password" placeholder="Enter password" name="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter" required>
                    <label class="login-text" for="email">Confirm Password</label>
                    <input type="password" placeholder="Enter Confarm password" name="cpass" required>
                    <div class="rme-fp">
                        <label>
                        <input type="checkbox" name="remember" required> I agree to the
                    </label>
                        <label>
                        <span class="tou"><a href="terms_condition.php">Terms of Use</a></span>
                    </label>
                    </div>
                    <button name="submit" type="submit">Sign Up</button>
                </form>

                <?php
                    if(isset($_POST['submit'])){
                        $first_name = $_POST['firstname'];
                        $last_name = $_POST['lastname'];
                        $name = $first_name.' '.$last_name;
                        $email = $_POST['email'];
                        $phone = $_POST['phone'];
                        $pass = $_POST['pass'];
                        $cpass = $_POST['cpass'];
                        

                        if($pass == $cpass){
                            // $hash = password_hash($pass);
                            $query = "select * from user where Email='$email' ";
                            $query_check = mysqli_query($con, $query);
                            $query2 = "select * from user where Phone='$phone' ";
                            $query_check2 = mysqli_query($con, $query2);

                            if($query_check && $query_check2){
                                if(mysqli_num_rows($query_check) > 0){
                                    echo "
                                    <script>
                                        alert('Email already in use');
                                        window.location.href='login.php';
                                    </script>
                                    ";
                                }
                                elseif(mysqli_num_rows($query_check2) > 0){
                                    echo "
                                    <script>
                                        alert('Phone already in use');
                                        window.location.href='login.php';
                                    </script>
                                    ";
                                }
                                else{

                                
                                    
                                    
                                    // $url = "https://esms.mimsms.com/smsapi";
                                    // $data = [
                                    //     "api_key" => "C200894961a3409345ec64.16014524",
                                    //     "type" => "text",
                                    //     "contacts" =>$phone,
                                    //     "senderid" => "8809612472138",
                                    //     "msg" => "আপনার TechZone নিবন্ধন ওটিপি কোড: $code, ধন্যবাদ।"
                                    // ];
                                    // $ch = curl_init($url);
                                    // curl_setopt($ch, CURLOPT_POST, 1);
                                    // curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
                                    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                                    // $response = curl_exec($ch);
                                    // curl_close($ch); 
                                    




                                    // $url = "http://api.greenweb.com.bd/api.php?json";
                                    // $data = [
                                    //     "api_key" => "831802232216610270029f852d1d44177101624a5bd736f76af4",
                                    //     "type" => "text",
                                    //     "contacts" =>$phone,
                                    //     "senderid" => "8809612472138",
                                    //     "msg" => "আপনার TechZone নিবন্ধন ওটিপি কোড: $code, ধন্যবাদ।"
                                    // ];
                                    // $ch = curl_init($url);
                                    // curl_setopt($ch, CURLOPT_POST, 1);
                                    // curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
                                    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                                    // $response = curl_exec($ch);
                                    // curl_close($ch);
                                    

                                    // echo "
                                    // <script>
                                    //     alert($response);
                                    // </script>
                                    // ";


                                    
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








                                    $insertion1 = "insert into submit_otp(otp,phone) values('$code', '$phone') ";
                                    $run1 = mysqli_query($con, $insertion1);
                                    echo "
                                        <script>
                                            window.location.href='signup_otp.php?phone=$phone&email=$email&name=$name&pass=$pass ';
                                        </script>
                                    ";
                                }
                            }
                            else{
                                echo "
                                    <script>
                                        alert('Connection failed!');
                                        window.location.href='signup.php';
                                    </script>
                                ";
                            }

                        }
                        else{
                            echo "
                            <script>
                                alert('Password doesnt match');
                                window.location.href='signup.php';
                            </script>
                            ";
                        }
                    }
                    else{

                    }

                ?>

                <div class="have-account">
                    <span>Already have an account? <a class="login" href="login.php">Login!</a></span>
                </div>

            </div>
        </div>
    </div>
    <!-- Lgin Swction End -->



    <!-- Footer Secton Start -->
    <?php include 'footer.php';?>
    <!-- Footer Secton End -->

</body>

</html>