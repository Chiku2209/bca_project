<?php
    include('include/config.php');
    if(isset($_POST['submit']) && $_POST['submit'] == "add"){
        extract($_POST);
        extract($_FILES);

        $filename = $_FILES['image']['name'];
        $newname = time().'-'.$filename;
        $path = '../images/product/'.$newname;

        if(move_uploaded_file($_FILES['image']['tmp_name'],$path)){
            $imgqry = "INSERT INTO product_image (product_id,num,image) VALUES('".$product_id."','".$num."','".$newname."')";
            $res = mysqli_query($conn, $imgqry);
            echo "YES";
        }
        else{
            echo "No";
        }
    }

?>