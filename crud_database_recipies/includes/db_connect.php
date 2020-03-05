<?php
$conn = mysqli_connect(localhost,root,spider81,recipies);
if (!$conn){
    die("conection failed".mysqli_connect_error()." - ".mysqli_connect_errno());
}//else{
    //echo "Database connected successfully";
//}