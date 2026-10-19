<?php
include('db.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Prepare the SQL statement
    $stmt = $conn->prepare("DELETE FROM pegawai WHERE nip = ?");
    $stmt->bind_param("i", $id);

    // Execute the statement
    if ($stmt->execute()) {
        echo "<script>alert('Record with ID $id has been successfully edited.'); window.location.href = 'mahasiswa.php';</script>";
    } else {
        echo "<script>alert('Failed to edit record: " . $conn->error . "'); window.location.href = 'mahasiswa.php';</script>";
    }

    $stmt->close();
    $conn->close();

    // Redirect back to the main page
    header("Location: pegawai.php");
    exit();
} else {
    echo "No ID provided.";
}
?>