<?php 
    session_start();
    include_once('../db/config.php');
    if(!isset($_SESSION["id"])) {
        header("Location:../index.php");
    }

    $sqlCategory = "SELECT * FROM categories";
    $resultCategory = mysqli_query($con, $sqlCategory);

    $item = "SELECT * FROM items WHERE id=".$_GET['id'];
    $resultItem = mysqli_query($con,$item);
    $row = mysqli_fetch_assoc($resultItem);

    
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
      $targetPath = "../upload/".$_FILES["item_image"]["name"];
      // echo $targetPath;
      // exit();
        move_uploaded_file($_FILES["item_image"]["tmp_name"],$targetPath);

        $item_name = $_POST['item_name'];
        $item_code = $_POST['item_code'];
        $item_price = $_POST['item_price'];
        $item_image = $_FILES["item_image"]["name"];
        $item_description = $_POST['item_description'];
        $item_remark = $_POST['item_remark'];
        $category_id = $_POST['category_id'];

        // $sqlInsert = "INSERT INTO items(item_name,item_code,item_price,item_image,item_description,item_remark,category_id) VALUES('$item_name','$item_code','$item_price','$item_image','$item_description','$item_remark','$category_id')";
        // // echo $sqlInsert;
        // exit();

        $sqlUpdate ="UPDATE items SET item_name='".$item_name."',item_code='".$item_code."',item_price='".$item_price."',item_image='".$item_image."',item_description='".$item_description."',item_remark='".$item_remark."',category_id='".$category_id."' WHERE id=".$_GET['id'];

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
                        Item Listing
                    </div>
                    <div class="card-body">
                    <form action="?id=<?php echo $_GET['id'];?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="item_name">Item Name</label>
                  <input type="text" value="<?php echo $row['item_name'];?>"
                    class="form-control" name="item_name" id="item_name" aria-describedby="helpId" placeholder="item_name">
                  <small id="helpId" class="form-text text-muted">Enter Item Name.</small>
                </div>
                <div class="form-group">
                  <label for="item_code">Item Code</label>
                  <input type="text"
                    class="form-control" value="<?php echo $row['item_code'];?>" name="item_code" id="item_code" aria-describedby="helpId" placeholder="item_code">
                  <small id="helpId" class="form-text text-muted">Enter Item Code.</small>
                </div>
                <div class="form-group">
                  <label for="item_price">Item Price</label>
                  <input type="number"
                    class="form-control" value="<?php echo $row['item_price'];?>" name="item_price" id="item_price" aria-describedby="helpId" placeholder="item_price">
                  <small id="helpId" class="form-text text-muted">Enter Item Price.</small>
                </div>
                <div class="form-group">
                  <label for="item_image">Item Image</label>
                  <!-- <input type="text"
                    class="form-control" value="<?php //echo $row['item_image'];?>" name="item_image" id="item_image" aria-describedby="helpId" placeholder="item_image">
                  <small id="helpId" class="form-text text-muted">Enter Item Image.</small> -->
                  <input type="file" name="item_image" id="">

                </div>
                <div class="form-group">
                  <label for="item_description">Item Description</label>
                  <input type="text" value="<?php echo $row['item_description'];?>"
                    class="form-control" name="item_description" id="item_description" aria-describedby="helpId" placeholder="item_description">
                  <small id="helpId" class="form-text text-muted">Enter Item Description.</small>
                </div>
                <div class="form-group">
                  <label for="item_remarks">Item Remarks</label>
                  <input type="text"
                    class="form-control" value="<?php echo $row['item_remark'];?>" name="item_remark" id="item_remark" aria-describedby="helpId" placeholder="item_remarks">
                  <small id="helpId" class="form-text text-muted">Enter Item Remark.</small>
                </div>
                <div class="form-group">
                  <label for="">Category</label>
                  <select class="form-control" name="category_id" id="">
                    <?php
                        while($row = mysqli_fetch_assoc($resultCategory))
                        {
                    ?>
                        <option value="<?php echo $row['id'];?>">
                            <?php echo $row['category_name'];?>
                        </option>
                    <?php

                        }

                    ?>
                  </select>
                </div>
                <input type="submit" value="Edit Item" class="btn btn-primary">
            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>