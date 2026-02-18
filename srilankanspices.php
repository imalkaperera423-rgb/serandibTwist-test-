<?php 

include 'db.php'; 


$sql = "SELECT * FROM products WHERE category = 'Spices'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Sri Lankan Spices - Serandib Twist</title>
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
    height: 250px;
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
            <li><a class="dropdown-item active" href="srilankanspices.php">Sri Lankan Spices</a></li>
            <li><a class="dropdown-item" href="cupcakes.php">Cupcakes</a></li>
            <li><a class="dropdown-item" href="coffee.php">Coffee & Beverages</a></li>
            <li><a class="dropdown-item" href="tea.php">Tea</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link" href="bestsellers.php">Best Sellers</a></li>
        <li class="nav-item"><a class="nav-link" href="ourstory.php">Our Story</a></li>
        <li class="nav-item"><a class="nav-link text-warning fw-bold" href="admin.php">Admin Panel</a></li>
      </ul>
    </div>
  </div>
</nav>

<section class="py-5" style="background-color: #fdfaf5;">
  <div class="container">
    <h1 class="text-center mb-2" style="color: #3d2b1f; font-family: 'Playfair Display', serif;">Serandib Twist Spices</h1>
    <p class="text-center mb-5 text-muted">Launched January 20, 2026 | 100% Natural & Fresh from Sri Lanka</p>
    
    <div class="row g-4 justify-content-center">
      
      <?php
      if ($result && $result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
              ?>
              <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                  <img src="images/<?php echo $row['image']; ?>" class="card-img-top" alt="<?php echo $row['name']; ?>">
                  <div class="card-body text-center p-4 d-flex flex-column">
                    <h3 class="card-title" style="color: #6f4e37;"><?php echo $row['name']; ?></h3>
                    <p class="card-text text-muted"><?php echo $row['description']; ?></p>
                    <p class="fw-bold h5 mb-3">$ <?php echo number_format($row['price'], 2); ?></p>
                    <button class="btn btn-outline-dark px-4 rounded-pill mt-auto" onclick="spiceAlert('<?php echo $row['name']; ?>')">Explore Spice</button>
                  </div>
                </div>
              </div>
              <?php
          }
      } else {
          echo "<p class='text-center'>No spices found in the database. Add some via Admin Panel!</p>";
      }
      ?>

    </div>
  </div>
</section>

<footer class="py-4 bg-dark text-light text-center">
  <p class="mb-0">&copy; 2026 Serandib Twist. All Rights Reserved.</p>
</footer>

<script>
function spiceAlert(name) {
    alert("You are viewing the details for " + name + ". Sourced 100% naturally from Ceylon spice gardens.");
}
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>