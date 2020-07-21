<?php
    session_start();
    $message="";
    require_once('db/config.php');
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM login_user WHERE user_name='$user_name' AND password='$password'";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_assoc($result);
        if(is_array($row)) {
            $_SESSION["id"] = $row['id'];
            $_SESSION["name"] = $row['name'];
        } else {
            $message = "Invalid Username or Password!";
        }
        if(isset($_SESSION["id"])) {
            header("Location:dashboard/success.php");
        }
    }    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="offset-md-4 col-md-4 my-5">
               <div class="card">
                   <div class="card-body">
                   <div class="message"><?php if($message!="") { echo $message; } ?></div>
                       <form action="" method="post">
                        <h4 class="card-title">Login</h4>
                        <div class="form-group">
                            <label for="user_name">Username</label>
                            <input type="text"
                                class="form-control" name="user_name" id="user_name" aria-describedby="helpId" placeholder="Enter Username">
                            <small id="helpId" class="form-text text-muted">Enter your username.</small>
                            </div>
                            <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class="form-control" name="password" id="" placeholder="Enter Password.">
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button> 
                            <a href="user/register.php">Register Now.</a>
                       </form>
                   </div>
               </div>
            </div>
        </div>
    </div>
</body>
</html>