<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Header Section Fixed Start -->
    
    <!-- Header Section Fixed End -->

    <!-- Lgin Section Start -->
    <div class="login-page-section">
        <div class="login-cintent-section">
            <div class="container">
                <form action="" method="POST">
                    <h2 class="login-header">Admin Login</h2>
                    <label class="login-text" for="email">E-Mail</label>
                    <input type="text" placeholder="Enter E-Mail" name="email">
                    <label class="login-text" for="psw">Password</label>
                    <input type="password" placeholder="Enter Password" name="psw">
                    <button name="submit" type="submit">Login</button>
                </form>
                <?php
                    if(isset($_POST['submit'])){
                        $email = $_POST['email'];
                        $pass = $_POST['psw'];

                        if($email == 'admin@gmail.com' &&  $pass='12345'){
                            echo "
                                <script>
                                    window.location.href='admin_panel/index.php';
                                </script>
                            ";
                        }
                        else{
                            echo "
                                <script>
                                    window.location.href='admin_panel/index.php';
                                </script>
                            ";
                        }
                    }

                ?>
            </div>
        </div>
    </div>
    <!-- Lgin Section End -->

    <!-- Footer Secton Start -->
    
    <!-- Footer Secton End -->

</body>

</html>