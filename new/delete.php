<?php
require_once 'function.php';

$id = $_GET['id'];
$data = new Connection();
$data->delete_data($id);
// Mesage after updation
echo "<script>alert('Record Deleted successfully');</script>";
// Code for redirection
echo "<script>window.location.href='index.php'</script>";

?>