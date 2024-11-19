
<?php
include 'dbconnect.php';
require_once('dbconnect.php');
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
    <title>Hobby project</title>
</head>
<body>
  

  
  <!-- Navbar Section -->
  <header class="navbar">
    <div class="logo">NBA
    <img src="../img/hob.png" class="logo" height="50px" alt="Logo">
    </div>
    <nav class="nav-links">
      <a href="#games">Games</a>
      <a href="https://www.nba.com/schedule?gclid=Cj0KCQiA88a5BhDPARIsAFj595h3q_fBCId9uNpywhbg96qAuMRuxSaXwgu3od06lnXqkgUAGh2uUvMaAtYDEALw_wcB&region=2&ef_id=Cj0KCQiA88a5BhDPARIsAFj595h3q_fBCId9uNpywhbg96qAuMRuxSaXwgu3od06lnXqkgUAGh2uUvMaAtYDEALw_wcB:G:s&s_kwcid=AL!5120!3!!!!x!!!21801898709!&gclsrc=aw.ds&gad_source=1">Schedule</a>
      <a href="#watch">Watch</a>
      <a href="https://www.nba.com/news">News</a>
      <a href="#teams">Teams</a>
      <a href="#standings">Standings</a>
      <a href="#players">Players</a>
      <a href="#nba-cup">NBA Cup</a>
      <a href="https://nbastore.com.ph/?utm_source=SHOPIFY&utm_medium=google&utm_campaign=performance-max&utm_content=PM1&gad_source=1&gclid=Cj0KCQiA88a5BhDPARIsAFj595jutC_RAjWFp9-i9UdUEAXxmPn-Te5xkucM_qLqSiUUtDnQ9VowjnUaAoO3EALw_wcB">Store</a>
      <a href="#tickets">Tickets</a>
      <a href="user.php">Users</a>
    </nav>
    <div class="auth-links">
      <a href="index0.php">Sign In</a>
      <a href="#signup" class="btn btn-primary">League Pass</a>
    </div>
  </header>
    
  <!-- Hero Carousel Section -->
  <section class="hero-carousel">
    <div id="nbaCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active">
          <div class="scoreboard">
            <p> <img src="../img/lakers logo.jpeg" width="30px" height="30px" class="logo"><strong>LA</strong> 133 - <strong>GS</strong> 138<img src="../img/gs-nobackground-removebg-preview.png" width="30px" height="30px" class="logo"></p>
            <p> <img src="../img/Toronto-Raptors-logo.png" width="30px" height="30px" class="logo"><strong>TOR</strong> 110 - <strong>CLE</strong> 134<img src="../img/cavs.png" width="30px" height="30px" class="logo"></p>
          </div>
        </div>
        <!-- Slide 2 -->
        <div class="carousel-item">
          <div class="scoreboard">
            <p><img src="../img/piston logo.png" width="30px" height="30px" class="logo"> <strong>DET</strong> 105 - <strong>PHI</strong> 95 <img src="../img/76ers.logo.png" width="30px" height="30px" class="logo"></p>
            <p><img src="../img/newyork.logo.png" width="30px" height="30px" class="logo"><strong>NYK</strong> 116 - <strong>MIA</strong> 107 <img src="../img/Miami-Heat-Logo-2000-Present.png" width="30px" height="30px" class="logo"></p>
          </div>
        </div>
        <!-- Additional slides can be added similarly -->
      </div>
      <!-- Controls -->
      <a class="carousel-control-prev" href="#nbaCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#nbaCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>



  
<center>
   
  <div id="University" class="carousel slide custom-carousel" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="../img/2024-all-star-captains.webp" class="img-fluid custom-img" alt="img-fluid">
        </div>
        <div class="carousel-item">
            <img src="../img/NBA All-Star Game 021824.jpeg" class="img-fluid custom-img" alt="img-fluid">
        </div>
        <div class="carousel-item">
            <img src="../img/allstar.png" class="img-fluid custom-img" alt="img-fluid">
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



<!-- ///////////////?? --
<div class="container-fluid" hieght="300px">
  <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel" hieght="300px">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner" hiegth="300px">
      <div class="carousel-item active" data-bs-interval="10000" heigth="300px">
        <img src="../img/2024-all-star-captains.webp" class="d-block w-100" alt="..." height="300px">
        <div class="carousel-caption d-none d-md-block"  heigth="300px">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="../img/NBA All-Star Game 021824.jpeg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="../img/allstar.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>

    <-- ////////////////// 

    <section class="tour-search">
        <div class="container1">

          <form action="" class="tour-search-form">

            

            <div class="input-wrapper">
              <label for="checkin" class="input-label">Check Date</label>

              <input type="date" name="checkin" id="checkin" required class="input-field">
            </div>

            

            <button type="submit" class="btn btn-secondary">Games</button>

          </form>

        </div>
      </section>-->
       <section class="tour-search"> 
    <div class="container1">
      <form id="tourSearchForm" class="tour-search-form">
        <div class="input-wrapper">
          <label for="checkin" class="input-label">Check Date</label>
          <input type="date" name="checkin" id="checkin" required class="input-field">
        </div>
        <button type="submit" class="btn btn-secondary">Games</button>
      </form>
    </div>
  </section>

  <script>
    // API endpoint
    // const apiUrl = "https://www.balldontlie.io/api/v1/games";
    const apiUrl = "https://cors-anywhere.herokuapp.com/https://www.balldontlie.io/api/v1/games";
    


    // Fallback link to NBA schedule page
    const fallbackLink = "https://www.nba.com/schedule";

    // Handle form submission
    document.getElementById("tourSearchForm").addEventListener("submit", async function (event) {
      event.preventDefault(); // Prevent page reload

      const selectedDate = document.getElementById("checkin").value; // Get the selected date
      if (!selectedDate) {
        alert("Please select a date!");
        return;
      }

      try {
        // Debugging log: Check the selected date
        console.log("Fetching games for date:", selectedDate);

        // Fetch games from API for the selected date
        const response = await fetch(`${apiUrl}?dates[]=${selectedDate}`);
        console.log("API response status:", response.status);

        // Handle unsuccessful API response
        if (!response.ok) {
          throw new Error(`API request failed with status ${response.status}`);
        }

        // Parse JSON response
        const data = await response.json();
        console.log("Fetched game data:", data);

        // Check if games exist for the selected date
        if (data.data.length > 0) {
          const game = data.data[0]; // Get the first game of the day
          const gameLink = `https://nba.com/live/${game.home_team.name}-vs-${game.visitor_team.name}`;
          console.log("Redirecting to game link:", gameLink);

          // Redirect to game link
          window.location.href = gameLink;
        } else {
          // No games on this date, redirect to fallback
          alert("No NBA games scheduled for this date. Redirecting to the NBA schedule.");
          window.location.href = fallbackLink;
        }
      } catch (error) {
        // Log errors and redirect to fallback
        console.error("Error fetching game data:", error);
        alert("Unable to fetch game data. Redirecting to the NBA schedule.");
        window.location.href = fallbackLink;
      }
    });
  </script>
  
      




    <center> <h3>HighLigth video</h3>
<div class="row gx-3 gx-xxl-5" id="watch">
  <div class="col">
    <div class="p-3 border text-light">
    <iframe src="https://www.youtube.com/embed/Zg3j6anDU6U?si=x_7r10hLEDB3IKvW&amp;start=24" 
                                title="YouTube video player" 
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                referrerpolicy="strict-origin-when-cross-origin" 
                                allowfullscreen>
                        </iframe>
      <p></p>
    </div>
  </div>
  <div class="col">
    <div class="p-3 border text-light">
    <iframe src="https://www.youtube.com/embed/QAGoLhkrHf0?si=2Pln9XKuipydIp5Y&amp;start=24" 
                                title="YouTube video player" 
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                referrerpolicy="strict-origin-when-cross-origin" 
                                allowfullscreen>
                        </iframe>
      <p></p>
    </div>
  </div>
   <div class="col"> 
    <div class="p-3 border text-light">
    <iframe src="https://www.youtube.com/embed/lxH3ZgNQJJ0?si=4bnDAnCsFbW3iEif&amp;start=24" 
                                title="YouTube video player" 
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                referrerpolicy="strict-origin-when-cross-origin" 
                                allowfullscreen height="167px">
                        </iframe>
      <p</p>
    </div>
  </div>
  


</div>


<!-- ///////////////////////////////////////video2 -->

<div class="row gx-3 gx-xxl-5" id="watch">
  <div class="col">
    <div class="p-3 border text-light">
    <iframe src="https://www.youtube.com/embed/-hL_qIOiQAc?si=4HUf5p3IpdAlmN3e" 
      title="YouTube video player" frameborder="0"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
      referrerpolicy="strict-origin-when-cross-origin" 
      allowfullscreen></iframe>
      <p> Dallas VS Spurs</p>
    </div>
  </div>
  <div class="col">
    <div class="p-3 border text-light">
    <iframe  src="https://www.youtube.com/embed/enc5wWpraO4?si=kH9mJNwxOLj6ORO9" 
         title="YouTube video player" 
         frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          referrerpolicy="strict-origin-when-cross-origin"
           allowfullscreen></iframe>
      <p>Dallas VS Phoenixs  </p>
    </div>
  </div>
   <div class="col"> 
    <div class="p-3 border text-light">
    <iframe  src="https://www.youtube.com/embed/3rvlorKeTnA?si=CtejBpuwm6fmr4sh" 
      title="YouTube video player" frameborder="0" 
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
      referrerpolicy="strict-origin-when-cross-origin"
       allowfullscreen></iframe>
      <p>Cavaliers VS Golden State Warior</p>
    </div>
  </div>
  


</div>

<div class="row gx-3 gx-xxl-5" id="watch">
  <div class="col">
    <div class="p-3 border text-light">
    <iframe  src="https://www.youtube.com/embed/AuvDNETTMpU?si=vCzMxdK1cqPSJHGZ" 
      title="YouTube video player" frameborder="0" 
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
      referrerpolicy="strict-origin-when-cross-origin" 
      allowfullscreen></iframe>
      <p></p>
    </div>
  </div>
  <div class="col">
    <div class="p-3 border text-light">
    <iframe src="https://www.youtube.com/embed/uJs693eNfuQ?si=KFdrCyLpxBr5PEhc"
       title="YouTube video player" frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
       referrerpolicy="strict-origin-when-cross-origin"
        allowfullscreen></iframe>
      <p></p>
    </div>
  </div>
   <div class="col"> 
    <div class="p-3 border text-light">
    <iframe  src="https://www.youtube.com/embed/txfzgpd4nEI?si=8Qp4CUA3hlpW0OFh" 
      title="YouTube video player" frameborder="0" 
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
       referrerpolicy="strict-origin-when-cross-origin" 
       allowfullscreen></iframe>
      <p</p>
    </div>
  </div>
  


</div>




</center>


<!-- Conference Title -->
<div class="conference-title" id="teams">EASTERN CONFERENCE
    <div class="division-tabs">
        <div>Southeast</div>
        <div>Atlantic</div>
        <div>Central</div>
    </div>
  </div>

    <!-- Team Grid -->
    <div class="team-grid">
        <!-- Team Card 1 -->
        <div class="team-card">
            <div class="team-info">
                <img src="https://logowik.com/content/uploads/images/atlanta-hawks7500.jpg" alt="Atlanta Hawks Logo" class="team-logo">
                <div class="team-name">ATLANTA HAWKS</div>
            </div>
            <div class="team-links">
                <a href="#">Stats</a>
                <a href="#">Leaders</a>
                <a href="#">Roster</a>
                <a href="#">Schedule</a>
            </div>
        </div>

        <!-- Team Card 2 -->
        <div class="team-card">
            <div class="team-info">
                <img src="https://logos-world.net/wp-content/uploads/2020/05/Boston-Celtics-logo.png" alt=" BOSTON CELTICS" class="team-logo">
                <div class="team-name">BOSTON CELTICS</div>
            </div>
            <div class="team-links">
                <a href="#">Stats</a>
                <a href="#">Leaders</a>
                <a href="#">Roster</a>
                <a href="#">Schedule</a>
            </div>
        </div>

        <!-- Team Card 3 -->
        <div class="team-card">
            <div class="team-info">
                <img src="https://upload.wikimedia.org/wikipedia/en/6/67/Chicago_Bulls_logo.svg" alt="Chicago Bulls Logo" class="team-logo">
                <div class="team-name">CHICAGO BULLS</div>
            </div>
            <div class="team-links">
                <a href="#">Stats</a>
                <a href="#">Leaders</a>
                <a href="#">Roster</a>
                <a href="#">Schedule</a>
            </div>
        </div>

        <div class="team-card">
            <div class="team-info">
                <img src="../img/charlot.logo.png" alt="CHARLOT HORNETS " class="team-logo">
                <div class="team-name">CHARLOT HORNETS</div>
            </div>
            <div class="team-links">
                <a href="#">Stats</a>
                <a href="#">Leaders</a>
                <a href="#">Roster</a>
                <a href="#">Schedule</a>
            </div>
        </div>

        <div class="team-card">
            <div class="team-info">
                <img src="https://logolook.net/wp-content/uploads/2023/10/Brooklyn-Nets-Logo.png" alt="BROKLYN NETS" class="team-logo">
                <div class="team-name">BROKLYN NETS</div>
            </div>
            <div class="team-links">
                <a href="#">Stats</a>
                <a href="#">Leaders</a>
                <a href="#">Roster</a>
                <a href="#">Schedule</a>
            </div>
        </div>

        <div class="team-card">
            <div class="team-info">
                <img src="https://logodownload.org/wp-content/uploads/2021/04/cleveland-cavaliers-logo-0.png" alt="Chicago Bulls Logo" class="team-logo">
                <div class="team-name">CLEVELAND CAVALIERS</div>
            </div>
            <div class="team-links">
                <a href="#">Stats</a>
                <a href="#">Leaders</a>
                <a href="#">Roster</a>
                <a href="#">Schedule</a>
            </div>
        </div>

        <div class="team-card">
            <div class="team-info">
                <img src="../img/Miami-Heat-Logo-2000-Present.png" alt="Chicago Bulls Logo" class="team-logo">
                <div class="team-name">MIAMI HEAT</div>
            </div>
            <div class="team-links">
                <a href="#">Stats</a>
                <a href="#">Leaders</a>
                <a href="#">Roster</a>
                <a href="#">Schedule</a>
            </div>
        </div>

        <div class="team-card">
            <div class="team-info">
                <img src="../img/newyork.logo.png" alt="Chicago Bulls Logo" class="team-logo">
                <div class="team-name">NEW YORK KNICKS</div>
            </div>
            <div class="team-links">
                <a href="#">Stats</a>
                <a href="#">Leaders</a>
                <a href="#">Roster</a>
                <a href="#">Schedule</a>
            </div>
        </div>

        <div class="team-card">
            <div class="team-info">
                <img src="../img/piston logo.png" alt="Chicago Bulls Logo" class="team-logo">
                <div class="team-name">DETRIOT PISTONS</div>
            </div>
            <div class="team-links">
                <a href="#">Stats</a>
                <a href="#">Leaders</a>
                <a href="#">Roster</a>
                <a href="#">Schedule</a>
            </div>
        </div>

        <div class="team-card">
            <div class="team-info">
                <img src="../img/orlando.logo.jpg" alt="Chicago Bulls Logo" class="team-logo">
                <div class="team-name">ORLANDO MAGIC</div>
            </div>
            <div class="team-links">
                <a href="#">Stats</a>
                <a href="#">Leaders</a>
                <a href="#">Roster</a>
                <a href="#">Schedule</a>
            </div>
        </div>

        <div class="team-card">
            <div class="team-info">
                <img src="../img/76ers.logo.png" alt="Chicago Bulls Logo" class="team-logo">
                <div class="team-name">PHILADELPIA 76ERS</div>
            </div>
            <div class="team-links">
                <a href="#">Stats</a>
                <a href="#">Leaders</a>
                <a href="#">Roster</a>
                <a href="#">Schedule</a>
            </div>
        </div>

        <div class="team-card">
            <div class="team-info">
                <img src="../img/pacers.logo.png" alt="Chicago Bulls Logo" class="team-logo">
                <div class="team-name">INDIANA PACERS</div>
            </div>
            <div class="team-links">
                <a href="#">Stats</a>
                <a href="#">Leaders</a>
                <a href="#">Roster</a>
                <a href="#">Schedule</a>
            </div>
        </div>

        <div class="team-card">
            <div class="team-info">
                <img src="../img/wizard.jpeg" class="team-logo">
                <div class="team-name">WASHINGTON WIZZARD</div>
            </div>
            <div class="team-links">
                <a href="#">Stats</a>
                <a href="#">Leaders</a>
                <a href="#">Roster</a>
                <a href="#">Schedule</a>
            </div>
        </div>

        <div class="team-card">
            <div class="team-info">
                <img src="../img/Toronto-Raptors-logo.png" alt="Chicago Bulls Logo" class="team-logo">
                <div class="team-name">TORONTO RAPTORS</div>
            </div>
            <div class="team-links">
                <a href="#">Stats</a>
                <a href="#">Leaders</a>
                <a href="#">Roster</a>
                <a href="#">Schedule</a>
            </div>
        </div>

        <div class="team-card">
            <div class="team-info">
                <img src="../img/bucks.jpg" alt="Chicago Bulls Logo" class="team-logo">
                <div class="team-name">MILWAKEE BUCKS</div>
            </div>
            <div class="team-links">
                <a href="#">Stats</a>
                <a href="#">Leaders</a>
                <a href="#">Roster</a>
                <a href="#">Schedule</a>
            </div>
        </div>

        
        </div>
        </div>
        <!-- Additional teams... -->
        <!-- Repeat .team-card structure for each team -->

    </div>


    <!-- Conference Title -->
<div class="conference-title">WESTERN CONFERENCE
    <div class="division-tabs">
        <div>Soutwest</div>
        <div>Northwest</div>
        <div>Pacific</div>
    </div>
  </div>

    <!-- Team Grid -->
    <div class="team-grid">
        <!-- Team Card 1 -->
        <div class="team-card">
            <div class="team-info">
                <img src="../img/dallas logo.png" alt="Atlanta Hawks Logo" class="team-logo">
                <div class="team-name">DALLAS MAVERICKS</div>
            </div>
            <div class="team-links">
                <a href="#">Stats</a>
                <a href="#">Leaders</a>
                <a href="#">Roster</a>
                <a href="#">Schedule</a>
            </div>
        </div>

        <!-- Team Card 2 -->
        <div class="team-card">
            <div class="team-info">
                <img src="../img/denver-nuggets-1993-2003-logo.png" alt=" BOSTON CELTICS" class="team-logo">
                <div class="team-name">DENVER NUGGETS</div>
            </div>
            <div class="team-links">
                <a href="#">Stats</a>
                <a href="#">Leaders</a>
                <a href="#">Roster</a>
                <a href="#">Schedule</a>
            </div>
        </div>

        <!-- Team Card 3 -->
        <div class="team-card">
            <div class="team-info">
                <img src="../img/gs-nobackground-removebg-preview.png" alt="Chicago Bulls Logo" class="team-logo">
                <div class="team-name">GOLDEN STATE WARRIOR</div>
            </div>
            <div class="team-links">
                <a href="#">Stats</a>
                <a href="#">Leaders</a>
                <a href="#">Roster</a>
                <a href="#">Schedule</a>
            </div>
        </div>

        <div class="team-card">
            <div class="team-info">
                <img src="../img/rockets.jpeg" alt="CHARLOT HORNETS " class="team-logo">
                <div class="team-name">HOUSTON ROCKETS</div>
            </div>
            <div class="team-links">
                <a href="#">Stats</a>
                <a href="#">Leaders</a>
                <a href="#">Roster</a>
                <a href="#">Schedule</a>
            </div>
        </div>

        <div class="team-card">
            <div class="team-info">
                <img src="../img/minnesota.png" alt="BROKLYN NETS" class="team-logo">
                <div class="team-name">MINNESOTA TEMBERWOLVES</div>
            </div>
            <div class="team-links">
                <a href="#">Stats</a>
                <a href="#">Leaders</a>
                <a href="#">Roster</a>
                <a href="#">Schedule</a>
            </div>
        </div>

        <div class="team-card">
            <div class="team-info">
                <img src="../img/clippers.jpeg" alt="Chicago Bulls Logo" class="team-logo">
                <div class="team-name">LA CLIPPERS</div>
            </div>
            <div class="team-links">
                <a href="#">Stats</a>
                <a href="#">Leaders</a>
                <a href="#">Roster</a>
                <a href="#">Schedule</a>
            </div>
        </div>

        <div class="team-card">
            <div class="team-info">
                <img src="../img/memphis.png" alt="Chicago Bulls Logo" class="team-logo">
                <div class="team-name">MEMPHIS GRIZZLIES</div>
            </div>
            <div class="team-links">
                <a href="#">Stats</a>
                <a href="#">Leaders</a>
                <a href="#">Roster</a>
                <a href="#">Schedule</a>
            </div>
        </div>

        <div class="team-card">
            <div class="team-info">
                <img src="../img/okc.png" alt="Chicago Bulls Logo" class="team-logo">
                <div class="team-name">OKLAHOMA CITY THUNDER</div>
            </div>
            <div class="team-links">
                <a href="#">Stats</a>
                <a href="#">Leaders</a>
                <a href="#">Roster</a>
                <a href="#">Schedule</a>
            </div>
        </div>

        <div class="team-card">
            <div class="team-info">
                <img src="../img/lakers logo.jpeg" alt="Chicago Bulls Logo" class="team-logo">
                <div class="team-name">LOS ANGELES LAKERS</div>
            </div>
            <div class="team-links">
                <a href="#">Stats</a>
                <a href="#">Leaders</a>
                <a href="#">Roster</a>
                <a href="#">Schedule</a>
            </div>
        </div>

        <div class="team-card">
            <div class="team-info">
                <img src="../img/pelicans.png" alt="Chicago Bulls Logo" class="team-logo">
                <div class="team-name">NEW ORLEANS PELICANS</div>
            </div>
            <div class="team-links">
                <a href="#">Stats</a>
                <a href="#">Leaders</a>
                <a href="#">Roster</a>
                <a href="#">Schedule</a>
            </div>
        </div>

        <div class="team-card">
            <div class="team-info">
                <img src="../img/portland.png" alt="Chicago Bulls Logo" class="team-logo">
                <div class="team-name">PORTLAND TRAIL_BLAZER</div>
            </div>
            <div class="team-links">
                <a href="#">Stats</a>
                <a href="#">Leaders</a>
                <a href="#">Roster</a>
                <a href="#">Schedule</a>
            </div>
        </div>

        <div class="team-card">
            <div class="team-info">
                <img src="../img/sun.png" alt="Chicago Bulls Logo" class="team-logo">
                <div class="team-name">PHOENIXS SUNS</div>
            </div>
            <div class="team-links">
                <a href="#">Stats</a>
                <a href="#">Leaders</a>
                <a href="#">Roster</a>
                <a href="#">Schedule</a>
            </div>
        </div>

        <div class="team-card">
            <div class="team-info">
                <img src="../img/san-antonio-spurs6036.webp" class="team-logo">
                <div class="team-name">SAN ANTONIO SPURS</div>
            </div>
            <div class="team-links">
                <a href="#">Stats</a>
                <a href="#">Leaders</a>
                <a href="#">Roster</a>
                <a href="#">Schedule</a>
            </div>
        </div>

        <div class="team-card">
            <div class="team-info">
                <img src="../img/Utah-Jazz-logo.png" alt="Chicago Bulls Logo" class="team-logo">
                <div class="team-name">UTAH JAZZ</div>
            </div>
            <div class="team-links">
                <a href="#">Stats</a>
                <a href="#">Leaders</a>
                <a href="#">Roster</a>
                <a href="#">Schedule</a>
            </div>
        </div>

        <div class="team-card">
            <div class="team-info">
                <img src="../img/kings.png" alt="Chicago Bulls Logo" class="team-logo">
                <div class="team-name">SACRAMENTO KINGS</div>
            </div>
            <div class="team-links">
                <a href="#">Stats</a>
                <a href="#">Leaders</a>
                <a href="#">Roster</a>
                <a href="#">Schedule</a>
            </div>
        </div>

        
        </div>
        </div>
        <!-- Additional teams... -->
        <!-- Repeat .team-card structure for each team -->

    </div>
 
 




    <!-- END OF TEAMS -->
 
 
  <div class="col-lg-7">
    <div class="resume-experience">
      <div class="timeline-box">
        <h5 class="resume-experience-title"> NBA BASKETBALL CHAMPION SINCE 2001 </h5>
        <div class="jobster-candidate-timeline">
          <div class="jobster-timeline-item">
            <div class="jobster-timeline-cricle">
              <i class="far fa-circle"></i>
            </div>
            <div class="jobster-timeline-info">
              <div class="dashboard-timeline-info">
                <span class="jobster-timeline-time">2001 - 2002</span>
                <h6 class="mb-2"> LOS ANGELES LAKERS</h6>
                <img src="../img/lakers logo.jpeg" class="logos" alt="" height="75px" >
                <span></span>
                <p class="mt-2"></p>
              </div>
            </div>
          </div>
          <div class="jobster-timeline-item">
            <div class="jobster-timeline-cricle">
              <i class="far fa-circle"></i>
            </div>
            <div class="jobster-timeline-info">
              <div class="dashboard-timeline-info">
                <span class="jobster-timeline-time">2002- 2003</span>
                <h6 class="mb-2"> SAN ANTONIO SPURS</h6>
                <img src="../img/san-antonio-spurs6036.webp" class="logos" alt="" height="75px" >
                <span></span>
                <p class="mt-2"></p>
              </div>
            </div>
          </div>
           
        <div class="jobster-timeline-item">
            <div class="jobster-timeline-cricle">
              <i class="far fa-circle"></i>
            </div>
            <div class="jobster-timeline-info">
              <div class="dashboard-timeline-info">
                <span class="jobster-timeline-time">2003 - 2004</span>
                <h6 class="mb-2"> DETROIT PISTONS</h6>
                <img src="../img/piston logo.png" class="logos" alt="" height="75px" >
                <span></span>
                <p class="mt-2"></p>
              </div>
            </div>
          </div>

          <div class="jobster-timeline-item">
            <div class="jobster-timeline-cricle">
              <i class="far fa-circle"></i>
            </div>
            <div class="jobster-timeline-info">
              <div class="dashboard-timeline-info">
                <span class="jobster-timeline-time">2004 - 2005</span>
                <h6 class="mb-2">SAN ANTONIO SPURS </h6>
                <img src="../img/san-antonio-spurs6036.webp" class="logos" alt="" height="75px" >
                <span></span>
                <p class="mt-2"></p>
              </div>
            </div>
          </div>

          <div class="jobster-timeline-item">
            <div class="jobster-timeline-cricle">
              <i class="far fa-circle"></i>
            </div>
            <div class="jobster-timeline-info">
              <div class="dashboard-timeline-info">
                <span class="jobster-timeline-time">2005 - 2006</span>
                <h6 class="mb-2">MIAMI HEAT </h6>
                <img src="../img/Miami-Heat-Logo-2000-Present.png" class="logos" alt="" height="75px" >
                <span></span>
                <p class="mt-2"></p>
              </div>
            </div>
          </div>

          <div class="jobster-timeline-item">
            <div class="jobster-timeline-cricle">
              <i class="far fa-circle"></i>
            </div>
            <div class="jobster-timeline-info">
              <div class="dashboard-timeline-info">
                <span class="jobster-timeline-time">2006 - 2007</span>
                <h6 class="mb-2">SAN ANTONIO SPURS  </h6>
                <img src="img/san-antonio-spurs6036.webp" class="logos" alt="" height="75px" >
                <span></span>
                <p class="mt-2"></p>
              </div>
            </div>
          </div>
          
          <div class="jobster-timeline-item">
            <div class="jobster-timeline-cricle">
              <i class="far fa-circle"></i>
            </div>
            <div class="jobster-timeline-info">
              <div class="dashboard-timeline-info">
                <span class="jobster-timeline-time">2007 - 2008</span>
                <h6 class="mb-2">BOSTON CELTICS  </h6>
                <img src="../img/Boston-Celtics-logo.png" class="logos" alt="" height="75px" >
                <span></span>
                <p class="mt-2"></p>
              </div>
            </div>
          </div>

          <div class="jobster-timeline-item">
            <div class="jobster-timeline-cricle">
              <i class="far fa-circle"></i>
            </div>
            <div class="jobster-timeline-info">
              <div class="dashboard-timeline-info">
                <span class="jobster-timeline-time">2008 - 2010</span>
                <h6 class="mb-2"> LOS ANGELES LAKERS </h6>
                <img src="../img/lakers logo.jpeg" class="logos" alt="" height="75px" >
                <span></span>
                <p class="mt-2"></p>
              </div>
            </div>
          </div>

          <div class="jobster-timeline-item">
            <div class="jobster-timeline-cricle">
              <i class="far fa-circle"></i>
            </div>
            <div class="jobster-timeline-info">
              <div class="dashboard-timeline-info">
                <span class="jobster-timeline-time">2010 - 2011</span>
                <h6 class="mb-2"> DALLAS MAVERICKS </h6>
                <img src="../img/dallas logo.png" class="logos" alt="" height="75px" >
                <span></span>
                <p class="mt-2"></p>
              </div>
            </div>
          </div>

          <div class="jobster-timeline-item">
            <div class="jobster-timeline-cricle">
              <i class="far fa-circle"></i>
            </div>
            <div class="jobster-timeline-info">
              <div class="dashboard-timeline-info">
                <span class="jobster-timeline-time">2011 - 2013</span>
                <h6 class="mb-2"> MIAMI HEAT </h6>
                <img src="../img/Miami-Heat-Logo-2000-Present.png" class="logos" alt="" height="75px" >
                <span></span>
                <p class="mt-2"></p>
              </div>
            </div>
          </div>

          <div class="jobster-timeline-item">
            <div class="jobster-timeline-cricle">
              <i class="far fa-circle"></i>
            </div>
            <div class="jobster-timeline-info">
              <div class="dashboard-timeline-info">
                <span class="jobster-timeline-time">2013 - 2014</span>
                <h6 class="mb-2"> SAN ANTONIO SPURS </h6>
                <img src="../img/san-antonio-spurs6036.webp" class="logos" alt="" height="75px" >
                <span></span>
                <p class="mt-2"></p>
              </div>
            </div>
          </div>

          <div class="jobster-timeline-item">
            <div class="jobster-timeline-cricle">
              <i class="far fa-circle"></i>
            </div>
            <div class="jobster-timeline-info">
              <div class="dashboard-timeline-info">
                <span class="jobster-timeline-time">2014 - 2015</span>
                <h6 class="mb-2"> GOLDEN STATE WARRIOR </h6>
                <img src="../img/golden logo.jpg" class="logos" alt="" height="75px" >
                <span></span>
                <p class="mt-2"></p>
              </div>
            </div>
          </div>

          <div class="jobster-timeline-item">
            <div class="jobster-timeline-cricle">
              <i class="far fa-circle"></i>
            </div>
            <div class="jobster-timeline-info">
              <div class="dashboard-timeline-info">
                <span class="jobster-timeline-time">2015 - 2016</span>
                <h6 class="mb-2"> CLEVELAND CAVALIERS </h6>
                <img src="../img/cavs.png" class="logos" alt="" height="75px" >
                <span></span>
                <p class="mt-2"></p>
              </div>
            </div>
          </div>

          <div class="jobster-timeline-item">
            <div class="jobster-timeline-cricle">
              <i class="far fa-circle"></i>
            </div>
            <div class="jobster-timeline-info">
              <div class="dashboard-timeline-info">
                <span class="jobster-timeline-time">2016 - 2018</span>
                <h6 class="mb-2"> GOLDEN STATE WARRIOR </h6>
                <img src="../img/golden logo.jpg" class="logos" alt="" height="75px" >
                <span></span>
                <p class="mt-2"></p>
              </div>
            </div>
          </div>

          <div class="jobster-timeline-item">
            <div class="jobster-timeline-cricle">
              <i class="far fa-circle"></i>
            </div>
            <div class="jobster-timeline-info">
              <div class="dashboard-timeline-info">
                <span class="jobster-timeline-time">2018 - 2019</span>
                <h6 class="mb-2"> TORONTO RAPTORS </h6>
                <img src="../img/Toronto-Raptors-logo.png" class="logos" alt="" height="75px" >
                <span></span>
                <p class="mt-2"></p>
              </div>
            </div>
          </div>
          <div class="jobster-timeline-item">
            <div class="jobster-timeline-cricle">
              <i class="far fa-circle"></i>
            </div>
            <div class="jobster-timeline-info">
              <div class="dashboard-timeline-info">
                <span class="jobster-timeline-time">2019 - 2020</span>
                <h6 class="mb-2"> LOS ANGELES LAKERS </h6>
                <img src="../img/lakers logo.jpeg" class="logos" alt="" height="75px" >
                <span></span>
                <p class="mt-2"></p>
              </div>
            </div>
          </div>

          <div class="jobster-timeline-item">
            <div class="jobster-timeline-cricle">
              <i class="far fa-circle"></i>
            </div>
            <div class="jobster-timeline-info">
              <div class="dashboard-timeline-info">
                <span class="jobster-timeline-time">2020 - 2021</span>
                <h6 class="mb-2">MILWAUKEE BUCKS </h6>
                <img src="../img/bucks.jpg" class="logos" alt="" height="75px" >
                <span></span>
                <p class="mt-2"></p>
              </div>
            </div>
          </div>
          <div class="jobster-timeline-item">
            <div class="jobster-timeline-cricle">
              <i class="far fa-circle"></i>
            </div>
            <div class="jobster-timeline-info">
              <div class="dashboard-timeline-info">
                <span class="jobster-timeline-time">2021 - 2022</span>
                <h6 class="mb-2">GOLDEN STATE WARRIOR</h6>
                <img src="../img/golden logo.jpg" class="logos" alt="" height="75px" >
                <span></span>
                <p class="mt-2"></p>
              </div>
            </div>
          </div>
          <div class="jobster-timeline-item">
            <div class="jobster-timeline-cricle">
              <i class="far fa-circle"></i>
            </div>
            <div class="jobster-timeline-info">
              <div class="dashboard-timeline-info">
                <span class="jobster-timeline-time">2022 - 2023</span>
                <h6 class="mb-2">DENVER NUGGETS</h6>
                <img src="../img/denver-nuggets-1993-2003-logo.png" class="logos" alt="" height="75px" >
                <span></span>
                <p class="mt-2"></p>
              </div>
            </div>
          </div>

         <div class="jobster-timeline-item mb-0">
          <div class="jobster-timeline-cricle">
            <i class="far fa-circle"></i>
          </div>
          <div class="jobster-timeline-info">
            <div class="dashboard-timeline-info">
              <span class="jobster-timeline-time">2023 - 2024 </span>
              <h6 class="mb-2"> BOSTON CELTICS   </h6>
              <img src="../img/Boston-Celtics-logo.png" class="logos" alt="" height="75px" >
              <span></span>
              <p class="mt-2"> </p>
            </div>
          </div>
        </div>
      </div>
    </div>
<!-- container -->

<div class="row gx-3 gx-xxl-5">
  <div class="col">
    <div class="p-3 border text-light">
      <img src="../img/cavsjersey.jpeg" alt=""  width="120px"  height="160px">
      <p>The Cavaliers began play as an NBA expansion team in 1970 under the ownership of the ambitious entrepreneur Nick Mileti, who at one time owned not only the Cavs but also baseball’s Cleveland Indians and the city’s World Hockey Association franchise (the Cavaliers have since gone through several changes of ownership). Coached by Bill Fitch and playing in the antiquated Cleveland Arena, the Cavs finished their first season with the worst record in the league, a frustrating exercise that was epitomized by John Warren unwittingly shooting at and scoring in the opponent’s basket during one game. The team’s poor season did net them the first overall selection in the 1971 NBA draft, which they used to select guard Austin Carr, the Cavaliers’ first star player.</p>
    </div>
  </div>
  <div class="col">
    <div class="p-3 border text-light">
      <img src="../img/Boston-Celtics-logo-removebg-preview.png" alt="" height="160px">
      <p>Boston Celtics, American professional basketball team based in Boston, Massachusetts. One of the most successful franchises in sports history, the Celtics won 11 of 13 National Basketball Association (NBA) championships from 1957 to 1969. Overall, they have won 18 NBA titles.

Founded in Boston in 1946 by Walter Brown, the Celtics were charter members of the Basketball Association of America, a forerunner of the NBA (established in 1949). At the time of the team’s founding, Brown also managed the Boston Garden, on whose distinctive parquet court the green-and-white-clad Celtics thrived until the franchise moved to a new arena, now known as TD Garden, in 1995–96. The team posted a losing record in each of its first four seasons.</p>
    </div>
  </div>
  <div class="col">
    <div class="p-3 border text-light">
      <img src="../img/gswgerssey.jpeg" alt=""  height="137px">
      <p>Golden State Warriors, American professional basketball team based in San Francisco that plays in the Western Conference of the National Basketball Association (NBA). The Warriors have won six NBA championships and one Basketball Association of America (BAA) title.

Early days of the NBA
Early days of the NBAPhiladelphia Warriors player Jack George (left) guarding Slater Martin of the Minneapolis Lakers, 1955.
The Warriors were founded in 1946 and were originally based in Philadelphia. One of the original members of the BAA, the team won the league’s first championship, behind the play of future Hall of Fame forward Joe Fulks, the BAA’s inaugural scoring leader. The Warriors lost in the BAA finals the next season, and in 1949 the team became a part of the NBA when the BAA merged.</p>
    </div>
  </div>
</div>
<br><br> 

<!-- contaner2 -->
<div class="row gx-3 gx-xxl-5">
  <div class="col">
    <div class="p-3 border text-light">
      <img src="../img/cobyshoes.webp" alt=""  width="120px"  height="160px">
      <p>Coby Bryant shoes</p>
    </div>
  </div>
  <div class="col">
    <div class="p-3 border text-light">
      <img src="../img/curryshoes.jpg" alt="" height="160px">
      <p>Stephen Curry shoes</p>
    </div>
  </div>
  <div class="col">
    <div class="p-3 border text-light">
      <img src="../img/irvingshoes.jpg" alt=""  height="160px">
      <p> Kyrie Irving shoes</p>
    </div>
  </div>
</div>
 <!-- contaner2 -->
 <br><br>
 <!-- contaner3-->
 <div class="row gx-3 gx-xxl-5">
  <div class="col">
    <div class="p-3 border text-light">
      <img src="../img/jordanshoes.webp" alt=""  width="120px"  height="160px">
      <p>jordan airforce</p>
    </div>
  </div>
  <div class="col">
    <div class="p-3 border text-light">
      <img src="../img/mjshoes.jpeg" alt="" height="160px">
      <p>Jordan shoes</p>
    </div>
  </div>
  <div class="col">
    <div class="p-3 border text-light">
      <img src="../img/nike.3.jpeg" alt=""  height="160px">
      <p>Air Nike</p>
    </div>
  </div>
</div>
<!-- contaner3-->
<br><br>
 <!-- contaner4-->
 <div class="row gx-3 gx-xxl-5">
  <div class="col">
    <div class="p-3 border text-light">
      <img src="../img/nike0.jpeg" alt=""  width="120px"  height="160px">
      <p>Coby shoes</p>
    </div>
  </div>
  <div class="col">
    <div class="p-3 border text-light">
      <img src="../img/nike5.jpeg" alt="" height="160px">
      <p>Air Force Jordan</p>
    </div>
  </div>
  <div class="col">
    <div class="p-3 border text-light">
      <img src="../img/underarmor.jpeg" alt=""  height="160px">
      <p>Curry shoes</p>
    </div>
  </div>
</div>
<!-- contaner4-->
<br><br>
<!-- contaner5-->
<div class="row gx-3 gx-xxl-5">
  <div class="col">
    <div class="p-3 border text-light">
      <img src="../img/underarmor0.jpeg" alt=""  width="120px"  height="160px">
      <p>Curry shoes</p>
    </div>
  </div>
  <div class="col">
    <div class="p-3 border text-light">
      <img src="../img/spaldingball.jpeg" alt="" height="160px">
      <p>spalding ball</p>
    </div>
  </div>
  <div class="col">
    <div class="p-3 border text-light">
      <img src="../img/wilsonball.jpeg" alt=""  height="160px">
      <p>wilson ball</p>
    </div>
  </div>
</div>
<!-- contaner5-->











    <!-- About Me Section -->
    <div class="page">
      <h2>About Me</h2>
      <p>Hi! im 23 years old now, current lived at Poblacion Santa catalina, Ilocos Sur. </p>
      <p>
        I am a dedicated and enthusiastic student currently pursuing a degree in Bachelor of Science and Information Technology 
        with a passion for studying more about technology With that said i need to learn more about JavaScript, HTML, CSS, 
        I enjoy creating my activities  however it needs to sleep late at night.
       
    </p>
    <p>
        Throughout my academic journey,  I am constantly seeking new challenges to expand my knowledge and keep up with the latest
         industry trends and technologies.
    </p>
    <p>
        My goal is to  gradutae and leverage my skills and experiences to develop applications that not only meet user needs but
         also provide an exceptional user experience. 
         I am eager to collaborate with professionals in the field and contribute to exciting projects that push the boundaries of technology.
    </p>
  </div>

  <!-- Experience Section 
  <div class="port my-5" >
      <div class="mt-0">
              <h5 class="text-white">Professional Skill:</h5>
              <div class="progress bg-dark">
                <div class="progress-bar bg-white" role="progressbar" style="width:40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                  <div class="progress-bar-title text-white">Photoshop</div>
                  <span class="progress-bar-number text-white">40%</span>
                </div>
              </div>
              <div class="progress bg-dark">
                <div class="progress-bar bg-white" role="progressbar" style="width:40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                  <div class="progress-bar-title text-white">JavaScript</div>
                  <span class="progress-bar-number text-white">40%</span>
                </div>
              </div>
              <div class="progress bg-dark">
                <div class="progress-bar bg-white" role="progressbar" style="width:55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
                  <div class="progress-bar-title text-white">HTML/CSS</div>
                  <span class="progress-bar-number text-white">55%</span>
                </div>
              </div>
              <div class="progress bg-dark mb-md-0">
                <div class="progress-bar bg-white" role="progressbar" style="width:50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                  <div class="progress-bar-title text-white">PHP</div>
                  <span class="progress-bar-number text-white">50%</span>
                </div>
              </div>
            </div>
          </div>
        </div>-->
       
<!-- Different sized gutters can be used with the help of .gx-*-{0|1|2|3|4|5} class -->
<!-- contaner5-->
 <center> <h3>Iconic photo</h3>
<div class="row gx-3 gx-xxl-5">
  <div class="col">
    <div class="p-3 border text-light">
      <img src="../img/mamba.jpeg" alt=""  width="120px"  height="160px">
      <p></p>
    </div>
  </div>
  <div class="col">
    <div class="p-3 border text-light">
      <img src="../img/currypic.jpeg" alt="" height="160px">
      <p></p>
    </div>
  </div>
  <div class="col">
    <div class="p-3 border text-light">
      <img src="../img/lbj.jpeg" alt=""  height="175px">
      <p</p>
    </div>
  </div>
</div>

<div class="row gx-3 gx-xxl-5">
  <div class="col">
    <div class="p-3 border text-light">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT9AIf2Igs5kiGdC4IBFBvU50O5TnUseOoggw&s" alt=""  width="120px"  height="160px">
      <p></p>
    </div>
  </div>
  <div class="col">
    <div class="p-3 border text-light">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTqviQTzx4FUdQm1jsflIFZRWZTJm4K7uEnIg&s" alt="" height="160px">
      <p></p>
    </div>
  </div>
  <div class="col">
    <div class="p-3 border text-light">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT9AIf2Igs5kiGdC4IBFBvU50O5TnUseOoggw&s" alt=""   height="175px">
      <p</p>
    </div>
  </div>
</div>


<div class="row gx-3 gx-xxl-5">
  <div class="col">
    <div class="p-3 border text-light">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTLYFsKTBELepo6cULLNt7rUoBcdlSP55NuCA&s" alt=""  width="120px"  height="160px">
      <p></p>
    </div>
  </div>
  <div class="col">
    <div class="p-3 border text-light">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR2tYIDLbrnDt1-DCU5JGVr2v8WXCuKrNlgYw&s" alt="" height="160px">
      <p></p>
    </div>
  </div>
  <div class="col">
    <div class="p-3 border text-light">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQtXfO7KMWBziUh0SsKXMSUJX8DpKZr_IPtAA&s" alt=""  height="175px">
      <p</p>
    </div>
  </div>
</div>


<div class="row gx-3 gx-xxl-5">
  <div class="col">
    <div class="p-3 border text-light">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSvhW2ZRpDFzyco-uhrPhj_R6-5kynxN8krAg&s" alt=""  width="120px"  height="170px">
      <p></p>
    </div>
  </div>
  <div class="col">
    <div class="p-3 border text-light">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQUsWq-SX_nctSrbfYACZ9TGdJloCM8D1MStA&s">
        <p></p>
    </div>
  </div>
  <div class="col">
    <div class="p-3 border text-light">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ4Pxl7JzgMcFNBKmetrvr33a8EXXpWr5JT9A&s"  height="184px">
       <p</p>
    </div>
  </div>
</div>
</center>
<!-- contaner5-->


        <!-- Footer -->
        <footer class="bg-dark text-white text-center py-4">
          <div class="container ">
              <div class="row">
                  <div class="col-md-4">
                      <h5>About Us</h5>
                      <p>Providing quality services to the users.</p>
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

         <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> 
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
</body>
</html>
