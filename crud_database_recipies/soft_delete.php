<?php
include ('includes/db_connect.php');
$unit_id = $_GET['id'];
$current_date =date('Y-m-d');
$update_query = "UPDATE `units` SET `date_deleted`='" . $current_date . "' WHERE `unit_id` =" . $unit_id;
$res =mysqli_query($conn, $update_query);
if ($res){
    header('Location:index.php');
}else{
    die("Delete failed! ".mysqli_error($conn));
}