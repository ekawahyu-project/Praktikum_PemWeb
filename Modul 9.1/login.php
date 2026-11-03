<?php
session_start();
$pesan = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["user"] == "admin" && $_POST["password"] == "admin") {
        $_SESSION["user"] = $_POST["user"];
        $_SESSION["password"] = $_POST["password"];
        header("Location: Lat3_4a.php");
        exit;
    }
    $pesan = "User atau password salah";
}
?>
<form method="post">
    User: <input type="text" name="user"><br>
    Password: <input type="password" name="password"><br>
    <input type="submit" value="Login">
</form>
<?php echo $pesan; ?>