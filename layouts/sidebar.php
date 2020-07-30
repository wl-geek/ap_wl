<?php 
    // session_start();
    if(!isset($_SESSION["user_id"])) {
        header("Location:../index.php");
    }
?>
<div class="list-group">
    <a href="../user/index.php" class="list-group-item list-group-item-action 
    <?php echo ($_SERVER['REQUEST_URI'] == '/ap_wl/index.php')?' active':'';?>">
        User Profile
    </a>
    <!-- <a href="../dashboard/success.php" class="list-group-item list-group-item-action < php echo ($_SERVER['REQUEST_URI'] == '/ap_wl/dashboard.php')?' active':'';?>">User Dashboard</a> -->
    <!-- <a href="../category/index.php" class="list-group-item list-group-item-action < php echo ($_SERVER['REQUEST_URI'] == '/ap_wl/category.php')?' active':'';?>">Category List</a> -->
    <a href="../faq/index.php" class="list-group-item list-group-item-action <?php echo ($_SERVER['REQUEST_URI'] == '/ap_wl/faq.php')?' active':'';?>">FAQ (Admin)</a>
    <a href="../contact/index.php" class="list-group-item list-group-item-action <?php echo ($_SERVER['REQUEST_URI'] == '/ap_wl/contact.php')?' active':'';?>">Contact (Admin)</a>        
</div>
<a href="../logout.php" class="btn btn-danger w-100 mt-3">Logout</a>
<a href="../logged_in/index.php" class="btn btn-primary w-100 my-3">Back</a>

