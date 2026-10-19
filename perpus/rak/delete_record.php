<?php
include('db.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Prepare the SQL statement
    $stmt = $conn->prepare("DELETE FROM rak_buku WHERE blok = ?");
    $stmt->bind_param("s", $id);

    // Execute the statement
    if ($stmt->execute()) {
        echo "<script>alert('Data Berhasil Di Hapus :)'); window.location.href = 'rak.php';</script>";
    } else {
        echo "<script>alert('Data Gagal Di Hapus :(" . $conn->error . "'); window.location.href = 'rak.php';</script>";
    }

    $stmt->close();
    $conn->close();

} else {
    echo "No ID provided.";
}
?>