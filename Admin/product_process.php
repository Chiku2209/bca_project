<?php
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
        echo "EDIT";
    }else{
        echo "No";
    }
?>