<?php
    session_start();
    include('Admin/include/config.php');
    extract($_POST);
    $qry = "INSERT INTO members (name,email,password,username) VALUES('".$name."', '".$email."', '".$password."', '".$username."')";
    $res = mysqli_query($conn, $qry);
    if($res>0){
        $_SESSION['uname']=$username;
        header('location:index.php');
    }else{
        header('location:register.php');
    }  
?>