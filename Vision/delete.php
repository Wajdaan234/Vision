<?php
include 'signup_connection.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Get the ID from the URL and ensure it's an integer

    // Prepare and execute the delete query
    $query = "DELETE FROM `signup` WHERE `id` = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "Record deleted successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

mysqli_close($conn);

// Redirect back to the admin dashboard
header("Location: table.php");
exit;
?>
