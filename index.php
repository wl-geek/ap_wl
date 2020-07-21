<?php include('header.php');
include_once('db/config.php');
 $sql = "SELECT items.*,categories.category_name FROM items INNER JOIN categories ON items.category_id = categories.id";
 // echo $sql; exit();
 $result = mysqli_query($con,$sql);
?>

<section class="home">
    <h2 class="myH2" style = "padding-top:300px;">Air Pollution</h2>
    <div id="buttons">
      <a href="login.php" class="btn login">LOG IN</a>
      <a href="user/register.php" class="btn reg">SIGN UP</a>
    </div>
    <p class="myP">Scroll down</p>
    <p style="text-align: center">
        <i class="glyphicon glyphicon-chevron-down"></i>
    </p>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mt-4">
                <h1>What is Air Pollution?</h1>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-6">
                <img src="img/pic1.jpg" width="100%"/>
            </div>
            <div class="col-md-6">
                <h2 class="mt-0">What is Air Pollution?</h2>
                <p class="pt-4" style="font-size:20px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit ratione, deleniti minus soluta asperiores, 
                sit quos pariatur qui cupiditate corporis cum dolor. Earum ut aperiam impedit porro neque qui fugiat? 
                </p>
                <a class="btn login" href="aboutus.php" role="button">Read More</a>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="mt-0">What is Air Pollution?</h2>
                <p class="pt-4" style="font-size:20px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit ratione, deleniti minus soluta asperiores, 
                sit quos pariatur qui cupiditate corporis cum dolor. Earum ut aperiam impedit porro neque qui fugiat? 
                </p>
                <a class="btn login" href="aboutus.php" role="button">Read More</a>
            </div>
            <div class="col-md-6">
                <img src="img/pic1.jpg" width="100%"/>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container mt-5 mb-4">
        <div class="row">
            <div class="col-md-6">
                <img src="img/pic1.jpg" width="100%"/>
            </div>
            <div class="col-md-6">
                <h2 class="mt-0">What is Air Pollution?</h2>
                <p class="pt-4" style="font-size:20px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit ratione, deleniti minus soluta asperiores, 
                sit quos pariatur qui cupiditate corporis cum dolor. Earum ut aperiam impedit porro neque qui fugiat? 
                </p>
                <a class="btn login" href="aboutus.php" role="button">Read More</a>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container mb-4">
        <div class="row">
            <div class="col-md-12">
                <h1>Our Partners</h1>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="img/pic2.jpg" class="mb-3" alt="" style="height:200px;">
                <div class="card-body">
                    <h3 class="card-title">World Health Organization</h3>
                    <p class="card-text" style="font-size:15px">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Nostrum quisquam modi perferendis provident aut dolore consequuntur aliquam.
                     Temporibus aliquid voluptatem quia labore, ipsa architecto! Exercitationem qui dicta quisquam ducimus maiores!</p>
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
                <div class="card">
                    <img src="img/pic2.jpg" class="mb-3" alt="" style="height:200px;">
                <div class="card-body">
                    <h3 class="card-title">IQ Air</h3>
                    <p class="card-text" style="font-size:15px">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Nostrum quisquam modi perferendis provident aut dolore consequuntur aliquam.
                     Temporibus aliquid voluptatem quia labore, ipsa architecto! Exercitationem qui dicta quisquam ducimus maiores!</p>
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
                <div class="card">
                    <img src="img/pic2.jpg" class="mb-3" alt="" style="height:200px;">
                <div class="card-body">
                    <h3 class="card-title">Air Quality Yangon</h3>
                    <p class="card-text" style="font-size:15px">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Nostrum quisquam modi perferendis provident aut dolore consequuntur aliquam.
                     Temporibus aliquid voluptatem quia labore, ipsa architecto! Exercitationem qui dicta quisquam ducimus maiores!</p>
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