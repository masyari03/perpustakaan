<?php
include('db.php');

if (isset($_GET['nip']) && isset($_GET['nama_pegawai']) ) {
    $Nip = $_GET['nip'];
    $nama = $_GET['nama_pegawai'];

    // Prepare the SQL statement
    $stmt = $conn->prepare("UPDATE pegawai SET nama_pegawai=? WHERE nip=?");
    $stmt->bind_param("si", $nama, $Nip);

    // Execute the statement
    if ($stmt->execute()) {
        echo "<script>alert('Data Berhasil Di Ubah :)'); window.location.href = 'pegawai.php';</script>";
    } else {
        echo "<script>alert('Data Gagal Di Ubah :(" . $conn->error . "'); window.location.href = 'pegawai.php';</script>";
    }

    $stmt->close();
    $conn->close();

} else {
    echo "Incomplete data provided.";
}
?>