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
            var kodeBuku = prompt("Masukan Kode Buku:");
            if (!kodeBuku) return;

            var judul_buku = prompt("Masukan Judul Buku:");
            if (!judul_buku) return;

            var penerbit = prompt("Masukan Penerbit:");
            if (!penerbit) return;

            var pengarang = prompt("Masukan Pengarang:");
            if (!pengarang) return;

            var thn_terbit = prompt("Masukan Tahun Terbit");
            if (!thn_terbit) return;

            var jenis    = prompt("Masukan Jenis Buku");
            if (!jenis) return;

            window.location.href = `add_record.php?kode_buku=${kodeBuku}&judul_buku=${judul_buku}&penerbit=${penerbit}&pengarang=${pengarang}&thn_terbit=${thn_terbit}&jenis=${jenis}`;
        }

        function deleteRecord() {
            var id = prompt("Masukan Kode Buku Yang Ingin Dihapus:");
            if (id) {
                window.location.href = `delete_record.php?id=${id}`;
            }}

        function editRecord() {
            var kodeBuku = prompt("Enter the ID of the record to edit:");
            if (kodeBuku) {

                var judulBuku = prompt("Enter new Judul Buku:");
                if (!judulBuku) return;

                var penerbit = prompt("Enter new Penerbit:");
                if (!penerbit) return;

                var pengarang = prompt("Enter new Pengarang:");
                if (!pengarang) return;

                var thnTerbit = prompt("Enter new Tahun Terbit:");
                if (!thnTerbit) return;

                var jenis = prompt("Enter new Jenis:");
                if (!jenis) return;

                window.location.href = `edit_record.php?kode_buku=${kodeBuku}&judul_buku=${judulBuku}&penerbit=${penerbit}&pengarang=${pengarang}&thn_terbit=${thnTerbit}&jenis=${jenis}`;
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

    <table>
        <thead>
            <tr>
                <th>Kode Buku</th>
                <th>Judul Buku</th>
                <th>Penerbit   </th>
                <th>Pengarang   </th>
                <th>Tahun Terbit  </th>
                <th>Jenis Buku   </th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "select*from buku order by kode_buku asc";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["kode_buku"] . "</td>";
                    echo "<td>" . $row["judul_buku"] . "</td>";
                    echo "<td>" . $row["penerbit"] . "</td>";
                    echo "<td>" . $row["pengarang"] . "</td>";
                    echo "<td>" . $row["thn_terbit"] . "</td>";
                    echo "<td>" . $row["jenis"] . "</td>";
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

</body>
</html>