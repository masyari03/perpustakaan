<?php
include('db.php');

if (isset($_GET['kode_buku']) && isset($_GET['judul_buku']) && isset($_GET['penerbit']) && isset($_GET['pengarang']) && isset($_GET['thn_terbit']) && isset($_GET['jenis'])) {
    $kodeBuku = $_GET['kode_buku'];
    $judul_buku = $_GET['judul_buku'];
    $penerbit = $_GET['penerbit'];
    $pengarang = $_GET['pengarang'];
    $thn_terbit = $_GET['thn_terbit'];
    $jenis = $_GET['jenis'];


    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO buku (kode_buku, judul_buku, penerbit, pengarang, thn_terbit,jenis) VALUES (?, ?, ?,?, ?, ?)");
    $stmt->bind_param("ssssss", $kodeBuku, $judul_buku,  $penerbit,$pengarang, $thn_terbit, $jenis);

    // Execute the statement
    if ($stmt->execute()) {
        echo "<script>alert('Data Berhasil Di Masukan :)'); window.location.href = 'buku.php';</script>";
    } else {
        echo "<script>alert('Data Gagal Di Masukan :(" . $conn->error . "'); window.location.href = 'buku.php';</script>";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Required data not provided.";
}
?>