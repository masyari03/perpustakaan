<?php
include('db.php');

if (isset($_GET['id']) && isset($_GET['kode_buku'])) {
    $id = $_GET['id'];
    $kodeBuku = $_GET['kode_buku'];

    // Prepare the SQL statement
    $stmt = $conn->prepare("UPDATE pinjam SET kode_buku=? WHERE id_pinjam=?");
    $stmt->bind_param("si", $kodeBuku, $id);

    // Execute the statement
    if ($stmt->execute()) {
        echo "<script>alert('Data Berhasil Di Ubah :)'); window.location.href = 'peminjaman.php';</script>";
    } else {
        echo "<script>alert('Data Gagal Di Ubah :(" . $conn->error . "'); window.location.href = 'peminjaman.php';</script>";
    }

    $stmt->close();
    $conn->close();

    // Redirect back to the main page

} else {
    echo "Incomplete data provided.";
}
?>