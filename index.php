<?php 

include 'db.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Home - Serandib Twist</title>
 <style>
 
  .navbar-nav .dropdown-menu {
    display: block !important;
    opacity: 0;
    visibility: hidden;
    
    transform: translateY(-30px) scaleY(0);
    transform-origin: top;
    
    
    transition: all 0.1s cubic-bezier(0.23, 1, 0.32, 1); 
    
    border: none;
    border-top: 3px solid #f1c40f; 
    box-shadow: 0 15px 35px rgba(0,0,0,0.2);
    border-radius: 0 0 10px 10px;
    padding: 10px 0;
  }


  .nav-item.dropdown:hover .dropdown-menu {
    opacity: 1;
    visibility: visible;
    transform: translateY(0) scaleY(1);
  }

  
  .dropdown-item {
    transition: all 0.6s ease-out;
    transform: translateY(-10px);
    opacity: 0;
    padding: 10px 20px;
  }

  .nav-item.dropdown:hover .dropdown-item {
    transform: translateY(0);
    opacity: 1;
    transition-delay: 0.2s;
  }

  .dropdown-item:hover {
    background-color: #f4f1ee;
    color: #6f4e37 !important;
    padding-left: 30px; 
    transition: all 0.3s ease;
  }

  /* --- Carousel & Other Styles --- */
  .carousel-item img {
    transition: transform 6s ease-in-out !important;
  }
  .carousel-item.active img {
    transform: scale(1.15);
  }
  .carousel-fade .carousel-item {
    transition-duration: 2.0s !important;
  }
  .card-img-top {
    height: 200px;
    object-fit: cover;
  }
</style>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#6f4e37;">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
      <img src="images/logo.png" alt="Logo" height="180">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Shop</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="srilankanspices.php">Sri Lankan Spices</a></li>
            <li><a class="dropdown-item" href="cupcakes.php">Cupcakes</a></li>
            <li><a class="dropdown-item" href="coffee.php">Coffee & Beverages</a></li>
            <li><a class="dropdown-item" href="tea.php">Tea</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link" href="bestsellers.php">Best Sellers</a></li>
        <li class="nav-item"><a class="nav-link" href="ourstory.php">Our Story</a></li>
        <li class="nav-item"><a class="nav-link text-warning fw-bold" href="admin.php">Admin Panel</a></li>
      </ul>
      
      <form class="d-flex ms-auto" action="search.php" method="GET">
  <input class="form-control me-2" type="search" name="query" placeholder="Search for Coffee, Tea..." required>
  <button class="btn btn-outline-light" type="submit">Search</button>
</form>
    </div>
  </div>
</nav>

<div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
  </div>

  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="6000">
      <img src="images/banner.jpg" class="d-block w-100" style="height: 529px; object-fit: cover;" alt="Sri Lankan Spices">
      <div class="carousel-caption d-none d-md-block" style="background: rgba(0,0,0,0.5); border-radius: 15px; padding: 20px;">
        <h2 class="display-4 fw-bold">Authentic Spices</h2>
        <p class="lead">Freshly sourced from the heart of Sri Lanka.</p>
        <a href="srilankanspices.php" class="btn btn-warning">Shop Now</a>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="6000">
      <img src="images/coffee-banner.jpg" class="d-block w-100" style="height: 529px; object-fit: cover;" alt="Fresh Coffee">
      <div class="carousel-caption d-none d-md-block" style="background: rgba(0,0,0,0.5); border-radius: 15px; padding: 20px;">
        <h2 class="display-4 fw-bold">Premium Coffee</h2>
        <p class="lead">Roasted to perfection for your morning cup.</p>
        <a href="coffee.php" class="btn btn-light">View Blends</a>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="6000">
      <img src="images/cupcake-banner.jpg" class="d-block w-100" style="height: 529px; object-fit: cover;" alt="Cupcakes">
      <div class="carousel-caption d-none d-md-block" style="background: rgba(0,0,0,0.5); border-radius: 15px; padding: 20px;">
        <h2 class="display-4 fw-bold">Sweet Moments</h2>
        <p class="lead">Handcrafted treats for every celebration.</p>
        <a href="cupcakes.php" class="btn btn-info text-white">Browse Sweets</a>
      </div>
    </div>
  </div>
</div>

<section class="py-5">
  <div class="container text-center">
    <h2 class="mb-4 fw-bold">Shop by Category</h2>
    <div class="row g-4">
      <div class="col-md-3">
        <div class="card h-100 shadow-sm border-0">
          <img src="images/coffee.jpg" class="card-img-top" alt="Coffee">
          <div class="card-body"><h5>Coffee</h5><a href="coffee.php" class="btn btn-outline-dark">Shop Now</a></div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card h-100 shadow-sm border-0">
          <img src="images/spices.jpg" class="card-img-top" alt="Spices">
          <div class="card-body"><h5>Spices</h5><a href="srilankanspices.php" class="btn btn-outline-dark">Shop Now</a></div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card h-100 shadow-sm border-0">
          <img src="images/cupcakes.jpeg" class="card-img-top" alt="Cupcakes">
          <div class="card-body"><h5>Cupcakes</h5><a href="cupcakes.php" class="btn btn-outline-dark">Shop Now</a></div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card h-100 shadow-sm border-0">
          <img src="images/tea.jpg" class="card-img-top" alt="Tea">
          <div class="card-body"><h5>Tea</h5><a href="tea.php" class="btn btn-outline-dark">Shop Now</a></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-5 text-light text-center" style="background-color:#6f4e37;">
  <div class="container">
    <h2>Get 10% Off Your First Order</h2>
    <p>Subscribe for coffee & spice updates</p>
    <form class="row g-3 justify-content-center" id="newsletterForm" onsubmit="return validateNewsletter()">
      <div class="col-auto">
        <input type="email" id="newsEmail" class="form-control" placeholder="Enter your email">
      </div>
      <div class="col-auto">
        <button type="submit" class="btn btn-light">Subscribe</button>
      </div>
    </form>
  </div>
</section>

<footer class="py-4 bg-dark text-light text-center">
  <p class="mb-0">&copy; 2026 Serandib Twist. All Rights Reserved.</p>
</footer>

<script>
function validateNewsletter() {
    var email = document.getElementById("newsEmail").value;
    if (email == "") {
        alert("Please enter your email address!");
        return false;
    }
    alert("Success! " + email + " has been subscribed. Check your inbox for the 10% discount code.");
    return true;
}
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>