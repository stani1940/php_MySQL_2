<?php
$conn = mysqli_connect('localhost','root',"",'recipies');
if (!$conn){
    die("Connection failed ".mysqli_connect_error()." - ".mysqli_connect_errno());
}//else{
    //echo "Database connected successfully";
//}