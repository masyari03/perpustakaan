<?php
session_start();
include('db.php');
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

// Ambil nama pegawai berdasarkan id_users
$stmt = $conn->prepare("SELECT nama_pegawai FROM pegawai WHERE id_users = ?");
$stmt->bind_param("i", $id_users);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 0) {
    echo "<script>alert('Pegawai not found for the user.'); window.location.href = '../index.php';</script>";
    exit();
}

$pegawai = $result->fetch_assoc();
$namaPegawai = $pegawai['nama_pegawai'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>E-Perpustakaan</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript">
        function addRecord() {
            var jenisb = prompt("Nama Jenis Buku (Novel):");
            if (!jenisb) return;

            var blokb = prompt("Masukan Blok Buku:");
            if (!blokb) return;

            var lantaib = prompt("Masukan Lantai:");
            if (!lantaib) return;

            window.location.href = `add_record.php?jenis=${jenisb}&blok=${blokb}&lantai=${lantaib}`;
        }

        function deleteRecord() {
            var id = prompt("Masukan Blok Yang Ingin Dihapus:");
            if (id) {
                window.location.href = `delete_record.php?id=${id}`;
            }}


            function editRecord() {
            var jenisb = prompt("Masukan Jenis Buku Yang Ingin Diubah Letaknya:");
            if (jenisb) {
                var blokb = prompt("Blok Baru:");
                if (!blokb) return;

                var lantaib = prompt("Lantai Baru:");
                if (!lantaib) return;

                window.location.href = `edit_record.php?jenis=${jenisb}&blok=${blokb}&lantai=${lantaib}`;
            }
        }
    </script>
</head>
<body>

<div class="container">
    <h1>E-PERPUSTAKAAN</h1>
    <h3>BUKU ADALAH JENDELA DUNIA </h3>
    
    <div>
<strong>Pegawai</strong><br>
<?php echo $namaPegawai; ?>
</div>
    <div class="navbar">
        <a href="../pinjam/peminjaman.php">Peminjam</a>
        <a href="../buku/buku.php">Buku</a>
        <a href="../mahasiswa/mahasiswa.php">Mahasiswa</a>
        <a href="../pegawai/pegawai.php">Pegawai</a>
        <a href="../arsip/arsip.php">Arsip</a>
        <a href="../rak/rak.php">Rak</a>
        <a href="logout.php">Logout</a>
    </div>
    
    <div class="main-content">
        <div class="sidebar">
            <button onclick="addRecord()">Tambah</button>
            <button onclick="editRecord()">Edit</button>
            <button onclick="deleteRecord()">Hapus</button>
            <button onclick="window.location.reload();">Refresh</button>
            <button onclick="window.print();">Cetak Data</button>
        </div>

    
<div class="printable">
    <table>
        <thead>
            <tr>
                <th width="300px">Jenis Buku</th>
                <th width="250px">Blok</th>
                <th width="250px">Lantai</th>

            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "select*from rak_buku order by jenis asc";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["jenis"] . "</td>";
                    echo "<td>" . $row["blok"] . "</td>";
                    echo "<td>" . $row["lantai"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No records found</td></tr>";
            }
            $conn->close();
            ?>
        </tbody>
    </table>
</div>
</div>

</body>
</html>