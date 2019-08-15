<?php include 'db.php' ?>
<?php
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hashed_password = md5($password);
    $query = "SELECT * FROM users WHERE username = '$_POST[username]'";
    $result = mysqli_query($conn, $query);
    $count = mysqli_num_rows($result);
    $role = "user";
    if ($count > 0) {
        $unameErr = "* That username already exists. Please try again with different username";
        $color = "red";
    } else {
        $sql = "INSERT INTO users(username,password,role) VALUES('$_POST[username]','$hashed_password','$role')";
        mysqli_query($conn, $sql);
    }
    header("Location: ../register.php");
}
?>