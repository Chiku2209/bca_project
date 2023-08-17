<?php
include('include/config.php');
if (isset($_POST['submit']) && $_POST['submit'] == "add") {
    extract($_POST);
    extract($_FILES);

    $filename = $_FILES['image']['name'];
    $newname = time() . '-' . $filename;
    $path = '../images/slider/' . $newname;

    if (move_uploaded_file($_FILES['image']['tmp_name'], $path)) {
        $imgqry = "INSERT INTO slider (image, description) VALUES('" . $newname . "','".$description."')";
        $res = mysqli_query($conn, $imgqry);
        header('location:slider.php');
    } else {
        header('location:dashboard.php');
    }
} elseif (isset($_POST['submit']) && $_POST['submit'] == "edit") {
    extract($_POST);
    extract($_FILES);
    if ($_FILES['image']['name'] == NULL) {
        $qry = "UPDATE slider set description = '" . $description ."' WHERE id='".$id."' ";
        $ress = mysqli_query($conn, $qry);
        header('location:product.php');
    } elseif ($_FILES['image']['name']) {
        $pro = "SELECT * FROM slider WHERE id='".$id."'";
        $respro = mysqli_query($conn, $pro);
        $row = mysqli_fetch_assoc($respro);
        $imgpath = "../images/slider/" . $row['image'];
        unlink($imgpath);

        $filename = $_FILES['image']['name'];
        $newname = time().'-'.$filename;
        $path = '../images/slider/'.$newname;
        if(move_uploaded_file($_FILES['image']['tmp_name'], $path)){
            $qry = "UPDATE slider set description='".$description."', image='".$newname."' WHERE id='".$id."'";
            $res = mysqli_query($conn, $qry);
            header('location:slider.php');
        }
    } else {
        echo "500";
    }
} elseif($_REQUEST['val'] == 'del') {
    extract($_REQUEST);
    $pro = "SELECT * FROM slider WHERE id='".$id."'";
    $respro = mysqli_query($conn, $pro);
    $row = mysqli_fetch_assoc($respro);
    $imgpath = "../images/slider/" . $row['image'];
    unlink($imgpath);
    $QRY = "DELETE FROM slider WHERE id = '".$id."'";
    $RES = mysqli_query($conn, $QRY);
    header('location:slider.php');
}
else{
    echo "Error....";
}
?>