<?php
function logged_in()
{
    return isset($_SESSION['id']);
}

function confirm_logged_in()
{
    if (!logged_in()) {
        header("Location: index.php");
    }
}

?>