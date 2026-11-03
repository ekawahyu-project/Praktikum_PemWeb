<?php
include "koneksi.php";

$link = mysqli_connect("localhost", "root", "", "praktikumWeb")
    or die("Failed");
$q = mysqli_query($link, "SELECT * FROM user");
echo '<form action="Lat5_2.php" method="POST"><input type="submit" value="Tambah User"></form>';
echo '<table border="1">
        <th>Username</th><th>Password</th><th>level</th><th>aksi</th>';

while ($hasil = mysqli_fetch_array($q)) {
    echo "<tr><td>$hasil[username]</td>
              <td>$hasil[password]</td>
              <td>$hasil[level]</td>
              <td><a href='Lat5_2.php?username=$hasil[username]&e=1'>Edit</a></td>
          </tr>";
}
echo "</table>";
