<?php
include('db.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Prepare the SQL statement
    $stmt = $conn->prepare("UPDATE pinjam SET kembali='n' WHERE id_pinjam=?");
    $stmt->bind_param("i", $id);

    // Execute the statement
    if ($stmt->execute()) {
        echo "<script>alert('Data Berhasil Di Ubah :)'); window.location.href = 'arsip.php';</script>";
    } else {
        echo "<script>alert('Data Gagal Di Ubah :(" . $conn->error . "'); window.location.href = 'arsip.php';</script>";
    }

    $stmt->close();
    $conn->close();


} else {
    echo "No ID provided.";
}
?>