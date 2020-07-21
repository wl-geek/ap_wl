<?php
    require_once('../db/config.php');
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $name = $_POST['name'];
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        $sql = "INSERT INTO `login_user` (`name`, `user_name`, `password`) VALUES ('$name', '$user_name', '$password')";
        mysqli_query($con,$sql);
        header('location:../index.php');
    }    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="offset-md-4 col-md-4 my-5">
               <div class="card">
                   <div class="card-body">
                       <form action="#" method="post">
                        <h4 class="card-title">Register</h4>
                            <div class="form-group">
                              <label for="name">Name</label>
                              <input type="text"
                                class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="Enter Name">
                              <small id="helpId" class="form-text text-muted">Enter your name.</small>
                            </div>
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
                            <button type="submit" class="btn btn-primary">Register</button> 
                            <a href="../index.php">Cancel</a>
                       </form>
                   </div>
               </div>
            </div>
        </div>
    </div>
</body>
</html>