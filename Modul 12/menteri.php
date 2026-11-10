<?php
require_once 'pengurusBEM.php';

class Menteri extends pengurusBEM {
    public function setJabatan($jabatan) {
        $this->jabatan = $jabatan;
    }

    public function getJabatan() {
        return $this->jabatan;
    }
}
?>