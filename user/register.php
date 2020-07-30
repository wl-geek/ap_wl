<?php
    $message="";
    require_once('../db/config.php');
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $first_name = $_POST['first_name'];
        $surname = $_POST['surname'];
        $email = $_POST['user_name'];
        $password = md5($_POST['password']);
        $dob = date('Y-m-d', strtotime($_POST['dob']));
        $address = $_POST['address'];
        $postal_code = $_POST['postal_code'];

        $cpassword = md5($_POST['confirm_password']);
        $slquery = "SELECT * FROM user WHERE email = '$email'";
        $selectresult = mysqli_query($con,$slquery);
        if(mysqli_num_rows($selectresult)>0)
        {
             $message = 'Email already exists.';
        }
        elseif($password != $cpassword){
             $message = "Passwords don't match.";
        }
        else{

        $sql = "INSERT INTO `user` (`first_name`, `surname`, `email`, `password`, `DOB`, `address`,`postal_code`) VALUES ('$first_name', '$surname', '$email', '$password', '$dob', '$address', '$postal_code')";
        mysqli_query($con,$sql);
        header('location:../index.php');
        }
    }    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Air Pollution User Registration Page</title>
    
    <link href="../css/wl/login.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.css'/>
</head>

<body class="loginpage">
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
          <div class="message text-center"><?php if($message!="") { echo $message.'<br/><br/>'; } ?></div>
            <h5 class="card-title text-center">Register</h5>
            <form class="form-signin" action="" method="post">
              <div class="form-label-group">
                <input type="text" id="inputFirst_Name" class="form-control" name="first_name" placeholder="First Name" required autofocus>
                <label for="inputFirst_Name">First Name</label>
              </div>
              <div class="form-label-group">
                <input type="text" id="inputSurname" class="form-control" name="surname" placeholder="Surname" required>
                <label for="inputSurname">Surname</label>
              </div>
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" name="user_name" placeholder="Email address" required>
                <label for="inputEmail">Email address</label>
              </div>
              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
                <label for="inputPassword">Password</label>
              </div>
              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" name="confirm_password" placeholder="Confirm Password" required>
                <label for="inputPassword">Confirm Password</label>
              </div>
              <div class="form-label-group">
                <input type="date" id="inputDOB" class="form-control" name="dob" value="<?php echo date('Y-m-d'); ?>" required>
                <label for="inputDOB">Date Of Birth</label>
              </div>
              <div class="form-label-group">
                <textarea class="form-control" name="address" id="inputAddress" rows="3" placeholder="Address" required></textarea>
                <!-- <label for="inputAddress">Address</label> -->
              </div>
              <div class="form-label-group">
                <input type="text" id="inputPostal_Code" class="form-control" name="postal_code" placeholder="Postal Code" required>
                <label for="inputPostal_Code">Postal Code</label>
              </div>

              <button class="btn btn-lg btn-success btn-block text-uppercase" type="submit">Register</button>
              <hr class="my-4">
              
              <!-- <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign in with Google</button>
              <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</button> -->
            </form>
            <div class="form-signin">
            <a href="index.php" style="color:inherit; text-decoration:none;"><button class=" btn btn-lg btn-danger btn-block text-uppercase">Back</button></a>
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