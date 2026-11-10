<html>
<body>
    <p>Anda login sebagai: <b><?= $_SESSION['jabatan'] ?></b> | <a href="index.php?aksi=logout">Logout</a></p>
    
    <?php if ($_SESSION['jabatan'] == 'Kepala Departemen') { ?>
    <form action="index.php?aksi=tambah" method="POST">
        Nomor: <input type="text" name="nomor">
        Nama: <input type="text" name="nama">
        Surat: <input type="text" name="surat">
        <input type="submit" value="Tambah">
    </form>
    <br>
    <?php } ?>

    <table border="1">
        <tr>
            <td>No</td><td>Nama</td><td>Surat</td>
            <?php if ($_SESSION['jabatan'] == 'Kepala Departemen') echo "<td>Aksi</td>"; ?>
        </tr>
        <?php foreach ($proker as $p) { ?>
        <tr>
            <td><?= $p['nomorProgram'] ?></td>
            <td><?= $p['namaProgram'] ?></td>
            <td><?= $p['suratKeterangan'] ?></td>
            <?php if ($_SESSION['jabatan'] == 'Kepala Departemen') { ?>
            <td><a href="index.php?aksi=hapus&nomor=<?= $p['nomorProgram'] ?>">Hapus</a></td>
            <?php } ?>
        </tr>
        <?php } ?>
    </table>
</body>
</html>