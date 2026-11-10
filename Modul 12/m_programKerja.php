<?php
require "koneksiMVC.php";
class m_programKerja {
    public function getSemuaProgramKerja() {
        global $mysqli;
        $rs = $mysqli->query("SELECT * FROM proker");
        $rows = array();
        while($row = $rs->fetch_assoc()) { $rows[] = $row; }
        return $rows;
    }
    public function tambahProgramKerja($nomor, $nama, $surat) {
        global $mysqli;
        $mysqli->query("INSERT INTO proker VALUES ('$nomor', '$nama', '$surat')");
    }
    public function hapusProgramKerja($nomor) {
        global $mysqli;
        $mysqli->query("DELETE FROM proker WHERE nomorProgram='$nomor'");
    }
}
?>