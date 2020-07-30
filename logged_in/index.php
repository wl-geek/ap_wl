<?php 
    // include_once('db/config.php');
    session_start();
    require_once('../db/config.php');
    if(!isset($_SESSION["user_id"])) {
        header("Location:../index.php");
    }
    $sql = "SELECT * FROM user WHERE user_id=".$_SESSION['user_id'];
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);

    include('header.php');
?>

<section class="home">
    <section style = "padding-top:300px;"></section>
    <h2 class="myH2" data-aos="fade-right">Welcome <?php echo $_SESSION['first_name'];?> <?php echo $_SESSION['surname'];?>!</h2>
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

<section class="text-white pt-4 pb-5" style="background-color: black;">
<section data-aos="fade-left">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mt-5">
                <h1>Real-time Yangon Air Quality Index & Weather Forecast</h1>
                <hr my-1>
            </div>
        </div>
    </div>
</section>

<section data-aos="fade-right">
    <div class="container my-5" style="padding-top:20px; padding-bottom:40px">
        <div class="row">
            <div class="col-md-4 text-center">
                <div  id='my-container'></div>  
                <script  type="text/javascript"  charset="utf-8">  
                _aqiFeed({  city:"yangon",  lang:"en",  callback:function(aqi){  
                  $("#my-container").html(aqi.details);  
                }  });  
                </script>
                <p style="padding-top:4px;">Source: https://aqicn.org</p>
            </div>
            <div class="col-md-7 text-center">
                <a class="weatherwidget-io" href="https://forecast7.com/en/16d8796d20/yangon/" data-label_1="YANGON" data-label_2="WEATHER" data-font="Roboto" data-theme="candy" >YANGON WEATHER</a>
                <script>
                    !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
                </script>
            </div>
        </div>
    </div>
</section>
</section>

<section style="padding-top:30px; padding-bottom:30px">
    <div class="container mt-4 mb-5">
        <div class="row py-5">
            <div class="col-md-6" data-aos="fade-right">
                <img src="../img/pic1.jpg" width="100%" class="py-5"/>
            </div>
            <div class="col-md-6" data-aos="fade-right">
                <h2 style="padding-top:18px">What is Air Pollution?</h2>
                <p class="pt-4" style="font-size:20px">Air pollution is a mix of particles and gases that can reach harmful concentrations both outside and indoors.
                 Its effects can range from higher disease risks to rising temperatures...
                </p>
                <a class="btn login" href="aboutus.php" role="button" style="margin-left:150px">Read More</a>
            </div>
        </div>
    </div>
</section>
<section class="text-white" style="background-color: black; padding-top:30px; padding-bottom:30px;">
    <div class="container">
        <div class="row py-5">
            <div class="col-md-6" data-aos="fade-left">
                <h2 style="padding-top:50px">How can Air Pollution affect us?</h2>
                <p class="pt-4" style="font-size:20px">We release a variety of chemicals into the atmosphere when we burn the fossil fuels we use every day. 
                We breathe air to live and what we breathe has a direct impact on our health...
                </p>
                <a class="btn login" href="aboutus.php" role="button" style="margin-left:150px">Read More</a>
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <img src="../img/pic2.jpg" width="100%" class="py-5"/>
            </div>
        </div>
    </div>
</section>

<section data-aos="fade-right">
    <div class="container mb-4">
        <div class="row">
            <div class="col-md-12 text-center">
                <br>
                <h1>Our Partners</h1>
                <br>
            </div>
        </div>
    </div>
</section>

<section data-aos="fade-left">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    <img src="../img/who.png" alt="" style="height:270px;">
                <div class="card-body" style="background-color:black; color:white;">
                    <h3 class="card-title">World Health Organization</h3>
                    <br>
                    <p class="card-text" style="font-size:15px">We are building a better, healthier future for people all over the world. 
                    Together we strive to combat both communicable and noncommunicable diseases...</p>
                <div class="text-warning">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                </div>
                    <a href="https://www.who.int/health-topics/air-pollution#tab=tab_1" class="btn login pull-right" target="_blank">More Info</a>
                </div>
                </div>
            </div>
        <div class="col-md-4">
                <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    <img src="../img/iqair.jpg" alt="" style="height:270px;">
                <div class="card-body" style="background-color:black; color:white;">
                    <h3 class="card-title">IQ Air</h3>
                    <br>
                    <p class="card-text" style="font-size:15px">IQAir is a Swiss air quality technology company, specializing in protection against airborne pollutants, 
                    developing air quality monitoring and air cleaning products...</p>
                <div class="text-warning">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                </div>
                    <a href="https://www.iqair.com/us/myanmar/yangon" class="btn login pull-right" target="_blank">More Info</a>
                </div>
                </div>
            </div>
        <div class="col-md-4">
                <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    <img src="../img/aqy.jpg" alt="" style="height:270px;">
                <div class="card-body" style="background-color:black; color:white;">
                    <h3 class="card-title">Air Quality Yangon</h3>
                    <br>
                    <p class="card-text" style="font-size:15px">AQY measures and calculates the quality of air in Yangon, 
                    and aims to help citizens understand the condition and importance of air around us...</p>
                <div class="text-warning">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                </div>
                    <a href="https://www.facebook.com/airqualityyangon/" class="btn login pull-right" target="_blank">More Info</a>
                </div>
                </div>
        </div>
    </div>
</section>

<?php include('footer.php');?>