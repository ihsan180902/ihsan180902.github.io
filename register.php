<?php
require 'koneksi.php';
$email = $_POST["email"];
$username = $_POST["username"];
$namalengkap = $_POST["namalengkap"];
$password = $_POST["password"];

$query_sql = "INSERT INTO user (email, username, namalengkap, password)
VALUES ('$email', '$username', '$namalengkap', '$password')";

if (mysqli_query($conn, $query_sql)){
    header("location:login.html");
} else {
    header("location:register.html");
}

?>