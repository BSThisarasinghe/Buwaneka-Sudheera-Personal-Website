<?php require_once("sessions.php"); ?>
<?php include("db.php"); ?>
<?php
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hashed_password = md5($password);
    $sql = "SELECT * FROM users WHERE username = '$_POST[username]'";
    $role_set = mysqli_query($conn, $sql);
    $role = mysqli_fetch_assoc($role_set);
    if (!empty($username) && !empty($password)) {
        if ($role['password'] == $hashed_password) {
            if ($role["role"] == "admin") {
                $_SESSION["id"] = $role["id"];
                $_SESSION["username"] = $role["username"];
                header("Location: ../dashboard.php");
            }
        } else {
            $_SESSION["message"] = "Login failed!";
            header("Location: ../index.php");
        }
    }
}
?>