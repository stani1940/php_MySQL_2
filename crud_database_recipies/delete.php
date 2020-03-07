<?php
include('includes/db_connect.php');
$unit_id = $_GET['id'];
$delete_query = "DELETE FROM `units` WHERE `unit_id` = $unit_id";
$delete_res=mysqli_query($conn,$delete_query);
if ($delete_res){
    header("Location:recycle_bin.php");
}else{
    die("Deletion failed! ".mysqli_error($conn));
}