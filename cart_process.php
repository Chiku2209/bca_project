<?php
    session_start();
    include('Admin/include/config.php');
    $pro_id = $_REQUEST['pro_id'];
    $user_id = $_SESSION['userid'];
    
    $qry = "INSERT INTO cart (pro_id, user_id) VALUES('".$pro_id."', '".$user_id."')";
    $res = mysqli_query($conn, $qry);

    $qry1 = "SELECT * FROM cart WHERE pro_id='".$pro_id."' && user_id='".$user_id."'";
    $res1 = mysqli_query($conn, $qry1);
    $result = mysqli_fetch_assoc($res1);

    if($res>0){
        $_SESSION['product_id'] = $pro_id;
        $_SESSION['user_id'] = $user_id;
        header('location:cart.php');
    }else{
        header('location:index.php');
    }
?>