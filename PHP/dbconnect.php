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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $age = $_POST["age"]; 
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Hash the password for security
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // Create a new database connection
    $dbConnect = new DBConnect();

    try {
        // INSERT data into database
        $stmt = $dbConnect->conn->prepare("INSERT INTO crud (name, age, email, password) VALUES (:name, :age, :email, :password)");
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":age", $age); // Fixed the parameter name to match the SQL statement
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":password", $hashed_password);
        $stmt->execute();

        echo "<h2>Registration Successful</h2>";
        echo "Thank you for registering, " . htmlspecialchars($name) . "!<br>";
        echo "You'll be redirected to the login page in 3 seconds.";
        
        // Redirect after 3 seconds
        header("refresh:3;url=../PHP/index.php");
        exit(); // Ensure script termination after header redirect
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage(); // Display error message for debugging
    }
}
?>
