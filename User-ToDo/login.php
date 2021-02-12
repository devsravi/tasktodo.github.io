<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>User | Login</title>
	<meta charset="UTF-8">
	<meta name="description" content="Users registraion for own todo">
	<meta name="author" content="Ravi kumar | PHP developer">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Main css -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- Font Icon -->
    <link rel="stylesheet"type="text/css" href="css/font/material-design-iconic-font.css">
</head>
<body  style="overflow: auto;">
    <!-- php login code start here-->
<?php include 'connection.php';
if (isset($_POST['signin'])) {
    $email = mysqli_real_escape_string($conn, $_POST['your_email']);
    $password = mysqli_real_escape_string($conn, $_POST['your_pass']);
    $emailSearch = "select * from users where email = '$email'";
    $query = mysqli_query($conn, $emailSearch);
    $emailcount =  mysqli_num_rows($query);
    
    if ($emailcount) {
        $email_pass = mysqli_fetch_assoc($query);

        $dbpass = $email_pass['password'];
        $_SESSION['id'] = $email_pass['id'];
        
        //$pass_decode = password_verify($password, $dbpass);
        if ($password===$dbpass) {
            echo "login successfull";
            header('location: index.php');
        }else{?>
                <script>alert('invalid Password');</script>
       <?php }
    }else{
            echo "invalid email";
        }
}
?>

	<div class="main">
		<!-- login Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signup-content">
                    <div class="signin-image">
                        <figure><img src="img/sign-in.jpg" alt="sing up image"></figure>
                        <a href="registration.php" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign In</h2>
                        <form method="POST" class="register-form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" id="login-form">
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email material-icons-name"></i></label>
                                <input type="email" name="your_email" id="email" required=""  placeholder="Your email"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="your_pass" id="your_pass" required="" placeholder="Password"/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                       
                    </div>
                </div>
            </div>
        </section>





	</div>


<!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>	