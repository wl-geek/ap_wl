<?php include('header.php');
include_once('db/config.php');
 $sql = "SELECT items.*,categories.category_name FROM items INNER JOIN categories ON items.category_id = categories.id";
 // echo $sql; exit();
 $result = mysqli_query($con,$sql);
?>
<div class="jumbotron">
   <div class="container">
    <div class="row">
        <div class="col-md-12">
        <h1 class="display-3">Air Pollution</h1>
        <p class="lead">Air Pollution</p>
        <hr class="my-2">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, reprehenderit est veritatis esse perferendis voluptates? Debitis tempora reiciendis distinctio laborum expedita at, aliquam nobis rem ut dolore. Laboriosam, quidem nobis.</p>
        <p class="lead">
            <a class="btn btn-primary" href="Jumbo action link" role="button">Get Now</a>
        </p>
        </div>
    </div>
   </div>
</div>

<section>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-6">
                <img src="img/pic1.jpg" width="100%"/>
            </div>
            <div class="col-md-6">
                <h3>What is Air Pollution?</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit ratione, deleniti minus soluta asperiores, 
                sit quos pariatur qui cupiditate corporis cum dolor. Earum ut aperiam impedit porro neque qui fugiat? 
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora voluptates saepe perspiciatis 
                doloribus ipsum cum adipisci magni sapiente ex quasi doloremque, labore similique itaque neque nam laborum quidem aliquid maiores!
                Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <a class="btn btn-primary" href="aboutus.php" role="button">Read More</a>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>What is Air Pollution?</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit ratione, deleniti minus soluta asperiores, 
                sit quos pariatur qui cupiditate corporis cum dolor. Earum ut aperiam impedit porro neque qui fugiat? 
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora voluptates saepe perspiciatis 
                doloribus ipsum cum adipisci magni sapiente ex quasi doloremque, labore similique itaque neque nam laborum quidem aliquid maiores!
                Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <a class="btn btn-primary" href="aboutus.php" role="button">Read More</a>
            </div>
            <div class="col-md-6">
                <img src="img/pic1.jpg" width="100%"/>
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
                <h3>What is Air Pollution?</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit ratione, deleniti minus soluta asperiores, 
                sit quos pariatur qui cupiditate corporis cum dolor. Earum ut aperiam impedit porro neque qui fugiat? 
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora voluptates saepe perspiciatis 
                doloribus ipsum cum adipisci magni sapiente ex quasi doloremque, labore similique itaque neque nam laborum quidem aliquid maiores!
                Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <a class="btn btn-primary" href="aboutus.php" role="button">Read More</a>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 my-3">
                <h3>Our Partners</h3>
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
                    <h5 class="card-title">World Health Organization</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Nostrum quisquam modi perferendis provident aut dolore consequuntur aliquam.
                     Temporibus aliquid voluptatem quia labore, ipsa architecto! Exercitationem qui dicta quisquam ducimus maiores!</p>
                <div class="text-warning">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                </div>
                    <a href="https://www.who.int/health-topics/air-pollution#tab=tab_1" class="btn btn-primary pull-right" target="_blank">More Info</a>
                </div>
                </div>
            </div>
        <div class="col-md-4">
                <div class="card">
                    <img src="img/pic2.jpg" class="mb-3" alt="" style="height:200px;">
                <div class="card-body">
                    <h5 class="card-title">IQ Air</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Nostrum quisquam modi perferendis provident aut dolore consequuntur aliquam.
                     Temporibus aliquid voluptatem quia labore, ipsa architecto! Exercitationem qui dicta quisquam ducimus maiores!</p>
                <div class="text-warning">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                </div>
                    <a href="https://www.iqair.com/us/myanmar/yangon" class="btn btn-primary pull-right" target="_blank">More Info</a>
                </div>
                </div>
            </div>
        <div class="col-md-4">
                <div class="card">
                    <img src="img/pic2.jpg" class="mb-3" alt="" style="height:200px;">
                <div class="card-body">
                    <h5 class="card-title">Air Quality Yangon</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Nostrum quisquam modi perferendis provident aut dolore consequuntur aliquam.
                     Temporibus aliquid voluptatem quia labore, ipsa architecto! Exercitationem qui dicta quisquam ducimus maiores!</p>
                <div class="text-warning">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                </div>
                    <a href="https://www.facebook.com/airqualityyangon/" class="btn btn-primary pull-right" target="_blank">More Info</a>
                </div>
                </div>
        </div>
    </div>
</section>

<?php include('footer.php');?>