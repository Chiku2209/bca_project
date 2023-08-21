<?php
    session_start();
    include('Admin/include/config.php');
    extract($_POST);
    $qry = "INSERT INTO members (name,email,password,contact,username) VALUES('".$name."', '".$email."', '".$password."', '".$contact."', '".$username."')";
    $res = mysqli_query($conn, $qry);
    if($res>0){
        $_SESSION['name']=$username;
        header('location:index.php');
    }else{
        header('location:register.php');
    }  
?>