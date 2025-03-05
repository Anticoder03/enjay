<?php
include './conn.php';
$id = $_GET['id'];
$sql = "DELETE FROM `tb1` WHERE `tb1`.`id` = $id";
$result = mysqli_query($conn, $sql);
if($result){
    echo "<script>alert('Deleted')</script>";
    header("Location: dashboard.php");
}
?>