<?php
session_start();

function faktorial($n) {
    $hasil = 1;
    for ($i = 2; $i <= $n; $i++) {
        $hasil *= $i;
    }
    return $hasil;
}

$angka = (int) $_POST["angka"];
$hasil = faktorial($angka);

echo "Angka: $angka <br>";
echo "Faktorial: $hasil <br>";

$_SESSION["data"] = [
    "angka"     => $angka,
    "faktorial" => $hasil,
    "nim"       => "255150600111029",
    "nama"      => "Eka Wahyu Maulidan"
];
?>
<a href="Lat3_3c.php">Ke halaman ketiga</a>