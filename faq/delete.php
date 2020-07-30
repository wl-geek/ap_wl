<?php
    include_once('../db/config.php');

    $sqlDel = "DELETE FROM faq WHERE faq_id=".$_GET['id'];
    // echo $sqlDel;exit();
    mysqli_query($con,$sqlDel);
    header('location:index.php');

?>