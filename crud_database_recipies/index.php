<?php
include 'includes/db_connect.php';
include 'includes/header.php';
?>
<h1>CRUD Database Units</h1>
<div>
    <button class="btn btn-success"><a href="create.php">Добави мерна единица</a></button>
</div>

<?php
$read_query = "SELECT * FROM `units` WHERE `date_deleted` IS NULL";
$result = mysqli_query($conn, $read_query);
if (mysqli_num_rows($result) > 0) {
    ?>
    <table style="margin-left: 50px" class="table table-stripped">
        <tr>
            <td>id</td>
            <td>unit_name</td>
        </tr>
        <?php
        $num = 1;
        while ($row = mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <td><?= $num++ ?></td>
            <td><?= $row['unit_name'] ?></td>
        <tr>
            <?php
            }
            ?>
    </table>
    <?php
}else{
    die('Query failed'.mysqli_error($conn));
}
include 'includes/footer.php';
?>
