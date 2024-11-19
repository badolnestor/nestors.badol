<?php
require_once('dbconnect.php');

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Registration code
    // if (isset($_POST['name']) && isset($_POST['age']) && isset($_POST['email']) && isset($_POST['password'])) {
        // $name = $_POST['name'];
        // $age = (int)$_POST['age']; // Convert age to an integer
        // $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        // $password = $_POST['password'];
        // $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $db = new DBConnect();

        // Prepare the statement
        // $stmt = $db->conn->prepare("INSERT INTO crud (name, age, email, password) VALUES (?, ?, ?, ?)");
        // $stmt->bind_param("siss", $name, $age, $email, $hashed_password); // "siss" for string, int, string, string
        // $stmt->execute();
        // $stmt->close();
    // }

    // Login code
    // if (isset($_POST['login_email']) && isset($_POST['login_password'])) {
        // $email = filter_var($_POST['login_email'], FILTER_SANITIZE_EMAIL);
        // $password = $_POST['login_password'];

        $db = new DBConnect();

        // $stmt = $db->conn->prepare("SELECT password FROM crud WHERE email = ?");
        // $stmt->bind_param("s", $email);
        // $stmt->execute();
        // $result = $stmt->get_result();
        // $row = $result->fetch_assoc();

        // if ($row) { // Check if $row is not null
            // if (password_verify($password, $row['password'])) {
                // The password is valid
                // echo "Login successful";
            // } else {
                // The password is invalid
                // echo "Invalid email or password";
            // }
        // } else {
            // echo "Invalid email or password"; // Email not found
        // }
        // $stmt->close();
    // }
// }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/style.css">
    <script>
      function validateForm() {
        var name = document.forms["registrationForm"]["name"].value;
        var age = document.forms["registrationForm"]["age"].value;
        var email = document.forms["registrationForm"]["email"].value;
        var password = document.forms["registrationForm"]["password"].value;

        if (name == "" || age == "" || email == "" || password == "") {
          alert("All fields must be filled out!");
          return false;
        }
      }
    </script>
</head>

  <body>

    <h1>WELCOME TO HOBBY WEBPAGE! <br>
    PLEASE REGISTER! </h1>
    <div class="container my-5">
      <!-- Added the form name for validation -->
      <form name="registrationForm" method="post" action="../PHP/index.php" onsubmit="return validateForm()">
        <div class="mb-3">
          <label>Name</label>
          <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off">
        
          <label>Age</label>
          <input type="number" class="form-control" placeholder="Enter your age" name="age" autocomplete="off">
          
          <label>Email</label>
          <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off">
        </div>
        
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        </div>
        
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    
  </body>
</html>
