<?php include 'db.php' ?>
<?php require_once("sessions.php"); ?>
<?php
if (isset($_POST['submit'])) {
    $from = $_POST['from'];
    $to = $_POST['to'];
    $route = $_POST['route'];
    $direction = $_POST['direction'];

    $sql = "INSERT INTO main_details(start,end,route_no,direction) VALUES('$_POST[from]','$_POST[to]','$_POST[route]','$_POST[direction]')";
    mysqli_query($conn, $sql);
    header("Location: ../dashboard.php");
    header("refresh: 3");
}
?>