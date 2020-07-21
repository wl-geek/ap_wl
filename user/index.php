<?php 
    session_start();
    require_once('../db/config.php');
    if(!isset($_SESSION["id"])) {
        header("Location:../index.php");
    }
    $sql = "SELECT * FROM login_user WHERE id=".$_SESSION['id'];
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);
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
    <div class="container py-5">
        <div class="row">
            <div class="col-md-3">
            <?php include('../layouts/sidebar.php');?>
            </div>
            <div class="col-md-9 ">
                <div class="card">
                    <div class="card-header">
                        <?php echo $_SESSION['name'];?>'s Profile
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                          <label for="name">Name</label>
                          <input type="text" name="name" value="<?php echo $row['name'];?>" id="name" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                          <label for="name">Username</label>
                          <input type="text" name="user_name" value="<?php echo $row['name'];?>" id="name" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                          <label for="name">Password</label>
                          <input type="password" name="password" value="<?php echo $row['name'];?>" id="name" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>