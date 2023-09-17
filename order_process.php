<?php
    session_start();
    include('Admin/include/config.php');
    $qry = "INSERT INTO orders (user_id, product_id, status) VALUES('".$_SESSION['user_id']."', '".$_SESSION['product_id']."','active')";
    $res = mysqli_query($conn , $qry);
    if($res>0)
    {
        $qry1 = "DELETE FROM cart WHERE user_id='".$_SESSION['user_id']."' && pro_id='".$_SESSION['product_id']."'";
        $res1 = mysqli_query($conn ,$qry1);
        header('location:index.php');
    }
?>