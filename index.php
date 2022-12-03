

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

<!-- home section starts  -->

<section class="home" id="home">

    <div class="image">
        <img src="image/home-img.svg" alt="">
    </div>

    <div class="content">
        <h3>stay safe, stay healthy</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem sed autem vero? Magnam, est laboriosam!</p>
        <a href="#appointment" class="btn"> Book Appointment <span class="fas fa-chevron-right"></span> </a>
    </div>

</section>

<!-- home section ends -->

<!-- icons section starts  -->

<section class="icons-container">

    <div class="icons">
        <i class="fas fa-user-md"></i>
        <h3>140+</h3>
        <p>doctors at work</p>
    </div>

    <div class="icons">
        <i class="fas fa-users"></i>
        <h3>1040+</h3>
        <p>satisfied patients</p>
    </div>

    <div class="icons">
        <i class="fas fa-procedures"></i>
        <h3>500+</h3>
        <p>bed facility</p>
    </div>

    <div class="icons">
        <i class="fas fa-hospital"></i>
        <h3>80+</h3>
        <p>available hospitals</p>
    </div>

</section>

<!-- icons section ends -->

<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-notes-medical"></i>
            <h3>free checkups</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-ambulance"></i>
            <h3>24/7 ambulance</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-burn"></i>
            <h3>Blood Donation</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-user-md"></i>
            <h3>expert doctors</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-pills"></i>
            <h3>medicines</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-procedures"></i>
            <h3>bed facility</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-heartbeat"></i>
            <h3>total care</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>

<!-- services section ends -->

<!-- doctors section starts  -->

<section class="doctors" id="doctors">
<div class="row">
        <form action="">
        <h2>Here, Just MBBS Doctors can Login or Signup</h2>
            <a href="doctorlogsign.php" class="btn">DR. SIGNIN or SIGNUP</a>
        </form>
    </div>

    <h1 class="heading"> our <span>doctors</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/doc-1.jpg" alt="">
            <h3>john deo</h3>
            <span>expert doctor</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/doc-2.jpg" alt="">
            <h3>john deo</h3>
            <span>expert doctor</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/doc-3.jpg" alt="">
            <h3>john deo</h3>
            <span>expert doctor</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/doc-4.jpg" alt="">
            <h3>john deo</h3>
            <span>expert doctor</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/doc-5.jpg" alt="">
            <h3>john deo</h3>
            <span>expert doctor</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/doc-6.jpg" alt="">
            <h3>john deo</h3>
            <span>expert doctor</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

    </div>

</section>

<!-- doctors section ends -->

<!-- Appointment booking section starts   -->

<section class="appointment" id="appointment">

    <h1 class="heading"> <span>book</span> now </h1>    

    <div class="row">

        <div class="image">
            <img src="image/book-img.svg" alt="">
        </div>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <?php
        if (isset($message)){
            foreach($message as $message){
            echo '<p class="message">'.$message.'</p>';
            }
        }
        ?>
            <h3>book appointment</h3>
            <input type="text" name="name"  placeholder="Patient Name" class="box" required>
            <input type="number" name="number"  placeholder="Your Phone Number" class="box" required>
            <input type="email" name="email"  placeholder="Your Email" class="box" required>
<!-- Gender DropDown Box Start -->
            <select name="gender" class="box2" required>
                <option value=""> --Patient Gender--</option>
                <option value="Male"> Male</option>
                <option value="Female"> Female</option>
                <option value="Others"> Others</option>
            </select>
<!-- Gender DropDown Box End -->

<!-- District DropDown Box Start -->
<select name="district" class="box2" required>
                <option value=""> --District--</option>
                <option value="Dhaka"> Dhaka</option>
                <option value="Rajshahi"> Rajshahi Rajshahi</option>
                <option value="Rangpur"> Rangpur</option>
                <option value="Khulna"> Khulna</option>
                <option value="Barishal"> Barishal</option>
                <option value="Chitagong"> Chitagong</option>
                <option value="Sylhet"> Sylhet</option>
                <option value="Mymenshing"> Mymenshing</option>
            </select><br>
            <script>
                $(document).ready(function (){
                    $(".box2").chosen();
                });
                </script>
<!-- District DropDown Box End -->

<!-- Department DropDown Box Start -->
<select name="disease" id="disease" class="box2" required>
                <option value=""> --Disease--</option>
                <option value="Anaemia"> Anaemia - রক্তাল্পতা</option>
                <option value="Arthritis"> Arthritis - বাত </option>
                <option value="Asthma"> Asthma - হাঁপানি </option>
                <option value="Bald"> Bald - টাক </option>
                <option value="Belching"> Belching - শ্বাসনালী </option>
                <option value="Bleeding"> Bleeding - রক্তক্ষরণ </option>
                <option value="Blind"> Blind - অন্ধ </option>
                <option value="Cancer"> Cancer - ক্যান্সার</option>
                <option value="Catarrh"> Catarrh - ছত্রাক </option>
                <option value="Cholera"> Cholera - কলেরা </option>
                <option value="Cough"> Cough - কাশি </option>
                <option value="Disease"> Disease - রোগ </option>
                <option value="Dumb"> Dumb - বোবা </option>
                <option value="Dwarf"> Dwarf - বামন </option>
                <option value="Epilepsy"> Epilepsy - মৃগী </option>
                <option value="Fever"> Fever - জ্বর </option>
                <option value="Headache"> Headache - মাথাব্যথা </option>
                <option value="Hurt"> Hurt - আহত </option>
                <option value="Itch"> Itch - চুলকান </option>
                <option value="Lame"> Lame - পঙ্গু </option>
                <option value="Lean"> Lean - রোগা </option>
                <option value="Loose stool"> Loose Stool - আলগা মল </option>
                <option value="Mad"> Mad - পাগল </option>
                <option value="Measles"> Measles - হাম </option>
                <option value="Obesity"> Obesity - স্থূলত্ব </option>
                <option value="Pain"> Pain - ব্যথা </option>
                <option value="Pimple"> Pimple - ব্রণ </option>
                <option value="Sneezing"> Sneezing - হাঁচি </option>
                <option value="Spittle"> Spittle - থুতু </option>
                <option value="Stomachache"> Stomachache - পেট ব্যথা </option>
                <option value="Sweat"> Sweat - ঘাম </option>
            </select>
<!-- Department DropDown Box End -->

<!-- Doctor DropDown Box Start -->
<select name="doctor" class="box2" required>
                <option value=""> --Doctor--</option>
                <option value="Nayem"> Nayem Rajshahi Rajshahi Rajshahi </option>
                <option value="Noyon"> Noyon </option>
                <option value="Nafiz"> Nafiz </option>
                <option value="Shakib"> Shakib </option>

            </select>
<!--
                <script>
                    function populate(disease,doctor) // d1=Disease & d2=Doctor //
                    {
                        var disease = document.getElementById(disease);
                        var doctor = document.getElementById(doctor);

                        doctor.innerHTML = "";
                        if(disease.value == "Ästhma")
                        {
                            var optionArray = ['nayem|Nayem','noyon|Noyon'];
                        }
                        else if(disease.value == "Pimple")
                        {
                            var optionArray = ['shakib|Shakib','nafiz|Nafiz'];
                        }
                        for(var option in optionArray)
                        {
                            var pair = optionArray[option].split("|");
                            var newoption = document.createElement("option");

                            newoption.value = pair[0];
                            newoption.innerHTML=pair[1];
                            doctor.option.add(newoption);
                        }
                    }
                    </script>
-->
<!-- Doctor DropDown Box End -->







            <input type="datetime-local" name="date" class="box">
            <input type="submit" value="Book Now" name="submit" class="btn">
        </form>

    </div>

</section>

<!-- booking section ends -->

<!-- review section starts  -->

<section class="review" id="review">
    
    <h1 class="heading"> client's <span>review</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/pic-1.png" alt="">
            <h3>john deo</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam sapiente nihil aperiam? Repellat sequi nisi aliquid perspiciatis libero nobis rem numquam nesciunt alias sapiente minus voluptatem, reiciendis consequuntur optio dolorem!</p>
        </div>

        <div class="box">
            <img src="image/pic-2.png" alt="">
            <h3>john deo</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam sapiente nihil aperiam? Repellat sequi nisi aliquid perspiciatis libero nobis rem numquam nesciunt alias sapiente minus voluptatem, reiciendis consequuntur optio dolorem!</p>
        </div>

        <div class="box">
            <img src="image/pic-3.png" alt="">
            <h3>john deo</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam sapiente nihil aperiam? Repellat sequi nisi aliquid perspiciatis libero nobis rem numquam nesciunt alias sapiente minus voluptatem, reiciendis consequuntur optio dolorem!</p>
        </div>

    </div>

</section>

<!-- review section ends -->

<!-- blogs section starts  -->

<section class="blogs" id="blogs">

    <h1 class="heading"> our <span>blogs</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="image/blog-1.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 1st may, 2021 </a>
                    <a href="#"> <i class="fas fa-user"></i> by admin </a>
                </div>
                <h3>blog title goes here</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, eius.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image/blog-2.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 1st may, 2021 </a>
                    <a href="#"> <i class="fas fa-user"></i> by admin </a>
                </div>
                <h3>blog title goes here</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, eius.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image/blog-3.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 1st may, 2021 </a>
                    <a href="#"> <i class="fas fa-user"></i> by admin </a>
                </div>
                <h3>blog title goes here</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, eius.</p>
                <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>

    </div>

</section>

<!-- blogs section ends -->

<!-- about section starts  -->

<section class="about" id="about">
    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img src="image/about-img.svg" alt="">
        </div>

        <div class="content">
            <h3>we take care of your healthy life</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure ducimus, quod ex cupiditate ullam in assumenda maiores et culpa odit tempora ipsam qui, quisquam quis facere iste fuga, minus nesciunt.</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus vero ipsam laborum porro voluptates voluptatibus a nihil temporibus deserunt vel?</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>

<!-- about section ends -->

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

    <div class="credit"><footer>&copy; 2022 HealthSchool24.com | All rights reserved | Created by-<a href="https://www.facebook.com/SWE480/" target=”_blank”><span> Nafizul Islam Noyon</span></a></footer>   </div>
</section>

<!-- footer section ends -->


  <!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
    
   

</body>
</html>
