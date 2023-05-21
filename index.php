<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GYM</title>
    

    <!-- Stylesheets for Styling -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">


    <!-- Font Awesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />



    <!-- AOS cdn for scrolling animation -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />



  </head>
  <body>
    

  
  
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-white fixed-top">
  <div class="container">

    <!-- navbar brand logo and name -->
    <div class="navbar-brand">
        <i class="fa-solid fa-dumbbell p-3 bg-primary rounded-4 text-white"></i>
        <span class="brand-title ">GYM</span>
    </div>


    <!-- This button will show only on mobile screens. -->
    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


    <!-- Our Links -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      
      <ul class="navbar-nav ms-auto me-3 mb-2 mb-lg-0">
        
        
        <li class="nav-item">
          <a class="nav-link mx-3 active-nav" aria-current="page" href="index.php">Home</a>
        </li>

        
        <li class="nav-item">
          <a class="nav-link mx-3" aria-current="page" href="trainers.php">Trainers</a>
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



<!-- My Hero Section -->
<section class="container" id="home">


<div class="row hero-section">
    <div class="col-md-6 hero-section-sides">

      <!-- Hero section Heading -->
        <h1 class="hero-title" data-aos="fade-up">
            Stay healthy even if you stay at home <img src="https://img.freepik.com/free-vector/basketball-logo-orange-ball_78370-1101.jpg" style="width: 80px; height: 80px;">
        </h1>

        <!-- Hero section Description -->
        <p class="hero-description text-muted" data-aos="fade-up">
        Here you can find a variety of sports programs that you like and many verified and fun sports inspectors staying at home
        </p>


        
        <!-- Hero section Buttons -->
        <button class="btn btn-hero btn-hero-top btn-primary p-3 px-5 rounded-5 fw-bold" type="submit" data-aos="fade-up">Our Services <i class="fa fa-angle-right"></i></button>
        <a href="" class="text-dark btn-scheduale" data-aos="fade-up">Start Scheduling</a>

        



    </div>

    <!-- Hero section Side Image -->
    <div class="col-md-6 hero-section-sides" data-aos="fade-up">
        <img src="img/hero-image.png" class="w-100 h-100">
    </div>
    
</div>


</section>

<!-- End of Hero Section -->




<!-- Start of Programs Section -->
<section class="container">


<!-- Title and Description of Featured Section -->
<div class="main-title text-center " data-aos="fade-up">
<h1 class="fw-bold page-title">Featured program of the month 🔥</h1>
<p class="text-muted">You can join our featured program and enjoy the fun.</p>
</div>



<!-- Feature row -->
<div class="row my-5">


<!-- Boot Camp Feature Card -->
<div class="col-md-4" data-aos="fade-up">
<div class="card rounded-5">
<img src="img/hero-image-1.png" class="card-img-top rounded-5">
<div class="card-body p-5">
<h5 class="card-title text-uppercase">Boot camps</h5>
<p class="text-muted"> Intensive, short-term fitness programs designed to help clients get in shape quickly through challenging workouts and group motivation.</p>
<a href="#" class="btn btn-outline-primary p-3 rounded-5 w-100">View Details</a>
</div>
</div>
</div>

<!-- Weight Loss Feature Card -->
<div class="col-md-4" data-aos="fade-up">
<div class="card shadow rounded-5">
<img src="img/hero-image-1.png" class="card-img-top rounded-5">
<div class="card-body p-5">
<h5 class="card-title text-uppercase">Weight loss challenges</h5>
<p class="text-muted">Tailored programs and challenges that help clients lose weight over a set period of time with the guidance and support of expert trainers and nutritionists.</p>
<a href="#" class="btn btn-primary p-3 rounded-5 w-100">View Details</a>
</div>
</div>
</div>

<!-- Personal Training Feature Card -->
<div class="col-md-4" data-aos="fade-up">
<div class="card rounded-5">
<img src="img/hero-image-1.png" class="card-img-top rounded-5">
<div class="card-body p-5">
<h5 class="card-title text-uppercase">Personal training</h5>
<p class="text-muted">Customized fitness plans and one-on-one sessions with experienced trainers that help clients achieve their fitness goals in a personalized and effective way.</p>
<a href="#" class="btn btn-outline-primary p-3 rounded-5 w-100">View Details</a>
</div>
</div>
</div>


</div>




<div class="row feature-section mt-5">


  <!-- Side image of Feature Section -->
    <div class="col-md-6 feature-image">
        <img src="img/feature-image.png" class="w-100" data-aos="fade-up">
    </div>


    <!-- Side Details of Feature Section -->
    <div class="col-md-4 main-feature-description mx-auto">
    <h1 class="fw-bold page-title" data-aos="fade-up">Want it online or video you can feel it 🔥</h1>
    <p class="text-muted py-4" data-aos="fade-up">
    You can exercise anywhere, anytime, we have many
    programs you can choose according to what you are
    interested in, here you are free to determine when you want
    to workout, and can be guided by experienced inspectors
    </p>

    <button class="btn btn-hero btn-primary p-3 px-5 rounded-5 fw-bold" type="submit" data-aos="fade-up">Get Started <i class="fa fa-angle-right"></i></button>
    </div>

</div>


</section>
<!-- End of Program section -->













<!-- Start of Benefits section -->
<section class="container">


<div class="row feature-section mt-5">
   
    <div class="col-md-4 mx-auto main-feature-description">
      <!-- main title of Benefits section -->
    <h1 class="fw-bold page-title mb-5" data-aos="fade-up">Many Benefits for you</h1>
    


    <!-- Accordian of Benefits section -->
    <div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item border-0" data-aos="fade-up">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed text-muted" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        <h1 class="p-3 bg-primary rounded-5 text-white me-3 px-3">1</h1> You can schedule whenever you are ready to exercise with us
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
    </div>
  </div>
  <div class="accordion-item border-0" data-aos="fade-up">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed text-muted" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        <h1 class="p-3 bg-primary rounded-5 text-white me-3 px-3">2</h1> A collection of videos that really help you on a diet or other program
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
    </div>
  </div>
  <div class="accordion-item border-0" data-aos="fade-up">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed text-muted" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        <h1 class="p-3 bg-primary rounded-5 text-white me-3 px-3">3</h1> If you successfully join the program you will get a certificate
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
    </div>
  </div>
</div>
    
    </div>
    <div class="col-md-6 feature-image" data-aos="fade-up">
        <img src="img/benefits.png" class="w-100">
    </div>
</div>


</section>
<!-- End of Benefits section -->



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