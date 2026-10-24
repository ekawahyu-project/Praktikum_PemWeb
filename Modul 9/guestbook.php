<?php
$file = "guestbook.txt";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = str_replace(";", ",", trim($_POST['nama']));
    $komentar = str_replace([";", "\n", "\r"], [",", " ", ""], trim($_POST['komentar']));

    if ($nama !== "" && $komentar !== "") {
        file_put_contents($file, $nama . ";" . $komentar . "\n", FILE_APPEND | LOCK_EX);
    }
}
?>
<!DOCTYPE html>
<html>
<head><title>Guestbook</title></head>
<body>
    <h2>Buku Tamu</h2>
    <form method="post">
        Nama: <input type="text" name="nama" required><br><br>
        Komentar:<br>
        <textarea name="komentar" required></textarea><br><br>
        <button type="submit">Kirim</button>
    </form>

    <h3>Daftar Komentar</h3>
    <?php
    if (file_exists($file)) {
        $baris = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($baris as $b) {
            $data = explode(";", $b);
            echo "<p><strong>" . htmlspecialchars($data[0]) . "</strong>: "
               . htmlspecialchars($data[1]) . "</p>";
        }
    }
    ?>
</body>
</html>