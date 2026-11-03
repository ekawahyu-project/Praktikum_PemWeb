<?php
session_start();
if (!isset($_SESSION["user"]) || !isset($_SESSION["password"])) {
    header("Location: login.php");
    exit;
}
?>

<?php
if (isset($_POST['cd_order']) && isset($_POST['dvd_order'])) {
    setcookie("cd_order", $_POST['cd_order']);
    setcookie("dvd_order", $_POST['dvd_order']);
    header("Location: Lat3_4c.php");
}
