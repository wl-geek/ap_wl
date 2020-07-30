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
        $question = $_POST['question'];

        $sql = "INSERT INTO `faq` (`question`, `user_id`) VALUES ('$question','".$_SESSION['user_id']."')";
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

    <script type="text/javascript">
			function showMessage(){
				alert("Your question has been submitted successfully!");
			}
		</script>

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
    <h2 class="myH2" data-aos="fade-right">FAQ</h2>
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
					Ask Us A Question
				</span>

				<div class="wrap-input100 validate-input" data-validate = "Please enter your question">
					<textarea class="input100" name="question" placeholder="Your Question"></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" type="submit" id="btnShowMsg" value="Click Me!" onClick='showMessage()'>
							Send
					</button>
				</div>
			</form>
		</div>
	</div>

    </section>

    <div class="container" data-aos="fade-left">

                <div class="section-title text-center my-3" style="padding-top:20px">
                    <h1>Frequently Asked Questions for Air Pollution</h1>
                </div>
                </br></br>
                <div class="faq-item row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        <div class="accordion md-accordion" role="tablist"
                            aria-multiselectable="true">

                            <div class="card">

                                <!-- Card header -->
                                <div class="card-header" role="tab" id="headingTwo2">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1"
                                        href="#collapseTwo21" aria-expanded="false" aria-controls="collapseTwo21">
                                        <h5 class="mb-0" style="font-size:18px">
                                            What is the difference between air pollutants
                                            and toxic air pollutants? <i
                                                class="fas fa-angle-down rotate-icon  float-right"></i>
                                        </h5>
                                    </a>
                                </div>

                                <!-- Card body -->
                                <div id="collapseTwo21" class="collapse show" role="tabpanel" aria-labelledby="headingTwo21"
                                    data-parent="#accordionEx1">
                                    <div class="card-body" style="font-size:18px">
                                        Toxic air pollutants (or Hazardous Air Pollutants, HAPs) are different
                                        from air
                                        pollutants. Air toxics are known or suspected to cause cancer or other
                                        serious heath
                                        effects, such as damage to respiratory or nervous systems. Toxic air
                                        pollutants may
                                        exist as particulate matter or as vapors (gases). Air toxics include metals,
                                        particles,
                                        and certain vapors from fuels and other sources.
                                    </div>
                                </div>

                            </div>

                            <div class="card">

                                <!-- Card header -->
                                <div class="card-header" role="tab" id="headingThree31">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1"
                                        href="#collapseThree31" aria-expanded="false" aria-controls="collapseThree31">
                                        <h5 class="mb-0" style="font-size:18px"><i class="fas fa-angle-down rotate-icon  float-right"></i>
                                            What causes indoor air quality problems and
                                            how can I tell whether
                                            </br>I have a problem?

                                        </h5>
                                    </a>
                                </div>

                                <!-- Card body -->
                                <div id="collapseThree31" class="collapse" role="tabpanel"
                                    aria-labelledby="headingThree31" data-parent="#accordionEx1">
                                    <div class="card-body" style="font-size:18px">
                                        Indoor pollution sources that release gases or particles into the air are
                                        the
                                        primary cause of indoor air quality problems in homes. Inadequate
                                        ventilation can
                                        increase indoor pollutant levels by not bringing in enough outdoor air to
                                        dilute
                                        emissions from indoor sources and by not carrying indoor air pollutants out
                                        of the
                                        home. High temperature and humidity levels can also increase concentrations
                                        of some
                                        pollutants.
                                    </div>
                                </div>

                            </div>

                            <div class="card">

                                <!-- Card header -->
                                <div class="card-header" role="tab" id="headingThree32">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1"
                                        href="#collapseThree32" aria-expanded="false" aria-controls="collapseThree32">
                                        <h5 class="mb-0" style="font-size:18px">
                                            What are the two main issues related to
                                            ozone?
                                            <i class="fas fa-angle-down rotate-icon  float-right"></i>
                                        </h5>
                                    </a>
                                </div>

                                <!-- Card body -->
                                <div id="collapseThree32" class="collapse" role="tabpanel"
                                    aria-labelledby="headingThree32" data-parent="#accordionEx1">
                                    <div class="card-body" style="font-size:18px">
                                        Ozone, a molecule with three oxygen atoms, is at the core of two very
                                        different
                                        issues: stratospheric ozone depletion and ground-level ozone formation.
                                        </br>
                                        Stratospheric Ozone Depletion
                                        </br>
                                        About 90% of all ozone occurs in the ozone layer, a region of high
                                        concentrations
                                        approximately 15-40 kilometers (10-25 miles) above the Earth's surface, in
                                        the
                                        stratosphere. The ozone layer protects all life from ultraviolet radiation
                                        (UV) from
                                        the
                                        sun. Unfortunately, several chemicals used in air conditioning and certain
                                        industrial
                                        uses damage the ozone layer, allowing more UV to reach the Earth's surface.
                                        Since UV
                                        causes skin cancer, cataracts, and other harmful effects, ozone depletion
                                        will lead
                                        to
                                        increases in these problems. Increased UV can also lead to reduced crop
                                        yield and
                                        disruptions in the marine food chain. The ozone depletion web site explains
                                        EPA's
                                        programs to protect the ozone layer and other information related to ozone
                                        depletion. In
                                        particular, the ozone science page offers much more detail on ozone
                                        depletion, its
                                        causes and effects, and what the world is doing to fix the problem.
                                        </br>
                                        Ground-Level Ozone Formation
                                        </br>
                                        The same ozone molecules that protect us from UV high in the stratosphere
                                        can cause
                                        health problems for people and animals when they form near the Earth's
                                        surface.
                                        Ground-level ozone is formed when vehicle exhaust and some other chemicals
                                        commonly
                                        used
                                        in industry mix in strong sunlight. When these ozone concentrations get high
                                        enough,
                                        they can make breathing difficult, especially for people with asthma and
                                        other
                                        respiratory diseases. EPA's ozone mapping site provides information on ozone
                                        levels
                                        in
                                        many US cities. If you hear an ozone alert on the news, it means ozone
                                        levels in
                                        your
                                        area are very high that day, and you should try to stay indoors and not
                                        exercise
                                        vigorously until ozone levels drop again. EPA has several programs to reduce
                                        air
                                        pollution and ozone concentrations.
                                    </div>
                                </div>

                            </div>

                            <div class="card">

                                <!-- Card header -->
                                <div class="card-header" role="tab" id="headingThree33">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1"
                                        href="#collapseThree33" aria-expanded="false" aria-controls="collapseThree33">
                                        <h5 class="mb-0" style="font-size:18px">
                                            What can be done to prevent pollution?
                                            <i class="fas fa-angle-down rotate-icon float-right"></i>
                                        </h5>
                                    </a>
                                </div>

                                <!-- Card body -->
                                <div id="collapseThree33" class="collapse" role="tabpanel"
                                    aria-labelledby="headingThree33" data-parent="#accordionEx1">
                                    <div class="card-body" style="font-size:18px">
                                        Did you know that your home and office contribute to the greenhouse
                                        effect?
                                        Energy used in our everyday activities -- turning on electrical appliances,
                                        driving
                                        cars, and heating and cooling our homes -- is responsible for air pollution
                                        that
                                        contributes to climate change. Technologies are available today that can cut
                                        this
                                        energy use significantly and, at the same time, improve our quality of life.

                                        Preventing pollution is as easy as looking for the ENERGY STAR Exit EPA
                                        disclaimer
                                        Label. ENERGY STAR is already helping American homes, businesses, state and
                                        local
                                        governments and other organizations by reducing energy consumption,
                                        emissions of
                                        greenhouse gases and other harmful pollutants, and their associated energy
                                        costs.

                                        Other things you can do:
                                        <ul>
                                            <li>Make sure your computer and monitor power management settings are
                                                optimized,
                                                so they go into sleep mode when you're away from your desk</li>
                                            <li>Make sure someone in your office turns off the printer and copier at
                                                the
                                                end
                                                of the day</li>
                                            <li>Set your printers and copiers to automatically print on both sides
                                                -- it
                                                takes more energy to make a sheet of paper than to copy an image
                                                onto it
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>

                            <div class="card">

                                <!-- Card header -->
                                <div class="card-header" role="tab" id="headingThree34">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1"
                                        href="#collapseThree34" aria-expanded="false" aria-controls="collapseThree34">
                                        <h5 class="mb-0" style="font-size:18px">
                                            What is the definition for radiation?
                                            <i class="fas fa-angle-down rotate-icon float-right"></i>
                                        </h5>
                                    </a>
                                </div>

                                <!-- Card body -->
                                <div id="collapseThree34" class="collapse" role="tabpanel"
                                    aria-labelledby="headingThree34" data-parent="#accordionEx1">
                                    <div class="card-body" style="font-size:18px">
                                        Radiation is energy given off by atoms in the form of particles or
                                        electromagnetic
                                        rays. There are actually many different types of electromagnetic radiation
                                        that have
                                        a
                                        range of energy levels. They form the electromagnetic spectrum and include
                                        radio and
                                        microwaves, heat, light, and x-rays.
                                    </div>
                                </div>
                            </div>

                            <div class="card">

                                <!-- Card header -->
                                <div class="card-header" role="tab" id="headingThree35">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1"
                                        href="#collapseThree35" aria-expanded="false" aria-controls="collapseThree35">
                                        <h5 class="mb-0" style="font-size:18px">
                                            What kinds of air pollution are produced by
                                            mobile sources?
                                            <i class="fas fa-angle-down rotate-icon float-right"></i>
                                        </h5>
                                    </a>
                                </div>

                                <!-- Card body -->
                                <div id="collapseThree35" class="collapse" role="tabpanel"
                                    aria-labelledby="headingThree35" data-parent="#accordionEx1">
                                    <div class="card-body" style="font-size:18px">
                                        Combustion of fuels can cause the release of hydrocarbons (HC), carbon
                                        monoxide
                                        (CO),
                                        oxides of nitrogen (NOx), particulate matter (PM), toxics, sulfur dioxide
                                        (SO2), and
                                        greenhouse gases such as carbon dioxide (CO2) and nitrous oxide (N2O).
                                        Mobile
                                        sources
                                        produce air pollution from exhaust emissions, as well as evaporative
                                        emissions and
                                        refueling losses from gasoline engines. The type and amount of pollution
                                        depends on
                                        many
                                        factors: the type of engine or vehicle (e.g., passenger car, heavy-duty
                                        truck, lawn
                                        mower, locomotive, etc.); the type of fuel used (e.g., gasoline, diesel, or
                                        alternative
                                        fuels); the type and condition of emission control devices (e.g., catalytic
                                        converters);
                                        and how the engine is used/run. For example, diesel engines used in trucks,
                                        buses,
                                        locomotives, and ships tend to emit more NOx and PM than gasoline engines.
                                        Engines
                                        with
                                        catalytic converters (e.g., passenger cars) emit much less HC, CO, NOx, and
                                        toxics
                                        than
                                        similar engines without catalysts (i.e., the catalytic converter is an
                                        important
                                        pollution control device to reduce exhaust emissions).
                                    </div>
                                </div>

                            </div>


                            <div class="card">

                                <!-- Card header -->
                                <div class="card-header" role="tab" id="headingThree36">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1"
                                        href="#collapseThree36" aria-expanded="false" aria-controls="collapseThree36">
                                        <h5 class="mb-0" style="font-size:18px">
                                            How is pollution affecting what we see?
                                            <i class="fas fa-angle-down rotate-icon float-right"></i>
                                        </h5>
                                    </a>
                                </div>

                                <!-- Card body -->
                                <div id="collapseThree36" class="collapse" role="tabpanel"
                                    aria-labelledby="headingThree36" data-parent="#accordionEx1">
                                    <div class="card-body" style="font-size:18px">
                                        Visibility impairment occurs as a result of the scattering and absorption
                                        of light
                                        by
                                        particles and gases in the atmosphere. It is most simply described as the
                                        haze which
                                        obscures the clarity, color, texture, and form of what we see. The same
                                        particles
                                        which
                                        are linked to serious health effects [sulfates, nitrates, organic carbon,
                                        soot
                                        (elemental carbon), and soil dust] can significantly affect our ability to
                                        see.
                                    </div>
                                </div>

                            </div>

                            <div class="card">

                                <!-- Card header -->
                                <div class="card-header" role="tab" id="headingThree37">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1"
                                        href="#collapseThree37" aria-expanded="false" aria-controls="collapseThree37">
                                        <h5 class="mb-0" style="font-size:18px"><i class="fas fa-angle-down rotate-icon float-right"></i>
                                            What is the difference between urban outdoor air pollution and indoor
                                            </br>air
                                            pollution? Does urban air outdoor pollution contribute to indoor air
                                            pollution? And vice-versa?

                                        </h5>
                                    </a>
                                </div>

                                <!-- Card body -->
                                <div id="collapseThree37" class="collapse" role="tabpanel"
                                    aria-labelledby="headingThree37" data-parent="#accordionEx1">
                                    <div class="card-body" style="font-size:18px">
                                        Most air pollution is man-made and derives from poor combustion of fossil or
                                        biomass fuels (e.g. exhaust fumes from cars, furnaces or wood stoves).</br>

                                        Urban outdoor air pollution refers to the air pollution experienced by
                                        populations living in and around urban areas (i.e. cities).</br>

                                        Indoor air pollution refers to the pollutants found in indoors. The main cause
                                        of indoor air pollution is inefficient fuel combustion from rudimentary
                                        technologies used for cooking, heating and lighting. There are also natural
                                        indoor air pollutants, like radon, and chemical pollutants from building
                                        materials and cleaning products that also impact t health.</br>

                                        Urban outdoor air pollution can be an important contributor to the indoor air
                                        quality, especially in highly ventilated homes, or in homes near pollution
                                        sources. Similarly, indoor air pollution sources may also be important causes of
                                        urban outdoor air pollution, especially in cities where many homes use biomass
                                        fuels or coal for heating and cooking.
                                    </div>
                                </div>

                            </div>

                            <div class="card">

                                <!-- Card header -->
                                <div class="card-header" role="tab" id="headingThree38">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1"
                                        href="#collapseThree38" aria-expanded="false" aria-controls="collapseThree38">
                                        <h5 class="mb-0" style="font-size:18px"><i class="fas fa-angle-down rotate-icon float-right"></i>
                                            What can I do to protect my health and the health of my family? How
                                            </br> can I
                                            find out about the health risks posed by air pollution in my community?
                                            
                                        </h5>
                                    </a>
                                </div>

                                <!-- Card body -->
                                <div id="collapseThree38" class="collapse" role="tabpanel"
                                    aria-labelledby="headingThree38" data-parent="#accordionEx1">
                                    <div class="card-body" style="font-size:18px">
                                        You can better protect yourself and those in your care by understanding how air
                                        pollution affects your health, and by checking the Air Quality Health Index on a
                                        regular basis to find out what the health risks from air pollution are in your
                                        community.</br>

                                        To check the Air Quality Health Index reading for your community and to learn
                                        more about how air pollution can affect your health, visit the Ministry of the
                                        Environment, Conservation and Parks web site.</br>

                                        We can protect our health by appropriately changing our behaviour to reduce our
                                        exposure to air pollutants when air quality worsens.</br>

                                        Ontarians can assess whether they are at greater risk based on their age, health
                                        status and level of outdoor physical activity, and if they are experiencing
                                        symptoms.</br>

                                        When the Air Quality Health Index reading rises, you can decide whether you or
                                        someone in your family needs to:</br>
                                        <ul>
                                            <li>Reduce or reschedule outdoor physical activities</li>
                                            <li>Monitor possible symptoms, such as difficulty breathing, coughing or
                                                irritated
                                                eyes</li>
                                            <li> Follow a doctor’s advice to manage existing conditions such as heart or
                                                lung
                                                disease</li>
                                        </ul></br>
                                        You can also use the index as a reminder of the need to take action to reduce
                                        air pollution.
                                    </div>
                                </div>

                            </div>

                        <!-- Accordion card -->
                        </div>
                        <!-- Accordion wrapper -->
                    </div>
                    <div class="col-lg-2"></div>
                </div>
            </div>

        </section><!-- End About Section -->
    </br></br></br></br></br></br>



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
    <!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->

	<script src="../js/wl/main.js"></script>
</body>
</html>