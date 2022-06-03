<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>M-Foods</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/8ed35a3507.js" crossorigin="anonymous"></script>
</head>

<body>

<!-- Title -->

  <section id="title"><div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="">M-Foods</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#footer">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#categories">Categories</a>
          </li>
          <li class="nav-item">
          <a href="mycart.php"><img src="images/shopping-cart.png" style="width: 25px; height: 25px ; margin-top: 6px;"></a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Title -->

    <div class="row">
      <div class="col-lg-4">
        <h1 class="big-heading">Order Food to your Door</h1>
      </div>
    <div class="col-lg-4">
      <img class="title-img" src="images/iphone.png" alt="iphone-mockup">
    </div>
    </div>
</div>
  </section>

  <!-- Features -->

  <section id="features">

    <div class="row">
    <div class="feature-box col-lg-4">
      <i class="icon fas fa-check-circle fa-4x"></i>
      <h3 class="feature-title">User-Friendly</h3>
      <p>Simple and Friendly UI </p>
    </div>
    <div class="feature-box col-lg-4">
      <i class="icon fas fa-hamburger fa-4x"></i>
      <h3 class="feature-title">Wide Variety Foods</h3>
      <p>We provide different categories of foods to our customers</p>
    </div>
    <div class="feature-box col-lg-4">
      <i class="icon fas fa-heart fa-4x"></i>
      <h3 class="feature-title">Customer Satisfaction.</h3>
      <p>Customer's love to order their food on M-foods</p>
    </div>
    </div>
  </section>

  <!-- Testimonials -->

  <section id="testimonials">

    <div id="testimonial-carousel" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="testimonial-img" src="images/biriyani.jpg" alt="">
      <img class="testimonial-img" src="images/burger.jpg" alt="">


    </div>
    <div class="carousel-item">

      <img class="testimonial-img" src="images/slider-ice.jpg" alt="">
      <img class="testimonial-img" src="images/cake.jpg" alt="">

    </div>
    <div class="carousel-item">
      <img class="testimonial-img" src="images/slider-pizza.jpg" alt="">
      <img class="testimonial-img" src="images/tiffin.jpg" alt="">
    </div>
  </div>
  <a class="carousel-control-prev" href="#testimonial-carousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#testimonial-carousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

  </section>

  <!-- Pricing -->

  <section id="categories">
  <div class="container cards-container">

    <h1 id="cat-title">Categories</h1>
    <br><br>
    <div class="row">

      <div class="col-sm-6 col-lg-4">
        <div class="card border-0">
          <div class="card-body">
            <img src="images/biriyani.jpg" class="categery" alt="">
            <div >
            <a href="pages/biriyanis.php" class="btn btn-outline-light btn-lg download-btn">Biryani</a>
          </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-lg-4">
        <div class="card border-0">
          <div class="card-body">
            <img src="images/pizza.jpg" class="categery" alt="">
            <div >
            <a href="pages/pizza.php" class="btn btn-outline-light btn-lg download-btn">Pizza</a>
          </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-lg-4">
        <div class="card border-0">
          <div class="card-body">
            <img src="images/burger.jpg" class="categery" alt="">
            <div >
            <a href="pages/burger.php" class="btn btn-outline-light btn-lg download-btn">Burger</a>
          </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-lg-4">
        <div class="card border-0">
          <div class="card-body ">
            <img src="images/tiffin.jpg" class="categery" alt="">
          <div >
          <a href="pages/breakfast.php" class="btn btn-outline-light btn-lg download-btn">Tiffin</a>
        </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-lg-4">
        <div class="card border-0">
          <div class="card-body">
            <img src="images/ice.jpg" class="categery" alt="">
            <div>
            <a href="pages/icecreams.php" class="btn btn-outline-light btn-lg download-btn">Ice Cream</a>
          </div>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-lg-4">
        <div class="card border-0">
          <div class="card-body">
            <img src="images/cake.jpg" class="categery" alt="">
            <div >
            <a href="pages/cakes.php" class="btn btn-outline-light btn-lg download-btn">Cakes</a>
          </div>
          </div>
        </div>
      </div>

    </div>
  </div>

</section>

  <!-- Footer -->

  <footer id="footer">
    <i class="social-icon fab fa-facebook-f"></i>
    <i class="social-icon fab fa-twitter"></i>
    <i class="social-icon fab fa-instagram"></i>
    <i class="social-icon fas fa-envelope"></i>

    <p class="Copyright">© Copyright M-Foods</p>
    

  </footer>

</body>

</html>
