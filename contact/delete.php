<?php
    include_once('../db/config.php');

    $sqlDel = "DELETE FROM contact WHERE contact_id=".$_GET['id'];
    // echo $sqlDel;exit();
    mysqli_query($con,$sqlDel);
    header('location:index.php');

?>