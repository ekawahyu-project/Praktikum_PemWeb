<?php
$mysqli = new mysqli('localhost', 'root', '', 'praktikumWeb');

$username = $mysqli->real_escape_string($_POST['username']);
$password = $mysqli->real_escape_string($_POST['password']);

$rs = $mysqli->query("CALL SP_Login ('".$username."','".$password."')");
$row = $rs->fetch_object();

if ($row) {
    header("Location: Lat5_1.php");
} else {
    echo "Data tidak terdaftar";
    echo "<br><a href='formLogin.html'>Kembali ke login</a>";
}