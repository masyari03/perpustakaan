<?php
include('db.php');

if (isset($_GET['npm']) && isset($_GET['nama_mahasiswa']) && isset($_GET['jurusan']) && isset($_GET['kelas'])) {
    $Npm = $_GET['npm'];
    $nama = $_GET['nama_mahasiswa'];
    $jurusan = $_GET['jurusan'];
    $kelas = $_GET['kelas'];

    // Prepare the SQL statement
    $stmt = $conn->prepare("UPDATE mahasiswa SET nama_mahasiswa=?, jurusan=?, kelas=? WHERE npm=?");
    $stmt->bind_param("ssss", $nama, $jurusan, $kelas, $Npm);

    // Execute the statement
    if ($stmt->execute()) {
        echo "<script>alert('Data Berhasil Di Ubah :)'); window.location.href = 'mahasiswa.php';</script>";
    } else {
        echo "<script>alert('Data Gagal Di Ubah :(" . $conn->error . "'); window.location.href = 'mahasiswa.php'; </script>";
    }

    $stmt->close();
    $conn->close();

    // Redirect back to the main page

} else {
    echo "Incomplete data provided.";
}
?>