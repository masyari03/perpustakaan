<?php
include('db.php');

if (isset($_GET['jenis']) && isset($_GET['blok']) && isset($_GET['lantai'])) {
    $jenisb = $_GET['jenis'];
    $blokb = $_GET['blok'];
    $lantaib = $_GET['lantai'];


    // Prepare the SQL statement
    $stmt = $conn->prepare("UPDATE rak_buku SET  blok=?, lantai=? WHERE jenis=?");
    $stmt->bind_param("sss", $blokb,  $lantaib, $jenisb);

    // Execute the statement
    if ($stmt->execute()) {
        echo "<script>alert('Data Berhasil Di Ubah :)'); window.location.href = 'rak.php';</script>";
    } else {
        echo "<script>alert('Data Gagal Di Ubah :(" . $conn->error . "'); window.location.href = 'rak.php';</script>";
    }

    $stmt->close();
    $conn->close();

    // Redirect back to the main page

} else {
    echo "Incomplete data provided.";
}
?>