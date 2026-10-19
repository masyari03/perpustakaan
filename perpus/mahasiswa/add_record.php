<?php
include('db.php');


if (isset($_GET['npm']) && isset($_GET['nama_mahasiswa']) && isset($_GET['jurusan']) && isset($_GET['kelas'])) {
    $Npm = $_GET['npm'];
    $nama = $_GET['nama_mahasiswa'];
    $jurusan = $_GET['jurusan'];
    $kelas = $_GET['kelas'];
    
    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO mahasiswa (npm, nama_mahasiswa, jurusan, kelas) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $Npm, $nama, $jurusan, $kelas);

    // Execute the statement
    if ($stmt->execute()) {
        echo "<script>alert('Data Berhasil Di Masukan :)'); window.location.href = 'mahasiswa.php';</script>";
    } else {
        echo "<script>alert('Data Gagal Di Masukan :(" . $conn->error . "'); window.location.href = 'mahasiswa.php';</script>";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Required data not provided.";
}
?>