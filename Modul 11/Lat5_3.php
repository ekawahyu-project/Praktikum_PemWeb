<?php
include "koneksi.php";

$e        = $_POST['e'] ?? '';
$username = mysqli_real_escape_string($link, $_POST['username']);
$password = mysqli_real_escape_string($link, $_POST['password']);
$level    = (int) $_POST['level'];

if (empty($e)) {
    mysqli_query($link, "INSERT INTO user VALUES ('$username', '$password', $level)");
} else {
    mysqli_query($link, "UPDATE user SET password = '$password', level = $level WHERE username = '$username'");
}

header("Location: Lat5_1.php");
exit;