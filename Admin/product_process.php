<?php
    include('include/config.php');

    if(isset($_POST['add'])){
        extract($_POST);
        $qry = "INSERT INTO products (pro_name,price,color,description1,description2,sku,country,heritage) VALUES('".$pro_name."','".$price."','".$color."','".$description1."','".$description2."','".$sku."','".$country."','".$heritage."')";
        $result = mysqli_query($conn, $qry);       
        if($result){
            header('location:product.php');
        }else{
            header('location:dashboard.php');
        }
    }elseif($_REQUEST['id']&&'op==del'){
        extract($_REQUEST);
        $qry = "DELETE FROM products WHERE id='".$id."'";
        $res = mysqli_query($conn, $qry);
        if($res){
            header('location:product.php');
        }
        else{
            header('location:dashoard.php');
        }
    }
?>