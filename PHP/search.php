<?php
@include 'config.php';

if (isset($_POST['search'])) {
    $search_term = mysqli_real_escape_string($conn, $_POST['search_term']);
    
    // Query to search for the term in a specific table, e.g., searching in 'name' and 'email' fields of 'user_form' table
    $query = "SELECT * FROM user_form WHERE name LIKE '%$search_term%' OR email LIKE '%$search_term%'";
    $result = mysqli_query($conn, $query);

    // If search results found, display them
    if (mysqli_num_rows($result) > 0) {
        echo "<h3>Search Results:</h3>";
        echo "<ul>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<li>Name: " . $row['name'] . " | Email: " . $row['email'] . "</li>";
        }
        echo "</ul>";
    } else {
        // If no result found, show an alert message
        echo "<script>alert('No results found!'); window.location.href = 'search_page.php';</script>";
    }
}
?>
