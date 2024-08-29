<?php
session_start();

// Static username and password for demonstration
$valid_username = "shafin";
$valid_password = "im25";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == $valid_username && $password == $valid_password) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
    } else {
        echo "Invalid username or password";
    }
}
?>