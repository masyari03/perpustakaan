<?php
include('db.php');

if (isset($_GET['kode_buku']) && isset($_GET['judul_buku']) && isset($_GET['penerbit']) && isset($_GET['pengarang']) && isset($_GET['thn_terbit']) && isset($_GET['jenis'])) {
    $id = $_GET['kode_buku'];
    $judulBuku = $_GET['judul_buku'];
    $penerbit = $_GET['penerbit'];
    $pengarang = $_GET['pengarang'];
    $thnTerbit = $_GET['thn_terbit'];
    $jenis = $_GET['jenis'];

    // Prepare the SQL statement
    $stmt = $conn->prepare("UPDATE buku SET judul_buku=?, penerbit=?, pengarang=?, thn_terbit=?, jenis=? WHERE kode_buku=?");
    $stmt->bind_param("sssssi", $judulBuku, $penerbit, $pengarang, $thnTerbit, $jenis, $id);

    // Execute the statement
    if ($stmt->execute()) {
        echo "<script>alert('Data Berhasil Di Ubah :)'); window.location.href = 'buku.php';</script>";
    } else {
        echo "<script>alert('Data Gagal Di Ubah :(" . $conn->error . "'); window.location.href = 'buku.php';</script>";
    }

    $stmt->close();
    $conn->close();

} else {
    echo "Incomplete data provided.";
}

?>