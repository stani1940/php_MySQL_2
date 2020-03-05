<?php
include "includes/header.php";
include "includes/db_connect.php";
?>
<form method="post" action="">
    <label>Въведете мерна единица
        <input type="text" name="unit_name">
    </label>
    <input type="submit" name="submit" value="Save">
</form>
<?php
if (isset($_POST['unit_name'])){
    $unit_name =$_POST['unit_name'];
    $insert_query = "INSERT INTO 'units'('unit_name') VALUES ('$unit_name')";
    $result = mysqli_query($conn,$insert_query);
    if ($result){
        echo "Record is added successfully";

    }else{
            die("Query failed! ".mysqli_error($conn));
    }
}

include "includes/footer.php";
?>