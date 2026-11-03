<?php
include "koneksi.php";

$e = $_GET['e'] ?? '';
$data = ['username' => '', 'password' => '', 'level' => ''];

if (empty($e)) {
    $title = "Tambah User";
} else {
    $title = "Edit User";
    $username = mysqli_real_escape_string($link, $_GET['username']);
    $q = mysqli_query($link, "SELECT * FROM user WHERE username = '$username'");
    $data = mysqli_fetch_array($q);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
</head>
<body>
    <h1><?php echo $title; ?></h1>
    <form method="post" action="Lat5_3.php">
        <input type="hidden" name="e" value="<?php echo $e ? $data['username'] : ''; ?>">
        <table border="1">
            <tr>
                <td>Username</td>
                <td><input name="username" type="text" value="<?php echo $data['username']; ?>"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input name="password" type="text" value="<?php echo $data['password']; ?>"></td>
            </tr>
            <tr>
                <td>Level</td>
                <td><input name="level" type="text" value="<?php echo $data['level']; ?>"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>