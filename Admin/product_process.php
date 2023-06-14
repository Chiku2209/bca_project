<?php
// error_reporting(E_ERROR | E_PARSE);
include('include/config.php');
    if (isset($_POST['submit']) && $_POST['submit'] == "add") {
        extract($_POST);
        $qry = "INSERT INTO products (pro_name,price,color,description1,description2,sku,country,heritage) VALUES ('".$pro_name."','".$price."','".$color."','".$description1."','".$description2."','".$sku."','".$country."','".$heritage."')";
        $res = mysqli_query($conn , $qry);
        header('location:product.php');
    }elseif ($_REQUEST['val'] == 'del'){
        extract($_REQUEST);
        $query = "DELETE FROM products WHERE id='".$id."'";
        $result = mysqli_query($conn, $query);
        header('location:product.php');
    }elseif(isset($_POST['submit']) && $_POST['submit']=="edit"){
        extract($_POST);
        $qry = "UPDATE products SET pro_name='".$pro_name."',price='".$price."',color='".$color."',description1='".$description1."',description2='".$description2."',sku='".$sku."',country='".$country."',heritage='".$heritage."' WHERE id='".$id."'";
        $res = mysqli_query($conn,$qry);
        header('location:product.php');
    }else{
        echo "No";
    }
?>