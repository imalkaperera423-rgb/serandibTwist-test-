<?php 

include 'db.php'; 


$sql = "SELECT * FROM products WHERE category = 'Tea'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Pure Ceylon Tea - Serandib Twist</title>
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
    <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="Logo" height="180"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" data-bs-toggle="dropdown">Shop</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="srilankanspices.php">Sri Lankan Spices</a></li>
            <li><a class="dropdown-item" href="cupcakes.php">Cupcakes</a></li>
            <li><a class="dropdown-item" href="coffee.php">Coffee & Beverages</a></li>
            <li><a class="dropdown-item active" href="tea.php">Tea</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link" href="bestsellers.php">Best Sellers</a></li>
        <li class="nav-item"><a class="nav-link" href="ourstory.php">Our Story</a></li>
        <li class="nav-item"><a class="nav-link text-warning fw-bold" href="admin.php">Admin Panel</a></li>
      </ul>
    </div>
  </div>
</nav>

<section class="py-5">
  <div class="container">
    <h1 class="text-center mb-5 fw-bold">Pure Ceylon Tea Collection</h1>
    <div class="row g-4">

      <?php
      
      if ($result && $result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
              ?>
              <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100">
                  <img src="images/<?php echo $row['image']; ?>" class="card-img-top" alt="<?php echo $row['name']; ?>">
                  <div class="card-body text-center d-flex flex-column">
                    <h5 class="fw-bold"><?php echo $row['name']; ?></h5>
                    <p class="text-muted small"><?php echo $row['description']; ?></p>
                    <p class="fw-bold h5 mt-auto">$ <?php echo number_format($row['price'], 2); ?></p>
                    <button class="btn btn-outline-dark mt-3" onclick="teaOrder('<?php echo $row['name']; ?>')">Order Now</button>
                  </div>
                </div>
              </div>
              <?php
          }
      } else {
          echo "<div class='col-12'><p class='alert alert-light text-center'>Our premium teas are being restocked. Please check back soon!</p></div>";
      }
      ?>

    </div>
  </div>
</section>

<footer class="py-4 bg-dark text-light text-center">
  <p class="mb-0">&copy; 2026 Serandib Twist. All Rights Reserved.</p>
</footer>

<script>
function teaOrder(teaName) {
    alert("Excellent choice! The aroma of " + teaName + " is wonderful. Your order has been noted.");
}
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>