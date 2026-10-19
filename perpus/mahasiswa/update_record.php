<?php
include('db.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Prepare the SQL statement
    $stmt = $conn->prepare("UPDATE pinjam SET kembali='y' WHERE id_pinjam=?");
    $stmt->bind_param("i", $id);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Record with ID $id has been marked as complete.";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $stmt->close();
    $conn->close();

    // Redirect back to the main page
    header("Location: peminjaman.php");
    exit();
} else {
    echo "No ID provided.";
}
?>