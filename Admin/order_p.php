<?php
session_start();
include('include/config.php');
extract($_REQUEST);
$qry = "UPDATE orders SET status='Completed' WHERE id='".$id."'";
$res = mysqli_query($conn, $qry);
header('location:order.php');
?>