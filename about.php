<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>About Us - Serandib Twist</title>
    <style>
       
        .navbar-nav .dropdown-menu {
            display: block !important;
            opacity: 0;
            visibility: hidden;
            transform: translateY(-30px) scaleY(0);
            transform-origin: top;
            
            transition: all 0.9s cubic-bezier(0.23, 1, 0.32, 1); 
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

        
        .about-img {
            transition: transform 0.5s ease;
        }
        .about-img:hover {
            transform: scale(1.02);
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
        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link active" href="about.php">About Us</a></li>
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
        <li class="nav-item"><a class="nav-link text-warning fw-bold" href="login.php">Admin Panel</a></li>
      </ul>

      <form class="d-flex ms-auto" action="search.php" method="GET">
        <input class="form-control me-2" name="query" type="search" placeholder="Search for products..." required>
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="container py-5 text-center">
  <h1 class="display-4 fw-bold mb-4" style="color: #6f4e37;">The Birth of Serandib Twist</h1>
  <img src="images/about.jpg" class="img-fluid my-4 rounded shadow about-img" alt="About Us Image" style="max-width: 600px; border: 5px solid #fff;">
  
  <div class="row justify-content-center">
    <div class="col-lg-10">
      <p class="lead text-muted" style="text-align: justify; line-height: 1.9;">
        <strong>Founded on January 20, 2026</strong>, Serandib Twist was born from a singular vision to bridge the gap between the lush, sun-drenched landscapes of Sri Lanka and the discerning palates of the modern world. Our journey began with a commitment to authenticity, bringing a contemporary "twist" to the ancient spice traditions of Serandib. We specialize in the curation and marketing of premium Sri Lankan coffee, exquisite Ceylon tea, and world-class spices, ensuring that the Island Vibe is felt in every sip and every aroma.
      </p>
      <p class="lead text-muted" style="text-align: justify; line-height: 1.9;">
        At the heart of our brand is an uncompromising promise of purity. We offer 100% natural and fresh products, sourced directly from the soil where they thrive. Every item in our collection is a portrait of quality. Serandib Twist is more than a marketplace; it is an invitation to experience the spirit of the island perfected for the global kitchen.
      </p>
    </div>
  </div>

  <hr class="my-5">

  <div class="contact-info bg-light p-5 rounded shadow-sm">
    <h4 class="fw-bold mb-3" style="color: #6f4e37;">Get In Touch</h4>
    <p class="mb-1"><i class="bi bi-geo-alt"></i> Aleksanterinkatu 15, 00100 Helsinki, Finland</p>
    <p class="mb-1"><i class="bi bi-telephone"></i> Telephone: +358 9 6123 4567</p>
    <p><i class="bi bi-envelope"></i> Email: <a href="mailto:serandibtwist@hotmail.com" class="text-decoration-none" style="color: #6f4e37; font-weight: bold;">serandibtwist@hotmail.com</a></p>
  </div>
</div>

<footer class="py-4 bg-dark text-light text-center mt-5">
    <p class="mb-0">&copy; 2026 Serandib Twist. All Rights Reserved.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
