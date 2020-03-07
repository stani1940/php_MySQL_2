<?php
include('includes/header.php');
include('includes/db_connect.php');
$read_query = "SELECT * FROM `units` WHERE `date_deleted` IS NOT NULL";
$result = mysqli_query($conn, $read_query);
if (mysqli_num_rows($result)) {
    ?>
    <h1>Recycle_bin</h1>
    <table class="table table-stripped">
    <tr>
        <td>#</td>
        <td>Unit</td>
        <td>Permanent delete</td>
        <td>Restore</td>
    </tr>
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td></td>
            <td><?= $row['unit_name'] ?></td>
            <td><a href="delete.php?id=?=$row['unit_id']?>">Permanent Delete</a></td>
        </tr>
        </table>

        <?php
    }
}
include('includes/footer.php');
?>