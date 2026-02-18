<?php
session_start();
require_once 'dbconnection.php'; // Make sure $conn is a valid mysqli connection

$submitted = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Escape data to prevent SQL injection
    $name     = $conn->real_escape_string($_POST['name']);
    $email    = $conn->real_escape_string($_POST['email']);
    $phone    = $conn->real_escape_string($_POST['phone']);
    $address  = $conn->real_escape_string($_POST['address']);
    $delivery = $conn->real_escape_string($_POST['delivery']);
    $notes    = $conn->real_escape_string($_POST['notes']);

    // Use dummy password because table requires a password
    $dummyPassword = password_hash("customer123", PASSWORD_DEFAULT);

    // Insert into users table
    $sql = "INSERT INTO users (name, email, phone, address, role, password) 
            VALUES ('$name', '$email', '$phone', '$address', 'customer', '$dummyPassword')";

    if ($conn->query($sql) === TRUE) {
        $submitted = true; // trigger popup
    } else {
        die("Error inserting data: " . $conn->error);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Customer Details - Serandib Twist</title>
<style>
body { font-family: Arial; background: #fef9f4; color: #3e2f2f; display: flex; justify-content: center; padding: 40px; }
form { background: #fff; padding: 30px; border-radius: 10px; width: 400px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); }
h2 { text-align: center; color: #6f4e37; }
input, select, textarea, button { width: 100%; padding: 10px; margin: 8px 0; border-radius: 5px; border: 1px solid #ccc; font-size: 14px; }
button { background-color: #6f4e37; color: white; border: none; cursor: pointer; font-weight: bold; }
button:hover { background-color: #563d2e; }
#popup { display: none; position: fixed; top: 0; left:0; right:0; bottom:0; background: rgba(0,0,0,0.5); justify-content: center; align-items: center; }
#popupContent { background: #fff; padding: 20px 30px; border-radius: 10px; text-align: center; width: 300px; box-shadow: 0 4px 10px rgba(0,0,0,0.2); }
#popupContent button { margin-top: 15px; }
</style>
</head>
<body>

<form id="customerForm" method="POST" onsubmit="return validateForm()">
    <h2>Customer Details</h2>
    <label>Name</label>
    <input type="text" name="name" id="name" required placeholder="Full Name">

    <label>Email</label>
    <input type="email" name="email" id="email" required placeholder="you@example.com">

    <label>Phone</label>
    <input type="text" name="phone" id="phone" required placeholder="+358 400 000000">

    <label>Address</label>
    <textarea name="address" id="address" rows="3" placeholder="Street, City, Zip"></textarea>

    <label>Delivery Method</label>
    <select name="delivery" id="delivery" required>
        <option value="">Select...</option>
        <option value="pickup">Pick Up</option>
        <option value="delivery">Delivery</option>
    </select>

    <label>Notes (Optional)</label>
    <textarea name="notes" id="notes" rows="2" placeholder="Any extra details"></textarea>

    <button type="submit">Submit</button>
</form>

<div id="popup">
    <div id="popupContent">
        <h3>Thank You!</h3>
        <p>Your customer details have been submitted successfully.</p>
        <button onclick="closePopup()">Close</button>
    </div>
</div>

<script>
function validateForm() {
    let name = document.getElementById("name").value.trim();
    let email = document.getElementById("email").value.trim();
    let phone = document.getElementById("phone").value.trim();
    let delivery = document.getElementById("delivery").value;

    if(name.length < 3){ alert("Name must be at least 3 characters"); return false; }
    let emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    if(!email.match(emailPattern)){ alert("Please enter a valid email"); return false; }
    let phonePattern = /^[0-9+]{8,15}$/;
    if(!phone.match(phonePattern)){ alert("Enter valid phone number"); return false; }
    if(delivery === ""){ alert("Select delivery method"); return false; }

    return true;
}

// Show popup after successful submission
<?php if($submitted): ?>
document.getElementById("popup").style.display = "flex";
<?php endif; ?>

function closePopup(){
    document.getElementById("popup").style.display = "none";
    document.getElementById("customerForm").reset();
}
</script>

</body>
</html>
