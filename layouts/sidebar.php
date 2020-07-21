<div class="list-group">
    <a href="../dashboard/success.php" class="list-group-item list-group-item-action 
    <?php echo ($_SERVER['REQUEST_URI'] == '/b3_session/success.php')?' active':'';?>">
        Dashboard
    </a>
    <a href="../category/index.php" class="list-group-item list-group-item-action <?php echo ($_SERVER['REQUEST_URI'] == '/b3_session/category.php')?' active':'';?>">Category List</a>
    <a href="../item/index.php" class="list-group-item list-group-item-action <?php echo ($_SERVER['REQUEST_URI'] == '/b3_session/item.php')?' active':'';?>">Item List</a>
    <a href="../order/index.php" class="list-group-item list-group-item-action <?php echo ($_SERVER['REQUEST_URI'] == '/b3_session/order.php')?' active':'';?>">Order List</a>
    <a href="../user/index.php" class="list-group-item list-group-item-action ">User Profile</a>
        
</div>
<a href="../logout.php" class="btn btn-danger w-100 my-3">Logout</a>

