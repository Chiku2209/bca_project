<?php
session_start();
include('Admin/include/config.php');
extract($_POST);
$qry = "SELECT * FROM members WHERE username='" . $username . "' && password='" . $password . "'";
$res = mysqli_query($conn, $qry);
$na = mysqli_fetch_row($res);
$user_id = $na['id'];
$count = mysqli_num_rows($res);
if ($count > 0) {
    $_SESSION['uname'] = $username;
    header('location:index.php');
}else{
    header('location:login.php');
}
?>