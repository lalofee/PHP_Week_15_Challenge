<!-- SELECT COUNT(*) as "free tables" FROM TABLES WHERE active = 0; -->

<?php

 ob_start();
  session_start();

  require_once 'actions/db_connect.php';


// hole die Daten aus der Datenbank über die freien Tische (mit active 0 bezeichnet)
 $sql = "SELECT count(*) as 'free tables' FROM `tables` WHERE active = 0";

    $result = $conn->query($sql);

    $data = $result->fetch_assoc();
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Café Crud</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="custom.css" rel="stylesheet">
  </head>
  <body>

    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Café Crud</a>
        <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button> -->
        <div class="collapse navbar-collapse" id="navbarCollapse">          
          <ul class="navbar-nav">            
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="register.php">Register</a>
            </li>
          </ul>
          </div>        
      </nav>
    </header>

    

    <main role="main">

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="img/cake.jpg" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>Café Crud</h1>
                <p>Serving the best Cakes on Planet Earth.</p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="img/lokal.jpg" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Café Crud</h1>
                <p>Best service in town</p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="img/cafe.jpg" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1>Café Crud</h1>
                <p>Our Café is legendary.</p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>


      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container p-2" id="reservation">
        <h2 class="text-center">Table Reservation</h2>
        <hr>
        <div class="row">
          <div class="col-lg-8">
            <p>Currently free tables:</p>
            <span class="p-3">We have <?php echo $data["free tables"]; ?> free tables!</span> 
            <p class="mt-5">Contact:<br><br>+43/650/5566325<br>Samson Street 7<br>16524 Brooklyn</p>           
          </div>
          <div class="col-lg-4">
            <img class="float-right ml-3" src="img/karte.jpg" alt="Generic placeholder image" width="" height="">            
          </div>
   
        </div><!-- /.row -->
      </div><!-- /.container -->


      <!-- FOOTER -->
     <!--  <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017-2018 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>
    </main> -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  
  </body>
</html>
