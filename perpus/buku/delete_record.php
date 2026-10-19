<?php
include('db.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Prepare the SQL statement
    $stmt = $conn->prepare("DELETE FROM buku WHERE kode_buku = ?");
    $stmt->bind_param("i", $id);

    // Execute the statement
    if ($stmt->execute()) {
        echo "<script>alert('Data Berhasil Di Hapus :)'); window.location.href = 'buku.php';</script>";
    } else {
        echo "<script>alert('Data Gagal Di Hapus :(" . $conn->error . "'); window.location.href = 'buku.php';</script>";
    }

    $stmt->close();
    $conn->close();

    // Redirect back to the main page

} else {
    echo "No ID provided.";
}
?>