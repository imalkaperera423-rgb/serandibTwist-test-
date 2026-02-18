<?php
session_start();

if (!isset($_SESSION['loggedin'])) {
    header("Location: login.php");
    exit;
}

include 'db.php';

// Product add.
if (isset($_POST['add_product'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $price = $_POST['price'];
    $category = $_POST['category'];
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $image = mysqli_real_escape_string($conn, $_POST['image']); 

    $sql = "INSERT INTO products (name, price, category, description, image) VALUES ('$name', '$price', '$category', '$description', '$image')";
    
    if ($conn->query($sql)) {
        echo "<script>alert('Product Added Successfully!'); window.location='admin.php';</script>";
    }
}

// Product delete.
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("DELETE FROM products WHERE id=$id");
    header("Location: admin.php");
    exit;
}

$result = $conn->query("SELECT * FROM products ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Admin Panel - Serandib Twist</title>
</head>
<body class="bg-light">

<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-dark">Admin Product Manager</h2>
        <div>
            <a href="index.php" class="btn btn-secondary me-2">View Site</a>
            <a href="logout.php" class="btn btn-danger">Logout</a>
        </div>
    </div>

    <div class="card shadow-sm mb-5 border-0">
        <div class="card-body p-4">
            <h5 class="card-title mb-4">Add New Product</h5>
            <form method="POST" class="row g-3">
                <div class="col-md-4">
                    <label class="form-label">Product Name</label>
                    <input type="text" name="name" class="form-control" placeholder="e.g. Ceylon Cinnamon" required>
                </div>
                <div class="col-md-2">
                    <label class="form-label">Price ($)</label>
                    <input type="number" step="0.01" name="price" class="form-control" placeholder="0.00" required>
                </div>
                <div class="col-md-3">
                    <label class="form-label">Category</label>
                    <select name="category" class="form-select">
                        <option value="Coffee">Coffee</option>
                        <option value="Tea">Tea</option>
                        <option value="Cupcake">Cupcake</option>
                        <option value="Spices">Spices</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="form-label">Image Filename</label>
                    <input type="text" name="image" class="form-control" placeholder="e.g. cin.jpg" required>
                </div>
                <div class="col-12">
                    <label class="form-label">Description</label>
                    <textarea name="description" class="form-control" rows="2" placeholder="Brief details about the product"></textarea>
                </div>
                <div class="col-12 text-end">
                    <button type="submit" name="add_product" class="btn btn-success px-5">Add Product</button>
                </div>
            </form>
        </div>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body p-4">
            <h5 class="card-title mb-4 text-primary">Current Inventory</h5>
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Image</th>
                            <th>ID</th>
                            <th>Product Name</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td>
                                <img src="images/<?php echo $row['image']; ?>" width="50" height="50" style="object-fit: cover;" class="rounded border">
                            </td>
                            <td><?php echo $row['id']; ?></td>
                            <td class="fw-bold"><?php echo $row['name']; ?></td>
                            <td><span class="badge bg-info text-dark"><?php echo $row['category']; ?></span></td>
                            <td>$<?php echo number_format($row['price'], 2); ?></td>
                            <td class="text-center">
                                <a href="edit_product.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm me-1">Edit</a>
                                <a href="admin.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this product?')">Delete</a>
                            </td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>