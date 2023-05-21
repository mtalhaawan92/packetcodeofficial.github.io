<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    

    <!-- Stylesheets for Styling -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">


    <!-- Font Awesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />



  </head>
  <body>
    

  
  
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-white fixed-top">
  <div class="container">
    <div class="navbar-brand">
        <i class="fa-solid fa-dumbbell p-3 bg-primary rounded-4 text-white"></i>
        <span class="brand-title ">GYM</span>
    </div>
    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto me-3 mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link mx-3" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-3 active-nav" aria-current="page" href="trainers.php">Trainers</a>
        </li>
        <li class="nav-item">
            <a class="nav-link mx-3" aria-current="page" href="about.php">About</a>
        </li>
      </ul>
      <form class="d-flex" role="search" action="#body-mass-index">
        <button class="btn btn-outline-primary p-3 px-5 rounded-5 fw-bold" type="submit">BMI</button>
      </form>
    </div>
  </div>
</nav>




<!-- page intro -->




<div class="container mt-5 pt-5">
    

<!-- Title and Description of Trainers Section -->
<div class="main-title text-center " data-aos="fade-up">
<h1 class="fw-bold page-title">Trainers 🔥</h1>
<p class="text-muted">You can hire any our trainer from this page.</p>
</div>



</div>




<!-- Start of Trainers Section -->
<section class="container">



<div class="row my-5">
  <!-- First Trainer Profile -->
  <div class="col-12 col-sm-12 col-md-6 col-lg-4 mb-4" data-aos="fade-up">
  <div class="card rounded-5">
  <img src="img/trainer.png" class="card-img-top rounded-5">
  <div class="card-body p-5">
    <h5 class="card-title text-uppercase">Trainer 01</h5>
    <p class="text-muted">Experienced gym trainer specialized in weight training and bodybuilding with a passion for helping clients achieve their fitness goals. </p>
    <a href="#" class="btn btn-outline-primary p-3 rounded-5 w-100">View Details</a>
  </div>
</div>
  </div>
  <!-- Second Trainer Profile -->
  <div class="col-12 col-sm-12 col-md-6 col-lg-4 mb-4" data-aos="fade-up">
  <div class="card shadow rounded-5">
  <img src="img/trainer.png" class="card-img-top rounded-5">
  <div class="card-body p-5">
    <h5 class="card-title text-uppercase">Trainer 02</h5>
    <p class="text-muted">Experienced gym trainer specialized in weight training and bodybuilding with a passion for helping clients achieve their fitness goals. </p>
    <a href="#" class="btn btn-primary p-3 rounded-5 w-100">View Details</a>
  </div>
</div>
  </div>
  <!-- Third Trainer Profile -->
  <div class="col-12 col-sm-12 col-md-6 col-lg-4 mb-4" data-aos="fade-up">
  <div class="card rounded-5">
  <img src="img/trainer.png" class="card-img-top rounded-5">
  <div class="card-body p-5">
    <h5 class="card-title text-uppercase">Trainer 03</h5>
    <p class="text-muted">Experienced gym trainer specialized in weight training and bodybuilding with a passion for helping clients achieve their fitness goals. </p>
    <a href="#" class="btn btn-outline-primary p-3 rounded-5 w-100">View Details</a>
  </div>
</div>
  </div>
</div>



</section>

<!-- Start of BMI section -->
<section class="container my-5 py-5 " id="body-mass-index">
   



<div class="row">



<!-- Title and Description of BMI Section -->
<div class="main-title text-center  mb-5" data-aos="fade-up">
<h1 class="fw-bold page-title">Calculate Body Mass Index 🔥</h1>
<p class="text-muted">You can calculate your BMI using following form.</p>
</div>


  <div class="col-md-12">



  <div class="card bg-primary-gradient border-0 rounded-5 shadow" data-aos="fade-up">
    <div class="card-body p-5">
    
    <!-- Form of BMI Section -->
    <form method="post" action="#body-mass-index" autocomplete="off">
      <div class="mb-3">
        <input type="number" name="weight" id="bmi-input" class="form-control bg-primary border-0 text-white p-3 rounded-5" placeholder="Weight - KG" required>
      </div>
      <div class="mb-3">
        <input type="number" name="height" id="bmi-input" class="form-control bg-primary border-0 text-white p-3 rounded-5" placeholder="Height - CM" required>
      </div>
      <button class="btn bg-primary text-white p-3 px-5 rounded-5 fw-bold" name="submit" type="submit">Calculate <i class="fa fa-angle-right"></i></button>
    </form>


    <!-- Calculation using PHP -->
    <?php
      if (isset($_POST['submit'])) {


        $weight = $_POST['weight'];
        $height = $_POST['height'] / 100; // convert cm to meters

        // calculate BMI
        $bmi = $weight / ($height * $height);

        // display the result
        echo "<p class='alert bg-primary mb-0 mt-3 rounded-5'>Your BMI is: <b>" . number_format($bmi, 1) . "</b></p>";

      }
    ?>


    </div>
  </div>



  </div>
</div>



    
</section>
<!-- End of BMI section -->




<!-- Footer Section -->
<footer class="text-center text-lg-start bg-white text-muted">
  



  <!-- Section: Links  -->
  <section class="pt-5">
    <div class="container text-center text-md-start mt-5">

    <div class="row">
      <div class="col-10 mx-auto">
        
    
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <div class="navbar-brand">
        <i class="fa-solid fa-dumbbell p-3 bg-primary rounded-4 text-white"></i>
        <b><span class="brand-title ">GYM</span></b>
        </div>
          <p class="mt-4">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat saepe minus.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Company
          </h6>
          <p>
            <a href="#!" class="text-reset text-decoration-none">Blog</a>
          </p>
          <p>
            <a href="#!" class="text-reset text-decoration-none">Jobs</a>
          </p>
          <p>
            <a href="#!" class="text-reset text-decoration-none">Careers</a>
          </p>
          <p>
            <a href="#!" class="text-reset text-decoration-none">About Us</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Partnership
          </h6>
          <p>
            <a href="#!" class="text-reset text-decoration-none">Nike</a>
          </p>
          <p>
            <a href="#!" class="text-reset text-decoration-none">Jordan</a>
          </p>
          <p>
            <a href="#!" class="text-reset text-decoration-none">Tumblr</a>
          </p>
          <p>
            <a href="#!" class="text-reset text-decoration-none">MTV</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Our More</h6>
          <p>
            <form action="" method="post">
              <div class="mb-0">
                <input type="text" name="" class="form-control p-3 rounded-5 border-primary" placeholder="Your Email">
              </div>
            </form>
          </p>
          <p>
            Enter Your Address so you don't miss any update from us.
          </p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
    
    </div>
    </div>

  </section>
  <!-- Section: Links  -->

</footer>
<!-- Footer -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>


<script src="js/bootstrap.js"></script>    
<script src="js/main.js"></script>    



    


<script>
  $(document).ready(function(){


    
  AOS.init();



  });
</script>


  </body>
</html>