<?php include('header.php');
include_once('db/config.php');

 $sql = "SELECT items.*,categories.category_name FROM items INNER JOIN categories ON items.category_id = categories.id WHERE items.id=".$_GET['id'];
 // echo $sql; exit();
 $result = mysqli_query($con,$sql);
 $row = mysqli_fetch_assoc($result);

 $catSql = "SELECT * FROM items WHERE category_id= ".$row['category_id'];
 // echo $sql; exit();
 $catResult = mysqli_query($con,$catSql);
?>
<div class="container p-5 mt-3 bg-light rounded border shadow-sm">
    <div class="row">
        <div class="col-md-4">
            <img src="upload/<?php echo $row['item_image'];?>" alt="" class="img-thumbnail">
        </div>
        <div class="col-md-8">
            <h4 class="text-uppercase"><?php echo $row['item_name'];?></h4>
            <hr>
            <h6><?php echo $row['category_name'];?></h6>
            <p>
            <?php echo $row['item_description'];?>
            </p>
            <a href="#" class="btn btn-success">Add to Cart</a>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <h4>Related Category</h4>
            <hr>
        </div>
    </div>
    <div class="row">
    <?php while($catRow = mysqli_fetch_assoc($catResult)){
    ?>
        <div class="col-md-4">
            <div class="card">
            <img src="upload/<?php echo $catRow['item_image'];?>" class="mb-3" alt="" style="height:200px;">
            <div class="card-body">
                <h5 class="card-title"><?php echo $catRow['item_name'];?></h5>
                <p class="card-text"><?php echo $catRow['item_code'];?> <span class="badge badge-danger"><?php echo $catRow['item_price'];?></span></p>
                <div class="text-warning">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                </div>
                <a href="detail.php?id=<?php echo $catRow['id'];?>" class="btn btn-primary pull-right">More Info</a>
            </div>
            </div>
            </div>
    <?php
    }
    ?>
    </div>
</div>
<?php include('footer.php');?>