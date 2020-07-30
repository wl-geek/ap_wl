<?php 
    session_start();
    require_once('../db/config.php');
    if(!isset($_SESSION["user_id"])) {
        header("Location:../index.php");
    }
    $sql = "SELECT * FROM user WHERE user_id=".$_SESSION['user_id'];
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);

    if(isset($_SESSION['message']))
    {
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $first_name = $_POST['first_name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $dob = date('Y-m-d', strtotime($_POST['dob']));
        $address = $_POST['address'];
        $postal_code = $_POST['postal_code'];
        
        if (isset($_POST['update_button'])) {

            $sql = "UPDATE user SET first_name='".$first_name."',surname='".$surname."',email='".$email."',password='".$password."',DOB='".$dob."',address='".$address."',postal_code='".$postal_code."' WHERE user_id=".$row['user_id'];
            mysqli_query($con,$sql);
            // $message = 'Successfully updated your account!';
            $_SESSION['message'] = 'Successfully updated your account!';
            header("Refresh:0");

        } else if (isset($_POST['delete_button'])) {
            $sql = "DELETE FROM `user` WHERE `user_id` =".$row['user_id'];
            mysqli_query($con,$sql);
            header("Location:../logout.php");
        }
    }
}
    else
    {
        $_SESSION['message']='';
    }     
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="../css/bootstrap.css">

    <script type="text/javascript">
			function showMessage(){
				alert("Are you sure you want to delete your account?");
			}
		</script>

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
                        <?php echo $_SESSION['first_name'];?> <?php echo $_SESSION['surname'];?>'s Profile
                    </div>
                    <div class="card-body">
                    <div class="message text-center"><?php if($_SESSION['message']!="") { echo '<br/>'.$_SESSION['message'].'<br/><br/>'; } ?></div>
                    <form class="form-signin" action="" method="post">
                        <div class="form-group">
                          <label for="first_name">First Name</label>
                          <input type="text" name="first_name" value="<?php echo $row['first_name'];?>" id="first_name" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                          <label for="surname">Surname</label>
                          <input type="text" name="surname" value="<?php echo $row['surname'];?>" id="surname" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                          <label for="email">Email Address</label>
                          <input type="text" name="email" value="<?php echo $row['email'];?>" id="email" class="form-control" placeholder="" aria-describedby="helpId" readonly>
                        </div>
                        <div class="form-group">
                          <label for="password">Password</label>
                          <input type="password" name="password" value="<?php echo $row['password'];?>" id="password" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>

                        <div class="form-group">
                                <label for="dob">DOB</label>
                                <input type="date" class="form-control" name="dob" value="<?php echo $row['DOB']; ?>" />
                            </div>
                            <div class="form-group">
                              <label for="address">Address</label>
                              <textarea class="form-control" name="address" id="address" rows="3"><?php echo $row['address'];?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="postal_code">Postal Code</label>
                                <input type="text"
                                    class="form-control" name="postal_code" value="<?php echo $row['postal_code']; ?>" id="postal_code" aria-describedby="helpId" placeholder="Enter Postal Code">
                            </div>
                            <div class="form-group my-3" style="padding-top:50px;">
                            <button class="btn btn-lg btn-success btn-block text-uppercase" name="update_button" type="submit">Update Account</button>
                            </div>
                            <div class="form-group mb-3">
                            <button class=" btn btn-lg btn-danger btn-block text-uppercase" name="delete_button" type="submit" id="btnShowMsg" value="Click Me!" onClick='showMessage()'>Delete Account</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>