<!doctype html>
<html lang="en">
  <head>
    <title>Air Pollution by WL</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.css'/>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.css'/>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover.css'/>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.0/animate.css'/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="css/wl/nav.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/3.11.3/less.min.js" type="text/javascript"></script>
    <script src='http://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.js'></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  </head>
  <body>

  <nav class="nav">
    <div class="container">
        <div class="logo">
            <a href="index.php">YANGON</a>
        </div>
        <div id="mainListDiv" class="main_list">
            <ul class="navlinks">
                <li><a href="index.php">Home</a></li>
                <li><a href="aboutus.php">About</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">FAQ</a></li>
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
<script src="js/wl/nav.js"></script>

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