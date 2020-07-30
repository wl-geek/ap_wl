<?php 
    session_start();
    include_once('../db/config.php');
    if(!isset($_SESSION["user_id"])) {
        header("Location:../index.php");
    }
    
    // $sql = "SELECT items.*,categories.category_name FROM items INNER JOIN categories ON items.category_id = categories.id";
    $sql = "SELECT * FROM contact";

    // echo $sql; exit();
    $result = mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact (Admin)</title>
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
                        <!-- <span class="float-right"><a href="create.php" class="btn btn-success btn-sm">Add Item</a></span> -->
                    </div>
                    <div class="card-body">
                    <table class="table table-bordered">
                    <tr>
                        <th>Sender Name</th>
                        <th>Sender Email</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <!-- <th>Item image</th> -->
                        <!-- <th>Item Description</th> -->
                        <!-- <th>Category</th> -->
                        <th>Action</th>
                    </tr>
                    <?php while($row = mysqli_fetch_assoc($result)){
                    ?>
                        <tr>
                            <td><?php echo $row['name'];?></td>
                            <td><?php echo $row['email'];?></td>
                            <td><?php echo $row['subject'];?></td>
                            <td><?php echo $row['message'];?></td>
                            <!-- <td>
                                <img src="../upload/< php echo $row['item_image'];?>" width="100px" alt="">
                            </td> -->
                            <!-- <td>< php echo $row['item_description'];?></td> -->
                            <!-- <td>< php echo $row['category_name'];?></td> -->
                            <td>
                                <a href="edit.php?id=<?php echo $row['contact_id'];?>" class="btn btn-primary btn-sm">Edit</a>
                                <a href="delete.php?id=<?php echo $row['contact_id'];?>" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>