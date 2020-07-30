<?php 
    session_start();
    include_once('../db/config.php');
    if(!isset($_SESSION["user_id"])) {
        header("Location:../index.php");
    }

    // $sqlCategory = "SELECT * FROM categories";
    // $resultCategory = mysqli_query($con, $sqlCategory);

    $faq = "SELECT * FROM faq WHERE faq_id=".$_GET['id'];
    $resultItem = mysqli_query($con,$faq);
    $row = mysqli_fetch_assoc($resultItem);

    
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {

        $answer = $_POST['answer'];

        // $sqlInsert = "INSERT INTO items(item_name,item_code,item_price,item_image,item_description,item_remark,category_id) VALUES('$item_name','$item_code','$item_price','$item_image','$item_description','$item_remark','$category_id')";
        // // echo $sqlInsert;
        // exit();

        $sqlUpdate ="UPDATE faq SET answer='".$answer."' WHERE faq_id=".$_GET['id'];

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
    <title>FAQ Answering Page (Admin)</title>
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
                        FAQ Answering Page (Admin)
                    </div>
                    <div class="card-body">
                    <form action="?id=<?php echo $_GET['id'];?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="question">Question</label>
                  <input type="text" value="<?php echo $row['question'];?>"
                    class="form-control" name="question" id="question" aria-describedby="helpId" placeholder="question" readonly>
                  <small id="helpId" class="form-text text-muted">Question</small>
                </div>
                <div class="form-group">
                  <label for="answer">Answer</label>
                  <input type="text"
                    class="form-control" value="<?php echo $row['answer'];?>" name="answer" id="answer" aria-describedby="helpId" placeholder="answer">
                  <small id="helpId" class="form-text text-muted">Enter Answer</small>
                </div>
                <input type="submit" value="Answer" class="btn btn-success">
            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>