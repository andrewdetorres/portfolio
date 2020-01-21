<!DOCTYPE html>
<html lang="en">
<head>

  <title>Andrew De Torres | Full Stack Web Developer | Vancouver</title>

  <!-- Meta Tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="images/favicon.ico" />
  <meta
    name="description"
    content="Full stack web developer currently residing in the Vancouver area. Skills include Wordpress, Drupal, ReactJS, PHP, NodeJS."
    />
  
  <link rel="apple-touch-icon" href="images/iphone_icon.png" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,700,800,900&display=swap" rel="stylesheet">

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

  <!-- Stylesheets -->
  <link rel="stylesheet" href="css/style.css"/>

  <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"/>

  <!-- Google Font for logo   -->
  <link href="assets/fonts/fontawesome/css/all.min.css" rel="stylesheet" />
</head>
<body>

  <?php require_once('templates/navigation.html'); ?>

  <div class="container mt-5">
    <div class="d-flex flex-column justify-content-center align-items-center">
      <div class="global-title justify-self-start">
          Andrew
          <br>
          De Torres
      </div>
      <h4 class="text-center my-5">I'm a full stack web developer based in Vacnouver, BC.</h4>
      <button href="#" class="btn btn-primary">View Work</button>
    </div>
  </div>

  <div class="m-5">
    <div class="d-flex flex-wrap justify-content-between px-5" style="line-height:30px;">
      <div class="project-cell">
        <img src="images/deckplas.jpeg" class="project" style="object-fit: cover">
        </div>
      </div>
      <div class="project-cell">
        <img src="images/deckplas.jpeg" class="project" style="object-fit: cover">
        </div>
      </div>
      <div class="project-cell">
        <img src="images/deckplas.jpeg" class="project" style="object-fit: cover">
        </div>
      </div>
    </div>
  </div>



</body>
<footer>
    <!-- Bootstrap Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</footer>
</html>