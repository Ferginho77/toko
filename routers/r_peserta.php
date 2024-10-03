<?php 

require_once '../controllers/c_peserta.php';

$peserta = new C_peserta();

if(isset($_GET['aksi'])) {
    // Aksi tambah
    if ($_GET['aksi'] == 'tambah') {
        if (isset($_POST['tambah'])) {
            $nama_anjing = $_POST['nama_anjing'];
            $nama_pemilik = $_POST['nama_pemilik'];
            $handler = $_POST['handler'];
            $size = $_POST['size'];
            $kelas = $_POST['kelas'];
            $IdKategori = $_POST['IdKategori'];
        
            $peserta->TambahPeserta($nama_anjing, $nama_pemilik, $handler, $size, $kelas, $IdKategori);
            var_dump($_POST);
            exit;
        }
        
    }

    if ($_GET['aksi'] == 'hapus') {
        $no_peserta = $_GET['no_peserta'];
        $result = $peserta->hapus($no_peserta);

        if ($result) {
            header("Location: ../views/devent.php");
        } else {
            echo "<script>alert('Data Gagal Dihapus');window.location='../views/kategori.php'</script>";
        }
    }
}