<?php
include('db.php');

if (isset($_GET['jenis']) && isset($_GET['blok']) && isset($_GET['lantai'])) {
    $jenisb = $_GET['jenis'];
    $blokb = $_GET['blok'];
    $lantaib = $_GET['lantai'];


    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO rak_buku (jenis, blok, lantai) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $jenisb, $blokb,  $lantaib);

    // Execute the statement
    if ($stmt->execute()) {
        echo "<script>alert('Data Berhasil Di Masukan :)'); window.location.href = 'rak.php';</script>";
    } else {
        echo "<script>alert('Data Gagal Di Masukan :(" . $conn->error . "'); window.location.href = 'rak.php';</script>";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Required data not provided.";
}
?>