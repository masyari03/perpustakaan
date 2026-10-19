<?php
include('db.php');
session_start();
if (!isset($_SESSION['username'])) {
    echo "<script>alert('Please login first.'); window.location.href = '../index.php';</script>";
    exit();
}

$username = $_SESSION['username'];

// Ambil id_users berdasarkan username
$stmt = $conn->prepare("SELECT id FROM users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 0) {
    echo "<script>alert('User not found.'); window.location.href = '../index.php';</script>";
    exit();
}

$user = $result->fetch_assoc();
$id_users = $user['id'];

// Ambil NIP berdasarkan id_users
$stmt = $conn->prepare("SELECT nip FROM pegawai WHERE id_users = ?");
$stmt->bind_param("i", $id_users);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 0) {
    echo "<script>alert('NIP not found for the user.'); window.location.href = '../pinjam.php';</script>";
    exit();
}

$pegawai = $result->fetch_assoc();
$nip = $pegawai['nip'];

if (isset($_GET['kode_buku']) && isset($_GET['npm']) && isset($_GET['tgl_pinjam']) && isset($_GET['tgl_kembali'])) {
    $kodeBuku = $_GET['kode_buku'];
    $npm = $_GET['npm'];
    $tglPinjam = $_GET['tgl_pinjam'];
    $tglKembali = $_GET['tgl_kembali'];
    $kembali = 'n'; // Default value for the "kembali" field

    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO pinjam (kode_buku, nip, npm, tgl_pinjam, tgl_kembali, kembali) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $kodeBuku, $nip, $npm, $tglPinjam, $tglKembali, $kembali);

    // Execute the statement
    if ($stmt->execute()) {
        echo "<script>alert('Data Berhasil Di Masukan :)'); window.location.href = 'peminjaman.php';</script>";
    } else {
        echo "<script>alert('Data Gagal Di Masukan :(" . $conn->error . "'); window.location.href = 'peminjaman.php';</script>";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Required data not provided.";
}
?>