<?php
session_start();
include_once("m_programKerja.php");

class c_programKerja {
    public $model;
    
    public function __construct() { 
        $this->model = new m_programKerja(); 
    }
    
    public function invoke() {
        if (isset($_GET['aksi']) && $_GET['aksi'] == 'logout') {
            session_destroy();
            header("Location: index.php");
            exit;
        }

        if (!isset($_SESSION['jabatan'])) {
            if (isset($_POST['login'])) {
                $_SESSION['jabatan'] = $_POST['jabatan'];
                header("Location: index.php");
            } else {
                include 'v_login.php';
            }
        } else {
            if (isset($_GET['aksi']) && $_SESSION['jabatan'] == 'Kepala Departemen') {
                if ($_GET['aksi'] == 'tambah') {
                    $this->model->tambahProgramKerja($_POST['nomor'], $_POST['nama'], $_POST['surat']);
                } elseif ($_GET['aksi'] == 'hapus') {
                    $this->model->hapusProgramKerja($_GET['nomor']);
                }
                header("Location: index.php");
            } else {
                $proker = $this->model->getSemuaProgramKerja();
                include 'v_programKerja.php';
            }
        }
    }
}
?>