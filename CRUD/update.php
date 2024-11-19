<?php
class DBConnect {
    public $conn;

    public function __construct() {
        // Database connection variables
        $host = "localhost";
        $dbname = "crud-project";
        $username_db = "root";
        $password_db = "";

        try {
            // Connect to the database
            $this->conn = new PDO("mysql:host=$host;dbname=$dbname", $username_db, $password_db);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}

// Initialize the DB connection
$dbConnect = new DBConnect();

// Check if the ID is set in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch existing data for the user
    $stmt = $dbConnect->conn->prepare("SELECT * FROM crud WHERE id = :id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Check if the user exists
    if (!$user) {
        die("User not found");
    }
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $age = $_POST["age"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    // Hash the password for security (optional)
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    try {
        // Update the user information in the database
        $stmt = $dbConnect->conn->prepare("UPDATE crud SET name = :name, age = :age, email = :email, password = :password WHERE id = :id");
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":age", $age);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":password", $hashed_password);
        $stmt->bindParam(":id", $id); // Bind the ID to update the correct record
        $stmt->execute();

        echo "User information updated successfully!";
        echo "You'll be redirected to the user page in 1 seconds.";
        header("refresh:1;url=user.php"); // Redirect to user page after 1 seconds
        exit(); // Ensure script termination after header redirect
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage(); // Display error message for debugging
    }
}
?>

<!-- HTML Form for Updating the Record -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Update Record</title>
</head>
<body>

<h2>Update Record</h2>
<div class="container my-5">
<form method="POST" action="update.php?id=<?php echo $id; ?>">
    <label for="name">Name:</label>
    <input type="text" class="form-control" name="name" value="<?php echo htmlspecialchars($user['name']); ?>" required><br>

    <label for="age">Age:</label>
    <input type="number" class="form-control" name="age" value="<?php echo htmlspecialchars($user['age']); ?>" required><br>

    <label for="email">Email:</label>
    <input type="email" class="form-control" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" required><br>

    <label for="password">Password:</label>
    <input type="password" class="form-control" name="password" placeholder="Leave blank if not changing"><br>

    <button type="submit" class="btn btn-primary" name="update">Update</button>
</form>
</div>
</body>
</html>
