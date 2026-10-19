# 📚 Sistem Informasi Manajemen Perpustakaan Terpadu

Aplikasi Web Sistem Informasi Perpustakaan untuk mendigitalkan proses sirkulasi peminjaman buku, katalog pustaka, pengarsipan rak, serta manajemen anggota mahasiswa dan pegawai kampus.

---

## 🌟 Fitur Utama
- **Katalog & Koleksi Buku**: Pencatatan buku komprehensif (kode buku, judul, penerbit, pengarang, tahun terbit, kategori/jenis).
- **Sirkulasi Peminjaman & Pengembalian**: Transaksi peminjaman terintegrasi dengan validasi mahasiswa (NPM), pegawai (NIP), dan tanggal jatuh tempo.
- **Manajemen Anggota**: Kelola data mahasiswa dan staf pegawai perpustakaan.
- **Arsip & Lokasi Rak Buku**: Pemetaan letak fisik buku berdasarkan kategori, kode blok, dan lantai perpustakaan.
- **Authentication & Keamanan**: Panel login terproteksi untuk pustakawan/administrator.

---

## 🛠️ Tech Stack
- **Backend**: PHP Native (MySQLi)
- **Database**: MySQL / MariaDB (`perpustakaan`)
- **UI & Styling**: Bootstrap & Responsive Layout

---

## 🚀 Panduan Instalasi Lokal

### 1. Prasyarat
- Web Server (Laragon / XAMPP) dengan PHP 7.4 - 8.2
- MySQL Server 5.7 / 8.0

### 2. Setup Database
1. Buat database baru bernama `perpustakaan` di MySQL.
2. Import file SQL `perpustakaan.sql` ke dalam database tersebut.
3. Konfigurasi koneksi di file `perpus/db.php`:
   ```php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "perpustakaan";
   ```

### 3. Akses Aplikasi
- Buka browser dan kunjungi: `http://localhost/perpustakaan/perpus` (atau `http://perpustakaan.test/perpus`).

---

## 🔐 Akun Login Default (Demo)
| Role | Username | Password |
| :--- | :--- | :--- |
| **Pustakawan / Admin** | `admin` | `admin` |
| **Staff** | `asyari` | `1234` |

---

## 👨‍💻 Pengembang
Dikembangkan oleh **Muhammad Asy'ari Arif Yusuf**  
GitHub: [@masyari03](https://github.com/masyari03)
