<?php
    session_start();
    $message="";
    require_once('db/config.php');
    if(isset($_SESSION['attempts']))
    {
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        if($_SESSION['attempts']>=3)
        {
            if((time() - $_SESSION['time']) < (60*10)){
                $message = "Please wait 10 minutes and try again!";
            }
            else{
                $_SESSION['attempts']=0;

                $user_name = $_POST['user_name'];
                $password = md5($_POST['password']);
                $sql = "SELECT * FROM user WHERE email='$user_name' AND password='$password'";
                $result = mysqli_query($con,$sql);
                $row = mysqli_fetch_assoc($result);
                if(is_array($row)) {
                    $_SESSION["user_id"] = $row['user_id'];
                    $_SESSION["first_name"] = $row['first_name'];
                    $_SESSION["surname"] = $row['surname'];
                } else {
                    $_SESSION['attempts']=$_SESSION['attempts']+1;
                    // if($count>=3){
                    //     $t = time();
                    // }
                    $message = "Invalid Username or Password! You have ".(3-$_SESSION['attempts'])." attempts remaining.";
                }
            }
        }
        else{
            $user_name = $_POST['user_name'];
            $password = md5($_POST['password']);
            $sql = "SELECT * FROM user WHERE email='$user_name' AND password='$password'";
            $result = mysqli_query($con,$sql);
            $row = mysqli_fetch_assoc($result);
            if(is_array($row)) {
                $_SESSION["user_id"] = $row['user_id'];
                $_SESSION["first_name"] = $row['first_name'];
                $_SESSION["surname"] = $row['surname'];
            } else {
                $_SESSION['attempts']=$_SESSION['attempts']+1;
                if($_SESSION['attempts']>=3){
                    $_SESSION['time'] = time();
                    $message = "Invalid Username or Password! Please try again after 10 minutes!";
                }
                else{
                $message = "Invalid Username or Password! You have ".(3-$_SESSION['attempts'])." more attempts remaining.";
                }
            }
        }
        if(isset($_SESSION["user_id"])) {
            // header("Location:dashboard/success.php");
            header("Location:logged_in/index.php");
        }
    }   
}
else
{
    $_SESSION['attempts']=0;
} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Air Pollution Login Page</title>
    <link href="css/wl/login.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.css'/>
</head>

<body class="loginpage">
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
          <div class="message text-center"><?php if($message!="") { echo $message.'<br/><br/>'; } ?></div>
            <h5 class="card-title text-center">Sign In</h5>
            <form class="form-signin" action="" method="post">
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" name="user_name" placeholder="Email address" required autofocus>
                <label for="inputEmail">Email address</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
                <label for="inputPassword">Password</label>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember password</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase mb-3" type="submit">Sign in</button>
              
              <!-- <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign in with Google</button>
              <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</button> -->
            </form>
            <div class="form-signin">
            <a href="index.php" style="color:inherit; text-decoration:none;"><button class=" btn btn-lg btn-danger btn-block text-uppercase">Back</button></a>
              <hr class="my-4">
              <a href="user/register.php" style="color:inherit; text-decoration:none;"><button class=" btn btn-lg btn-success btn-block text-uppercase">Register</button></a>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.bundle.js'></script>

</body>
</html>