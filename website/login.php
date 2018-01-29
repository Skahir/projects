<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Nando Reij">

    <title>Ball Breakers</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" type="text/css" href="Resources/bootstrap/css/bootstrap.min.css">
  
  <!-- Custom styles for this template -->
  <link rel="stylesheet" type="text/css" href="style.css">
  
  <!-- thether -->
  <script src="Resources/tether/dist/js/tether.min.js"></script>
  <link rel="stylesheet" href="Resources/tether/dist/css/tether.min.css">

  <!-- jquery -->
  <script src="Resources/jquery/jquery.min.js"></script>
  <script src="Resources/bootstrap/js/bootstrap.min.js"></script>

  <!-- background -->
  <canvas width="3" height="3"></canvas>
  <script src="background.js"></script>

  <?php 
    session_start(); 
  ?>

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" img=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            
              <a class="nav-link" href="index.php">Home</a>

            <!-- current page highlight -->
            <li class="nav-item active">
              <a class="nav-link" href="login.php">Login
                <span class="sr-only">(current)</span>
              </a>
            </li>

              <a class="nav-link" href="register.php">Register</a>
            
           
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <center><h1 class="display-1 white">Ball Breakers</h1></center>

      <div class="row justify-content-center">      
      
        <div class="col-4">

          <div class="frm">
            <form method="POST" action="login_form.php">
              
              <?php if(isset($_SESSION["error"])) { echo '<div class="alert alert-danger">' . $_SESSION["errMsg"] . '</div>';} ?>
              <!-- ff veranderen in de rest -->

              <label>Gebruikersnaam</label><br>
              <input type="text" class="form-control" id="username" name="username" placeholder="gebruikersnaam"/><br>
              <label>Wachtwoord</label><br>
              <input type="password" class="form-control" id="password" name="password" placeholder="wachtwoord"/><br><br>
              <input type="submit" class="btn btn-danger" id="login" name="login" value="login"/>

            </form>
            
            
          <!-- end of frame -->
          </div>
      <!-- end of center col-4 -->
      </div>
    <!-- end of container -->
    </div>

  </body>

</html>