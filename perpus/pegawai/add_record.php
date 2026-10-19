<?php
include('db.php');

if ( isset($_GET['username']) && isset($_GET['password']) && isset($_GET['nip']) && isset($_GET['nama_pegawai']) ) {
    $user = $_GET['username'];
    $pass = md5($_GET['password']);
    $Nip = $_GET['nip'];
    $nama = $_GET['nama_pegawai'];
    

    

    // Prepare the SQL statement

    $stmt = $conn->prepare("INSERT INTO users ( username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $user,$pass);
    if ($stmt->execute()) {
        echo "<script>alert('Data Berhasil Di Masukan :)');</script>";
    } else {
        echo "<script>alert('Data Gagal Di Masukan :(" . $conn->error . "'); </script>";
    }

    $id_users = $stmt->insert_id;

    $stmt = $conn->prepare("INSERT INTO pegawai (nip,id_users, nama_pegawai) VALUES (?,?, ?)");
    $stmt->bind_param("sis", $Nip,$id_users, $nama);



    // Execute the statement
    if ($stmt->execute()) {
        echo "<script>alert('Data Berhasil Di Masukan :)'); window.location.href = 'pegawai.php';</script>";
    } else {
        echo "<script>alert('Data Gagal Di Masukan :(" . $conn->error . "'); window.location.href = 'pegawai.php';</script>";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Required data not provided.";
}
?>