<?php
// Include the database connection file or class if using the DBConnect class
require_once 'DBConnect.php';

// Check if the ID is set in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $dbConnect = new DBConnect();

    try {
        // Prepare the delete statement
        $stmt = $dbConnect->conn->prepare("DELETE FROM crud WHERE id = :id");
        $stmt->bindParam(":id", $id);

        // Execute the delete operation
        $stmt->execute();

        echo "User record deleted successfully!";
        echo "You'll be redirected to the user page in 1 seconds.";
        header("refresh:1;url=user.php"); // Redirect after 1 seconds to the user page
        exit();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "No ID specified.";
}
?>
