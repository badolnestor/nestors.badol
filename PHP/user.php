
<?php
include 'dbconnect.php';

?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="../CSS/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>

 <!-- Navbar Section -->
 <header class="navbar">
    <div class="logo">NBA
    <img src="../img/hob.png" class="logo" height="50px" alt="Logo">
    </div>
    <nav class="nav-links">
    <a href="index.php">Home</a>
      <a href="#games">Games</a>
      <a href="#schedule">Schedule</a>
      <a href="#watch">Watch</a>
      <a href="#news">News</a>
      <a href="#teams">Teams</a>
      <a href="#standings">Standings</a>
      <a href="#players">Players</a>
      <a href="#nba-cup">NBA Cup</a>
      <a href="#store">Store</a>
      <a href="#tickets">Tickets</a>
      <a href="user.php">Users</a>
    </nav>
    <div class="auth-links">
      <a href="index0.php">Sign In</a>
      <a href="#signup" class="btn btn-primary">League Pass</a>
    </div>
  </header>
 

  <center>
  <!-- Carousel -->
  <div id="University" class="carousel slide custom-carousel" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="../img/shoe1.jpg" class="img-fluid custom-img" alt="img-fluid">
        </div>
        <div class="carousel-item">
            <img src="../img/shoe2.jpg" class="img-fluid custom-img" alt="img-fluid">
        </div>
        <div class="carousel-item">
            <img src="../img/drose.jpg" class="img-fluid custom-img" alt="img-fluid">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#University" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#University" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

</center>



 
        <div class="table-responsive">
          <button class="btn btn-primary "> <a href="index.php" class="text-light"> Add user</button></a>
          <table class="table" id="table">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">age</th>
                <th scope="col">email</th>
                <th scope="col">password</th>
                <th scope="col">operation</th>
              </tr>
            </thead>
            <tbody>
         
            <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud-project";

$con = new mysqli($servername, $username, $password, $dbname);
if ($con->connect_error) {
    die("Connection failed" . $con->connect_error);
}

$sql = "SELECT id, name, age, email, password FROM crud";
$query = $con->query($sql);
while ($row = $query->fetch_assoc()) {
?>
    <tr class="table-responsive">
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['age']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['password']; ?></td>
        <td>
            <button class="btn btn-primary">
                <a href="update.php?id=<?php echo $row['id']; ?>" class="text-light">update</a>
            </button>
            <button class="btn btn-danger">
            <a href="delete.php?id=<?php echo $row['id']; ?>" class="text-light">delete</a>

            </button>
        </td>
    </tr>
<?php
}
?>
       </tbody>
          </table>

        </div>

<!-- Different sized gutters can be used with the help of .gx-*-{0|1|2|3|4|5} class -->
<div class="row gx-3 gx-xxl-5">
  <div class="col">
    <div class="p-3 border text-light">
      <img src="../img/cavs.png" alt="">
      <p>The Cavaliers began play as an NBA expansion team in 1970 under the ownership of the ambitious entrepreneur Nick Mileti, who at one time owned not only the Cavs but also baseball’s Cleveland Indians and the city’s World Hockey Association franchise (the Cavaliers have since gone through several changes of ownership). Coached by Bill Fitch and playing in the antiquated Cleveland Arena, the Cavs finished their first season with the worst record in the league, a frustrating exercise that was epitomized by John Warren unwittingly shooting at and scoring in the opponent’s basket during one game. The team’s poor season did net them the first overall selection in the 1971 NBA draft, which they used to select guard Austin Carr, the Cavaliers’ first star player.</p>
    </div>
  </div>
  <div class="col">
    <div class="p-3 border text-light">
      <img src="..//img/Boston-Celtics-logo-removebg-preview.png" alt="" height="160px">
      <p>Boston Celtics, American professional basketball team based in Boston, Massachusetts. One of the most successful franchises in sports history, the Celtics won 11 of 13 National Basketball Association (NBA) championships from 1957 to 1969. Overall, they have won 18 NBA titles.

Founded in Boston in 1946 by Walter Brown, the Celtics were charter members of the Basketball Association of America, a forerunner of the NBA (established in 1949). At the time of the team’s founding, Brown also managed the Boston Garden, on whose distinctive parquet court the green-and-white-clad Celtics thrived until the franchise moved to a new arena, now known as TD Garden, in 1995–96. The team posted a losing record in each of its first four seasons.</p>
    </div>
  </div>
  <div class="col">
    <div class="p-3 border text-light">
      <img src="../img/gs-nobackground-removebg-preview.png" alt=""  height="137px">
      <p>Golden State Warriors, American professional basketball team based in San Francisco that plays in the Western Conference of the National Basketball Association (NBA). The Warriors have won six NBA championships and one Basketball Association of America (BAA) title.

Early days of the NBA
Early days of the NBAPhiladelphia Warriors player Jack George (left) guarding Slater Martin of the Minneapolis Lakers, 1955.
The Warriors were founded in 1946 and were originally based in Philadelphia. One of the original members of the BAA, the team won the league’s first championship, behind the play of future Hall of Fame forward Joe Fulks, the BAA’s inaugural scoring leader. The Warriors lost in the BAA finals the next season, and in 1949 the team became a part of the NBA when the BAA merged.</p>
    </div>
  </div>
</div>

        <!-- Footer -->
        <footer class="bg-dark text-white text-center py-4">
          <div class="container ">
              <div class="row">
                  <div class="col-md-4">
                      <h5>About Us</h5>
                      <p>Providing quality services to the user.</p>
                  </div>
                  <div class="col-md-4">
                      <h5>Quick Links</h5>
                      <ul class="list-unstyled">
                          <li><a href="#" class="text-white">Home</a></li>
                          <li><a href="#" class="text-white">About</a></li>
                          <li><a href="#" class="text-white">Services</a></li>
                          <li><a href="#" class="text-white">Contact</a></li>
                      </ul>
                  </div>
                  <div class="col-md-4">
                      <h5>Follow Us</h5>
                      <a href="#" class="text-white me-3"><i class="fa-brands fa-facebook-f"></i></a>
                      <a href="#" class="text-white me-3"><i class="fa-brands fa-twitter"></i></a>
                      <a href="#" class="text-white me-3"><i class="fa-brands fa-instagram"></i></a>
                      <a href="#" class="text-white"><i class="fa-brands fa-linkedin-in"></i></a>
                  </div>
              </div>
              <hr class="my-4">
              <p class="mb-0">© 2024 HOBBY WEBPAGE. All Rights Reserved.</p>
          </div>
        </footer>


</body>
</html>
