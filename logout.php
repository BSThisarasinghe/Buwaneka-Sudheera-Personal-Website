<?php require_once("includes/sessions.php"); ?>
<?php include 'includes/db.php' ?>
<?php
$_SESSION["id"] = NULL;
$_SESSION["username"] = NULL;
header("Location: index.php");
?>