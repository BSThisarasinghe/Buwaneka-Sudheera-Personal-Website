<?php include 'db.php' ?>
<?php require_once("sessions.php"); ?>
<?php require_once("functions.php"); ?>
<?php confirm_logged_in(); ?>
<?php
$id = $_GET['id'];

$sql = "DELETE FROM main_details WHERE id='$id'";
mysqli_query($conn, $sql);
header("Location: ../dashboard.php");
?>
