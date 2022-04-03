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
  $workActive = "active";
  include 'header.html';
?>
<main>
  <!-- Masthead-->
  <div class="masthead mastheadampersound px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
      <div class="d-flex justify-content-center">
          <div class="text-center">
              <img src="assets/icon/amper.png" height="200"/>
              <h2 class="text-white mx-auto mt-2 mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fringilla quam vitae pretium ultricies. Aliquam varius elementum tempor. Sed luctus accumsan risus, sed ullamcorper diam pulvinar et.</h2>
          </div>
      </div>
  </div>

  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing" >
    <!-- START THE FEATURETTES -->
    <div class="row featurette about">
      <div class="col-md-12">
        <h2 class="featurette-heading text-center">Our Services</h2>
        <br/>
        <p class="lead text-center">Studio Duatuju is a collective hub of several business units that revolves around audio production</p>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-12 order-md-2">
        <h2 class="featurette-heading text-center">Our Works</h2>
        <br/>
          <div class="row text-center">
            <div class="col">
              <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="300" height="450" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 250x250" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#666" dy=".3em" font-size="24">TVC</text></svg>
            </div>
            <div class="col">
              <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="300" height="450" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 250x250" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#666" dy=".3em" font-size="24">Series</text></svg>
            </div>
            <div class="col">
              <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="300" height="450" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 250x250" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#666" dy=".3em" font-size="24">Advertisements</text></svg>
            </div>
            <div class="col">
              <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="300" height="450" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 250x250" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#666" dy=".3em" font-size="24">Others</text></svg>
            </div>
          </div>
      </div>
    </div>

    <!--<hr class="featurette-divider"> -->

    <!-- /END THE FEATURETTES -->
    
  </div><!-- /.container -->
  <br/>
  <div class="container">
    <div class="row">
      <p class=""><a style= "float: right;" class="btn btn-outline-light" href="#">Back to top</a></p>
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
