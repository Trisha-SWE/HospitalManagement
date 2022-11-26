<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive hospital website design </title>
        <!-- font link  -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">

<!-- Live Search Jquery CDN link Link -->

<script
  src="https://code.jquery.com/jquery-3.6.1.js"
  integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
  crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.css" 
integrity="sha512-0nkKORjFgcyxv3HbE4rzFUlENUMNqic/EzDIeYCgsKa/nwqr2B91Vu/tNAu4Q0cBuG4Xe/D1f/freEci/7GDRA==" 
crossorigin="anonymous" referrerpolicy="no-referrer" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.js" 
integrity="sha512-eSeh0V+8U3qoxFnK3KgBsM69hrMOGMBy3CNxq/T4BArsSQJfKVsKb5joMqIPrNMjRQSTl4xG8oJRpgU2o9I7HQ=="
 crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/doctorprofile.css">


</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-heartbeat"></i>Health<span>School</span>24</a>

    <nav class="navbar">
        <a  href="#home">Home</a>
        <a  href="#services">Services</a>
        <a  href="#doctors">Doctors</a>
        <a  href="#appointment">Appointment</a>
        <a  href="#review">Review</a>
        <a href="#blogs">Blogs</a>
        <a  href="#contact">Contact</a>
        <a  href="#about">About</a>
    </nav>

    <div class="lang-button">
        <input id="toggle-on" class="lang-en-btn toggle toggle-left" name="lang" value="en" type="radio" checked="">
            <label for="toggle-on" class="switch-btn" id="switch-btn-en">ENG</label>
            <input id="toggle-off" class="lang-bn-btn toggle toggle-right" name="lang" value="bn" type="radio">
            <label for="toggle-off" class="switch-btn" id="switch-btn-bn">বাংলা</label>
    </div>
    
    <div id="menu-btn" class="fas fa-bars"></div>

</header>

<!-- header section ends -->

<div class="kk">
<section class="appointment" id="appointment">

</section>





<!-- Doctor Registartion Full Section Start -->
<div class="container" id="container">
				<div class="form-container  sign-up-container">
				<form method="post" action="doctorlogsign.php">
					<div class="header2">Sign Up</div>
					<div class="social__media__container">
						<a href="https://www.facebook.com/SWE480/" target="_blank" class="social codepen">
							<i class="fa-brands fa-codepen"></i>
						</a>
						<a href="#" class="social google">
							<i class="fa-brands fa-google"></i>
						</a>
						<a href="https://www.facebook.com/SWE480/"  target="_blank" class="social instagram">
							<i class="fa-brands fa-instagram"></i>
						</a>
					</div>
					  <span class="under__social">
						 <a href="#" class="link signin-link">or use your email for registration
                        </a>
					</span>
					<div class="button-input-group">
						<div class="group input-group">
						<input type="text" name="username" placeholder="Username" required>
					</div>
					<div class="group input-group">
						<input type="email" name="email" placeholder="Email" required>
					</div>
					<div class="group input-group">
						<input type="password" name="password_1" placeholder="Password" required pattern=".{8,}">
					</div>
					<div class="alert-text signup__alert">
						<span class="help__text">At least 8 character</span>
					</div>
					<div class="group input-group">
						<input type="password" name="password_2" placeholder="Confirm Password" required pattern=".{8,}">
					</div>

					<div class="group button-group">
						<button type="submit" class="signup-btn" name="dr_reg">Sign Up</button>
					</div>
					</div>
					
				</form>
			</div>



<!-- Doctor Registartion Section PHP Database Start -->
<?php
// connect to the database
// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'appointment_db');



<!-- Doctor Registartion Section PHP Database End -->
<!-- Doctor Registartion Full Section End -->













<!-- Doctor Login Full Section Start -->
			<div class="form-container  sign-in-container">
				<form method="post" action="doctorlogsign.php">
					<div class="header2">Sign In</div>
					<div class="social__media__container">
						<a href="https://codepen.io/Rittenhouse" target="_blank"  class="social codepen">
							<i class="fa-brands fa-codepen"></i>
						</a>
						<a href="#" class="social google">
							<i class="fa-brands fa-google"></i>
						</a>
						<a href="https://www.instagram.com/zaur.suleymnv/"  target="_blank"  class="social instagram">
							<i class="fa-brands fa-instagram"></i>
						</a>
					</div>
					 <span class="under__social">
						 <a href="#" class="link signup-link">or use your account</a>
					</span>
					
				<div class="button-input-group">
					<div class="group input-group">
						<input type="text" name="username" placeholder="Username" required>
					</div>
					<div class="group input-group">
						<input type="password" name="password" placeholder="Password" required pattern=".{8,}">
					</div>
					<div class="alert-text signup__alert">
						<span class="help__text">At least 8 character</span>
					</div>
					<div class="form-link forgot">
						<a href="#" class="login-link">Forgot your password?</a>
					</div>
					<div class="group button-group">
						<button type="submit" name="dr_log" class="signin-btn">Sign in</button>
					</div>
				</div>
				</form>
			</div>



<!-- Doctor Login Section PHP Database Start -->
<?php

if (isset($_POST['dr_log'])) {
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($conn, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}
?>
<!-- Doctor Login Section PHP Database End -->
<!-- Doctor Login Full Section End -->








	<!-- Doctor Registration  &  Login Errors Start -->		
<?php  if (count($errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>
	<!-- Doctor Registration  &  Login Errors End -->	
	
	
<!-- Doctor Registration  &  Login Slide Section Start -->
			<div class="overlay-container">
				<div class="overlay">
					<div class="overlay-panel overlay-left">
						<h1>Welcome Back!</h1>
						<p>Please login your personal info</p>
						
					<div class="group button-group">
						<button class="ghost" id="signIn">Sign in</button>
					</div>
					</div>
					
					<div class="overlay-panel overlay-right">
						<h1>Hello, Friend!</h1>
            <p>Enter your personal details and start your journey with us</p>
						
					<div class="group button-group">
						<button class="ghost" id="signUp">Sign up</button>
					</div>
					</div>
				</div>
			</div>
		</div>
</div>
<!-- Doctor Registration  &  Login Slide Section Start -->









<!-- Doctor Registration  &  Login Slide Section move JavaScript Start -->
<script src="testt_login10.js"></script>

        <script>
        const signUpButton = document.getElementById("signUp");
const signInButton = document.getElementById("signIn");
const container = document.getElementById("container");

signUpButton.addEventListener("click", () => {
  container.classList.add("right-panel-active");
});

signInButton.addEventListener("click", () => {
  container.classList.remove("right-panel-active");
});
</script>
<!-- Doctor Registration  &  Login Slide Section move JavaScript Start -->












<!-- footer section starts  -->
<section class="footer" id="contact">
   <h1 class="heading"> <span>Contact</span> Us </h1>

    <div class="box-container">

        <div class="box">
            <h3>our services</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i> dental care </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> message therapy </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> cardioloty </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> diagnosis </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> ambulance service </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +880 1568-879-478 </a>
            <a href="#"> <i class="fas fa-phone"></i> +880 1303-473-091 </a>
            <a href="mailto:healthschool247@gmail.com"> <i class="fas fa-envelope"></i> HealthSchool247@gmail.com </a>
            <a href="mailto:nafizulislam.swe@gmail.com"> <i class="fas fa-envelope"></i> NafizulIslam.swe@gmail.com </a>
            <a href="https://www.google.com/maps/place/Amina+Hospital/@24.2982253,89.07934,19.93z/data=!4m13!1m7!3m6!1s0x
            39fc1865e39031e7:0xeababc07e0970dc9!2sBonpara!3b1!8m2!3d24.2942372!4d89.0812158!3m4!1s0x39fc186ed5d9016b:0xd27
            7d90ecc5a4a78!8m2!3d24.2983948!4d89.0792862" target=”_blank”> <i class="fas fa-map-marker-alt"></i> Rajshahi, Bangladesh - 6430 </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#" target=”_blank”> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#" target=”_blank”> <i class="fab fa-linkedin"></i> Linkedin </a>
            <a href="#" target=”_blank”> <i class="fab fa-youtube"></i>YouTube </a>
            <a href="https://www.facebook.com/SWE480/" target=”_blank”> <i class="fab fa-facebook-f"></i> FaceBook </a>
            <a href="#" target=”_blank”> <i class="fab fa-instagram"></i> Instagram </a>
        </div>
    </div>
</section>
<!-- footer section ends -->





<!-- custom js file link  -->
<script src="js/script.js"></script>
</body>
</html>
