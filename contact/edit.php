<?php 
    session_start();
    include_once('../db/config.php');
    if(!isset($_SESSION["user_id"])) {
        header("Location:../index.php");
    }

    // $sqlCategory = "SELECT * FROM categories";
    // $resultCategory = mysqli_query($con, $sqlCategory);

    $contact = "SELECT * FROM contact WHERE contact_id=".$_GET['id'];
    $resultItem = mysqli_query($con,$contact);
    $row = mysqli_fetch_assoc($resultItem);

    
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
      // $targetPath = "../upload/".$_FILES["item_image"]["name"];
      // echo $targetPath;
      // exit();
        // move_uploaded_file($_FILES["item_image"]["tmp_name"],$targetPath);

        // $item_name = $_POST['item_name'];
        // $item_code = $_POST['item_code'];
        // $item_price = $_POST['item_price'];
        
        // $item_image = $_FILES["item_image"]["name"];
        // $item_description = $_POST['item_description'];
        // $item_remark = $_POST['item_remark'];
        // $category_id = $_POST['category_id'];

        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        // $sqlInsert = "INSERT INTO items(item_name,item_code,item_price,item_image,item_description,item_remark,category_id) VALUES('$item_name','$item_code','$item_price','$item_image','$item_description','$item_remark','$category_id')";
        // // echo $sqlInsert;
        // exit();

        $sqlUpdate ="UPDATE contact SET name='".$name."',email='".$email."',subject='".$subject."',message='".$message."' WHERE contact_id=".$_GET['id'];

        // echo $sqlUpdate;
        // exit();

        mysqli_query($con,$sqlUpdate);
        header('location:index.php');

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Contact (Admin)</title>
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
                        Contact Listing
                    </div>
                    <div class="card-body">
                    <form action="?id=<?php echo $_GET['id'];?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="name">Sender Name</label>
                  <input type="text" value="<?php echo $row['name'];?>"
                    class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="name">
                  <small id="helpId" class="form-text text-muted">Enter Sender Name.</small>
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text"
                    class="form-control" value="<?php echo $row['email'];?>" name="email" id="email" aria-describedby="helpId" placeholder="email">
                  <small id="helpId" class="form-text text-muted">Enter Email.</small>
                </div>
                <div class="form-group">
                  <label for="subject">Subject</label>
                  <input type="text"
                    class="form-control" value="<?php echo $row['subject'];?>" name="subject" id="subject" aria-describedby="helpId" placeholder="subject">
                  <small id="helpId" class="form-text text-muted">Enter Subject.</small>
                </div>
                <div class="form-group">
                  <label for="message">Message</label>
                  <input type="text"
                    class="form-control" value="<?php echo $row['message'];?>" name="message" id="message" aria-describedby="helpId" placeholder="message">
                  <small id="helpId" class="form-text text-muted">Enter Message.</small>
                </div>
                <input type="submit" value="Edit Contact Info" class="btn btn-primary">
            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>