<?php
include("includes/header.php");
$unit_id = $_GET['id'];
$read_query = "SELECT * FROM `units` WHERE `unit_id` = $unit_id";
$result = mysqli_query($conn, $read_query);
if ($result) {
    $row = mysqli_fetch_assoc($result);

}
?>
<form method="post" action="">
    <label>Редактирайте мерна единица
        <input type="text" name="unit_name" value="<?= $row['unit_name'] ?>">
    </label>
    <input type="hidden" name="unit_id" value="<?= $row['unit_id'] ?>">
    <input type="submit" name="submit" value="Save">
</form>
<?php
if (!empty($_POST)) {
    $unit_name = $_POST['unit_name'];
    $unit_id = $_POST['unit_id'];
    $update_query = "UPDATE `units` SET `unit_name`='" . $unit_name . "' WHERE `unit_id` =" . $unit_id;
    $update_res = mysqli_query($conn, $update_query);
    if (!$update_res) {
        die("Update failed! " . mysqli_error($conn));
    } else {
        echo "Update successfully!";
        header("Location: index.php");
    }
}
include('includes/footer.php');
?>

