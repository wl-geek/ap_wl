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
    <h2 class="myH2" data-aos="fade-right">About Air Pollution</h2>
    <div id="buttons" data-aos="fade-left">
        <a href="../user/index.php" class="btn login">USER PROFILE</a>
        <a href="../logout.php" class="btn btn-logout">LOG OUT</a>
    </div>
    <p class="myP" data-aos="fade-right">Scroll down</p>
    <p style="text-align: center" data-aos="fade-right">
        <i class="glyphicon glyphicon-chevron-down"></i>
    </p>
</section>

<section>
    <div class="container mt-4 mb-5">
        <div class="row py-5">
            <div class="col-md-6" data-aos="fade-right">
                <img src="../img/pic1.jpg" width="100%" class="py-5"/>
            </div>
            <div class="col-md-6" data-aos="fade-right">
                <h2 style="padding-top:18px">What is Air Pollution?</h2>
                <p class="pt-4" style="font-size:20px">Air pollution is a mix of particles and gases that can reach harmful concentrations both outside and indoors. Its effects can range from 
                higher disease risks to rising temperatures. Soot, smoke, mold, pollen, methane, and carbon dioxide are a just few examples of common pollutants...
                </p>
                <a class="btn login" href="https://www.nationalgeographic.com/environment/global-warming/pollution/#:~:text=Air%20pollution%20is%20a%20mix%20of%20particles%20and,one%20measure%20of%20outdoor%20air%20pollution%20is%20" role="button" style="margin-left:150px">Read More</a>
            </div>
        </div>
    </div>
</section>
<section class="text-white" style="background-color: black;">
    <div class="container">
        <div class="row py-5">
            <div class="col-md-6" data-aos="fade-left">
                <h2 style="padding-top:50px">Causes of air pollution</h2>
                <p class="pt-4" style="font-size:20px">These are the 5 main causes of Air Pollution:</p>
                <ol style="font-size:20px">
                    <li>Emissions From Industrial Plants and Manufacturing Activities</li>
                    <li>Combustion From Fossil Fuels</li>
                    <li>Farming Chemicals and Household Products</li>
                    <li>Natural Causes of Air Pollution</li>
                    <li>Other Causes</li>
                    <li>...</li>
                </ol>
                <a class="btn login" href="https://www.eartheclipse.com/pollution/primary-causes-of-air-pollution.html#:~:text=Various%20Causes%20of%20Air%20Pollution%201%20Emissions%20From,potential%20to%20cause%20air%20pollution.%20More%20items...%20" role="button" style="margin-left:150px">Read More</a>
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <img src="../img/pic3.jpg" width="100%" class="py-5"/>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container mt-4 mb-5">
        <div class="row py-5">
            <div class="col-md-6" data-aos="fade-right">
                <img src="../img/pic2.jpg" width="100%" class="py-5"/>
            </div>
            <div class="col-md-6" data-aos="fade-right">
                <h2 style="padding-top:18px">How can Air Pollution affect us?</h2>
                <p class="pt-4" style="font-size:20px">Air Pollution can affect us in different ways including:
                </p>
                <ol style="font-size:20px">
                    <li>Coughing and wheezing</li>
                    <li>Risk of Cancer</li>
                    <li>Respiratory inflammation</li>
                    <li>Higher risk for asthma and other respiratory diseases</li>
                    <li>higher incidents of heart problems</li>
                    <li>...</li>
                </ol>
                <a class="btn login" href="https://www.theworldcounts.com/stories/How-Does-Pollution-Affect-Humans" role="button" style="margin-left:150px">Read More</a>
            </div>
        </div>
    </div>
</section>
<section class="text-white" style="background-color: black;">
    <div class="container">
        <div class="row py-5">
            <div class="col-md-6" data-aos="fade-left">
                <h2 style="padding-top:50px">How can we reduce air pollution?</h2>
                <p class="pt-4" style="font-size:20px">The 10 best ways to reduce Air Pollution are:
                </p>
                <ol style="font-size:20px">
                    <li>Using public transports</li>
                    <li>Turn off the lights when not in use</li>
                    <li>Use of fans instead of Air Conditioner</li>
                    <li>No to plastic bags</li>
                    <li>Reduction of forest fires and smoking</li>
                    <li>...</li>
                </ol>
                <a class="btn login" href="https://www.aqi.in/blog/10-best-ways-to-reduce-air-pollution/" role="button" style="margin-left:150px">Read More</a>
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <img src="../img/pic4.jpg" width="100%" class="py-5"/>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row" data-aos="fade-right">
            <div class="col-md-12 text-center mt-5">
                <h1>Air Quality Health Index (AQHI)</h1>
            </div>
        </div>
    </div>
</section>

<section class="mb-5">
    <div class="container my-3">
        <div class="row py-5" data-aos="fade-left">
            <div class="col-md-12">
                <table style="width: 100%; overflow: hidden; box-shadow: 0 0 20px rgba(0,0,0,0.1); border-style: solid; border-color:black;"> 
                    <thead> 
                        <tr style="border-style: solid; border-color:black; text-align:center;"> 
                            <td style="padding: 15px; border-style: solid; border-color:black; font-size:20px">AQI</td>
                            <td style="padding: 15px; border-style: solid; border-color:black; font-size:20px">Air Pollution Level</td>
                            <td style="padding: 15px; border-style: solid; border-color:black; font-size:20px">Health Implications</td>
                            <td style="padding: 15px; border-style: solid; border-color:black; font-size:20px">Cautionary Statement (for PM2.5)</td>
                        </tr> 
                    </thead> 
                    <tbody>
                        <tr style="background-color:#009966; border-style: solid; border-color:black; color:black;"> 
                            <td style="padding: 15px; border-style: solid; border-color:black; font-size:15px" nowrap="true">0 - 50</td> 
                            <td style="padding: 15px; border-style: solid; border-color:black; font-size:15px">Good</td> 
                            <td style="padding: 15px; border-style: solid; border-color:black; font-size:15px">Air quality is considered satisfactory, and air pollution poses little or no risk</td> 
                            <td style="padding: 15px; border-style: solid; border-color:black; font-size:15px">None</td> 
                        </tr> 
                        <tr style="background-color:#ffde33; border-style: solid; border-color:black; color:black;"> 
                            <td style="padding: 15px; border-style: solid; border-color:black; font-size:15px" nowrap="true">51 -100</td> 
                            <td style="padding: 15px; border-style: solid; border-color:black; font-size:15px">Moderate</td> 
                            <td style="padding: 15px; border-style: solid; border-color:black; font-size:15px">Air quality is acceptable; however, for some pollutants there may be a moderate health concern for a very small number of people who are unusually sensitive to air pollution.</td> 
                            <td style="padding: 15px; border-style: solid; border-color:black; font-size:15px">Active children and adults, and people with respiratory disease, such as asthma, should limit prolonged outdoor exertion.</td> 
                        </tr> 
                        <tr style="background-color:#ff9933; border-style: solid; border-color:black; color:black;"> 
                            <td style="padding: 15px; border-style: solid; border-color:black; font-size:15px" nowrap="true">101-150</td> 
                            <td style="padding: 15px; border-style: solid; border-color:black; font-size:15px">Unhealthy for Sensitive Groups</td> 
                            <td style="padding: 15px; border-style: solid; border-color:black; font-size:15px">Members of sensitive groups may experience health effects. The general public is not likely to be affected.</td>
                            <td style="padding: 15px; border-style: solid; border-color:black; font-size:15px">Active children and adults, and people with respiratory disease, such as asthma, should limit prolonged outdoor exertion.</td> 
                        </tr> 
                        <tr style="background-color:#cc0033; border-style: solid; border-color:black; color:white;"> 
                            <td style="padding: 15px; border-style: solid; border-color:black; font-size:15px" nowrap="true">151-200</td> 
                            <td style="padding: 15px; border-style: solid; border-color:black; font-size:15px">Unhealthy</td> 
                            <td style="padding: 15px; border-style: solid; border-color:black; font-size:15px">Everyone may begin to experience health effects; members of sensitive groups may experience more serious health effects</td> 
                            <td style="padding: 15px; border-style: solid; border-color:black; font-size:15px">Active children and adults, and people with respiratory disease, such as asthma, should avoid prolonged outdoor exertion; everyone else, especially children, should limit prolonged outdoor exertion</td> 
                        </tr> 
                        <tr style="background-color:#660099; border-style: solid; border-color:black; color:white;"> 
                            <td style="padding: 15px; border-style: solid; border-color:black; font-size:15px" nowrap="true">201-300</td> 
                            <td style="padding: 15px; border-style: solid; border-color:black; font-size:15px">Very Unhealthy</td> 
                            <td style="padding: 15px; border-style: solid; border-color:black; font-size:15px">Health warnings of emergency conditions. The entire population is more likely to be affected.</td> 
                            <td style="padding: 15px; border-style: solid; border-color:black; font-size:15px">Active children and adults, and people with respiratory disease, such as asthma, should avoid all outdoor exertion; everyone else, especially children, should limit outdoor exertion.</td> 
                        </tr> 
                        <tr style="background-color:#7e0023; border-style: solid; border-color:black; color:white;"> 
                            <td style="padding: 15px; border-style: solid; border-color:black; font-size:15px" nowrap="true">300+</td> 
                            <td style="padding: 15px; border-style: solid; border-color:black; font-size:15px">Hazardous</td> 
                            <td style="padding: 15px; border-style: solid; border-color:black; font-size:15px">Health alert: everyone may experience more serious health effects</td> 
                            <td style="padding: 15px; border-style: solid; border-color:black; font-size:15px">Everyone should avoid all outdoor exertion</td> 
                        </tr> 
                    </tbody>
                </table>
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