<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Ahau Shu">
    <meta name="generator" content="studioduatuju 1.0.0">
    <title>Studio Duatuju</title>

    

    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/carousel.css" rel="stylesheet">
    <link href="assets/duatuju.css" rel="stylesheet">

  </head>
  <body class="text-white bg-dark">
    
<?php 
  $contactActive = "active";
  include 'header.html';
?>

<main>
  <!-- Masthead-->
  <div class="masthead mastheadcu px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
    <div class="container marketing" >
      <div class="row featurette" id="contact">
        <div class="col-md-7">
          <h2 class="featurette-heading">Work With Us</h2>
          <p class="lead">We believe your brands needs a beautiful sounds. Boost your visual with our experienced audio engineers. We couldn't wait to collaborate with you.</p>
        </div>
        <div class="col-md-5">
          <form class="needs-validation" novalidate>
            <div class="row g-3">
              <div class="col-sm-12">
                <label for="firstName" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Your name is required.
                </div>
              </div>

              <div class="col-12">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" placeholder="" required>
                <div class="invalid-feedback">
                  Please enter a valid email address.
                </div>
              </div>

              <div class="col-12">
                <label for="address" class="form-label">Message</label>
                <textarea class="form-control" id="Message" rows="3" required></textarea>
                <div class="invalid-feedback">
                  Please enter your Message.
                </div>
              </div>
            </div>
            <br/>

            <button class="w-100 btn btn-info btn-lg" type="submit">Submit</button>
          </form>

        </div>
      </div>
    </div>
  </div>

  <?php include 'footer.html';?>
</main>

  <!-- SCRIPT -->
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/form-validation.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script type="text/javascript">
      $(window).scroll(function () {
        /*light*/
        if ($(window).scrollTop() >= 50) {
          $('.navbar').css('--bs-bg-opacity','1');
          document.getElementById('sdbrand').src='assets/logo_col.png';
          document.getElementById("sdnavbar").className = "navbar navbar-expand-md navbar-light fixed-top bg-light";
          document.getElementById("sduldd").className = "dropdown-menu dropdown-menu-light";
          document.getElementById("sduldd").style.backgroundColor = '#fff';
          $('.sdsmicon').css('fill','black');

        }
        /*dark*/
        else {
          $('.navbar').css('--bs-bg-opacity','0');
          document.getElementById('sdbrand').src='assets/logo_grey.png';
          document.getElementById("sdnavbar").className = "navbar navbar-expand-md navbar-dark fixed-top bg-dark";
          document.getElementById("sduldd").className = "dropdown-menu dropdown-menu-dark";
          document.getElementById("sduldd").style.backgroundColor = 'transparent';
          $('.sdsmicon').css('fill','white');
        }
      }); 
    </script>
      
  </body>
</html>
