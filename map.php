<?php include('header.php');
include_once('db/config.php');
?>
<section class="home">
    <section style = "padding-top:300px;"></section>
    <h2 class="myH2" data-aos="fade-right">Real-time Air Quality Map</h2>
    <div id="buttons" data-aos="fade-left">
      <a href="login.php" class="btn login">LOG IN</a>
      <a href="user/register.php" class="btn reg">SIGN UP<span class="tooltiptext" style="font-size:15px;">Sign up now to get<br>free pollution testing kit!</span></a>
    </div>
    <p class="myP" data-aos="fade-right">Scroll down</p>
    <p style="text-align: center" data-aos="fade-right">
        <i class="glyphicon glyphicon-chevron-down"></i>
    </p>
</section>
<section>
    <div class="container my-5">
        <div class="row" data-aos="fade-left">
            <div class="col-md-12">
                <h1 class="text-center">Real-time Air Quality Map - Yangon</h1>
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

<section>
    <div class="container mb-5">
        <div class="row" data-aos="fade-left">
            <div class="col-md-12">
                <div  id='map'  style='height:600px;'  />  
                    <link  rel="stylesheet"  href="http://cdn.leafletjs.com/leaflet-0.7.5/leaflet.css"  />  
                    <script  src="http://cdn.leafletjs.com/leaflet-0.7.5/leaflet.js"></script>  
                            
                    <script>  
                        var  OSM_URL  =  'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';  
                        var  OSM_ATTRIB  =  '&copy;  <a  href="http://openstreetmap.org/copyright">OpenStreetMap</a>  contributors';  
                        var  osmLayer  =  L.tileLayer(OSM_URL,  {attribution:  OSM_ATTRIB});  
                            
                        var  WAQI_URL    =  "https://tiles.waqi.info/tiles/usepa-aqi/{z}/{x}/{y}.png?token=49b51507089ac4e158c7ee1e4d44a0508c53f2ce";  
                        var  WAQI_ATTR  =  'Air  Quality  Tiles  &copy;  <a  href="http://waqi.info">waqi.info</a>';  
                        var  waqiLayer  =  L.tileLayer(WAQI_URL,  {attribution:  WAQI_ATTR});  
                            
                        var  map  =  L.map('map').setView([16.8350,  96.1600],  12);  
                        map.addLayer(osmLayer).addLayer(waqiLayer);  
                    </script>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include('footer.php');?>