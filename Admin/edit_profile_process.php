<?php
    include_once('include/config.php');
    extract($_REQUEST);
    $qry = "UPDATE users SET firstname='".$firstname."',lastname='".$lastname."',username='".$username."',email='".$email."',mobile='".$mobile."' WHERE id='".$id."'";
    $res = mysqli_query($conn,$qry);
    if($res==1){
        $_SESSION['email']=$email;
        $_SESSION['name']=$username;
        header('location:profile.php');
    }else{
        echo "Error While updating Profile";
    }    
    // header('location:product.php');
?>