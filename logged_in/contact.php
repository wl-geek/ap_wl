<?php 
    session_start();
    require_once('../db/config.php');
    if(!isset($_SESSION["user_id"])) {
        header("Location:../index.php");
    }
    $sql = "SELECT * FROM user WHERE user_id=".$_SESSION['user_id'];
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $contentmessage = $_POST['message'];

        $sql = "INSERT INTO `contact` (`name`, `email`, `subject`, `message`) VALUES ('$name','$email','$subject','$contentmessage')";
        mysqli_query($con,$sql);
        header('location:index.php');
    }    

    // include('header.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Air Pollution by WL</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.css'/>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover.css'/>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.0/animate.css'/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.css'/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="../css/wl/nav.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/3.11.3/less.min.js" type="text/javascript"></script>
    <script src='http://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.js'></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../css/wl/main.css">
  </head>
  <body>

  <nav class="nav">
    <div class="container">
        <div class="logo" data-aos="fade-down">
            <a href="index.php">YANGON</a>
        </div>
        <div id="mainListDiv" class="main_list" data-aos="fade-down">
            <ul class="navlinks">
                <li><a href="index.php">Home</a></li>
                <li><a href="aboutus.php">About</a></li>
                <li><a href="map.php">Map</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="faq.php">FAQ</a></li>
            </ul>
        </div>
        <span class="navTrigger">
            <i></i>
            <i></i>
            <i></i>
        </span>
    </div>
</nav>

<!-- Jquery needed -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="../js/wl/nav.js"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>

<!-- Function used to shrink nav bar removing paddings and adding black background -->
<script>
    $(window).scroll(function() {
        if ($(document).scrollTop() > 50) {
            $('.nav').addClass('affix');
            $('.navTrigger').addClass('affixtrigger');
            console.log("OK");
        } else {
            $('.nav').removeClass('affix');
            $('.navTrigger').removeClass('affixtrigger');
        }
    });
</script>
<section class="home">
    <section style = "padding-top:300px;"></section>
    <h2 class="myH2" data-aos="fade-right">Contact Us</h2>
    <div id="buttons" data-aos="fade-left">
      <a href="../user/index.php" class="btn login">USER PROFILE</a>
      <a href="../logout.php" class="btn btn-logout">LOG OUT</a>
      <!-- <a href="user/register.php" class="btn reg">SIGN UP<span class="tooltiptext" style="font-size:15px;">Sign up now to get<br>free pollution testing kit!</span></a> -->
    </div>
    <p class="myP" data-aos="fade-right">Scroll down</p>
    <p style="text-align: center" data-aos="fade-right">
        <i class="glyphicon glyphicon-chevron-down"></i>
    </p>
</section>

<section>



	<div class="container-contact100">

		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action="" method="post" data-aos="fade-left">
				<span class="contact100-form-title">
					Send Us A Message
				</span>

				<div class="wrap-input100 validate-input" data-validate="Please enter your name">
					<input class="input100" type="text" name="name" placeholder="Full Name">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Please enter your email">
					<input class="input100" type="text" name="email" placeholder="E-mail">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Please enter your subject">
					<input class="input100" type="text" name="subject" placeholder="Subject">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Please enter your message">
					<textarea class="input100" name="message" placeholder="Your Message"></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" type="submit">
							Send
					</button>
				</div>
			</form>
		</div>
	</div>

    </section>


  <section class=" py-5 text-white" style="font-size:15px; background-color:black; overflow:hidden;">
        <!-- add 'footer' snippet in css -->
        <div class="footer-v1 bg-img" data-aos="fade-up">
            <div class="footer no-margin">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="headline"><p>About Us</p></div>
                            <p>Our website displays the real-time air quality index and weather forecast in Yangon, 
                    and aims to raise awareness of air pollution and spread importance of air quality around us.</p>
                        </div>
                        <div class="col-md-3">
                            <div class="headline"><p>Resources</p></div>
                            <ul class="list-unstyled link-list">
                                <li><a href="aboutus.php">About</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                  <div class="headline"><p>Support</p></div>
                  <address>
                    <ul class="list-unstyled link-list">
                      <li><a href="contact.php">Contact Us</a></li>
                      <li>
                        <a href="#"><i class="fa fa-envelope"></i>wailin32000@gmail.com</a>
                      </li>
                    </ul>
                  </address>
                </div>
                        <div class="col-md-3">
                            <div class="headline"><p>Website</p></div>
                            <ul class="list-unstyled link-list">
                    <li><a href="#">About Us</a></li>
                    <li> <a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Use</a></li>
                    <li><a href="#">FAQs</a></li>
                  </ul>
                        </div>
                    </div>

            <div class="row text-center">
                <div class="col-md-12">
                    <p style="font-size:50px;" id="cursor">
                        <a href="https://www.facebook.com/wailin32000" title="Facebook" class="social" target="_blank"><i class="fab fa-facebook-square"></i></a>&nbsp;
                        <a href="https://twitter.com/Wailin92" title="Twitter" class="social" target="_blank"><i class="fab fa-twitter-square"></i></a>&nbsp;
                        <a href="https://www.linkedin.com/in/wai-l-7b4364142/" title="Linkedin" class="social" target="_blank"><i class="fab fa-linkedin"></i></a>
                    </p>				
				</div>
                </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-12 py-2">
                    <p>@copyrights reserved by Wai Lin</p>
                </div>
            </div>
        </div>
    </section>
    
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js'></script>
    <script src="../js/bootstrap.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.js'></script>
    <script>
        $(document).ready(function () {
            $('.card').hover(function () {
                   $(this).attr('style','border-color:purple; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);')
                //    $(this).attr('style','box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);')
                    
                }, function () {
                    $(this).attr('style','box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);')
                }
            );
        });

    </script>
    <!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->

	<script src="../js/wl/main.js"></script>
</body>
</html>