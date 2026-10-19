<?php
include('db.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Prepare the SQL statement
    $stmt = $conn->prepare("DELETE FROM pinjam WHERE id_pinjam = ?");
    $stmt->bind_param("i", $id);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Record with ID $id has been deleted successfully.";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $stmt->close();
    $conn->close();

    // Redirect back to the main page
    header("Location: arsip.php");
    exit();
} else {
    echo "No ID provided.";
}
?>