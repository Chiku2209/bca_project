<?php
include('include/config.php');
if (isset($_POST['submit']) && $_POST['submit'] == "add") {
    extract($_POST);
    extract($_FILES);

    $filename = $_FILES['image']['name'];
    $newname = time() . '-' . $filename;
    $path = '../images/product/' . $newname;

    if (move_uploaded_file($_FILES['image']['tmp_name'], $path)) {
        $imgqry = "INSERT INTO product_image (product_id,num,image) VALUES('" . $product_id . "','" . $num . "','" . $newname . "')";
        $res = mysqli_query($conn, $imgqry);
        header('location:product.php');
    } else {
        header('location:dashboard.php');
    }
} elseif (isset($_POST['submit']) && $_POST['submit'] == "edit") {
    extract($_POST);
    extract($_FILES);
    if ($_FILES['image']['name'] == NULL) {
        $qry = "UPDATE product_image set product_id = '" . $product_id . "',num = '" . $num ."' WHERE id='".$id."' ";
        $ress = mysqli_query($conn, $qry);
        header('location:product.php');
    } elseif ($_FILES['image']['name']) {
        $pro = "SELECT * FROM product_image WHERE id='".$id."'";
        $respro = mysqli_query($conn, $pro);
        $row = mysqli_fetch_assoc($respro);
        $imgpath = "../images/product/" . $row['image'];
        unlink($imgpath);

        $filename = $_FILES['image']['name'];
        $newname = time().'-'.$filename;
        $path = '../images/product/'.$newname;
        if(move_uploaded_file($_FILES['image']['tmp_name'], $path)){
            $qry = "UPDATE product_image set product_id='".$product_id."', num='".$num."', image='".$newname."' WHERE id='".$id."'";
            $res = mysqli_query($conn, $qry);
            header('location:product.php');
        }
    } else {
        echo "500";
    }
} elseif($_REQUEST['val'] == 'del') {
    extract($_REQUEST);
    $pro = "SELECT * FROM product_image WHERE id='".$id."'";
    $respro = mysqli_query($conn, $pro);
    $row = mysqli_fetch_assoc($respro);
    $imgpath = "../images/product/" . $row['image'];
    unlink($imgpath);
    $QRY = "DELETE FROM product_image WHERE id = '".$id."'";
    $RES = mysqli_query($conn, $QRY);
    header('location:product.php');
}
else{
    echo "HELLO";
}
?>