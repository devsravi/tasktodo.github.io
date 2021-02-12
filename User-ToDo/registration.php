<!DOCTYPE html>
<html>
<head>
	<title>User | Registration</title>
	<meta charset="UTF-8">
	<meta name="description" content="Users registraion for own todo">
	<meta name="author" content="Ravi kumar | PHP developer">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Main css -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- Font Icon -->
    <link rel="stylesheet"type="text/css" href="css/font/material-design-iconic-font.min.css">
</head>
<body  style="overflow: auto;">
	<div class="main">

        <!-- Registration up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Registration</h2>
                        <form method="POST" class="register-form" id="register-form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                            <div class="form-group">
                                <label for="username"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="userName" id="username" required="true" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" required="" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="contact"><i class="zmdi zmdi-smartphone"></i></label>
                                <input type="text" name="mobile" id="contact" required="" pattern="[6789][0-9]{9}" placeholder="Your Mobile Number"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" required="" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re-pass" required="" placeholder="Repeat your password"/>
                            </div>
                            
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="img/sign-up.jpg" alt="Login up image"></figure>
                        <a href="login.php" class="signup-image-link">I am already User</a>
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
<?php include 'connection.php';

if(isset($_POST['signup'])){
    $username = mysqli_real_escape_string($conn, $_POST['userName']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
    $password = mysqli_real_escape_string($conn, $_POST['pass']);
    $c_password = mysqli_real_escape_string($conn, $_POST['re_pass']);
   
    //$en_pass = password_hash($password,PASSWORD_BCRYPT);
    //$en_cpass = password_hash($c_password,PASSWORD_BCRYPT);
    $emailquery= "select * from users where email = '$email'";
    $equery = mysqli_query($conn, $emailquery);
    $emailcount = mysqli_num_rows($equery);
    if ($emailcount>0) {?>
    
        <script>alert('Email is already existed');</script>
    <?php
    }else{
        if ($password===$c_password) {
                $insertquery = " insert into users(username, email, Mobile, password, cpassword ) values('$username', '$email', '$mobile', '$password', '$c_password')";
    $query = mysqli_query($conn, $insertquery);
    if ($query) {
        ?>
        <script>alert('Registration Sucessfully');</script>
    <?php
    header('location: login.php');
}else{
    ?>
    <script>alert('Registration not Secessfully');</script>

<?php
}
        }else{
            ?>
            <script>alert('Password are Not Matched');</script>
            <?php
        }
    }


}
?> 