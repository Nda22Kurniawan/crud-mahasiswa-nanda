<?php
include("koneksi.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM mahasiswa WHERE id = $id";
    $query = mysqli_query($koneksi, $sql);

    if ($query) {
        header('location: index.php');
    } else {
        echo "Gagal Menghapus Data Mahasiswa <a href=index.php>Halaman Index</a>";
    }
} else {
    echo "Anda tidak mempunyai akses <a href=index.php>Halaman Index</a>";
}
?>
