<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ckeck out</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="payment.css">
</head>

<body class="payment-page">

    <div class="container mt-5">
        <div class="form-wrapper">


<h2>Payment & Shipping Information</h2>

<form name="form1" method="post" action="create.php" onsubmit="return validatePaymentForm()">
   
<div class="form-group">
        <div class="row">
            <div class="col">
                <label for="customer_name">Full Name:</label>
                <input type="text" class="form-control" id="customer_name" name="customer_name" placeholder="Enter your full name" required>
            </div>
            <div class="col">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="john@example.com" required>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="phone">Phone Number:</label>
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="+123456789" required>
            </div>
            <div class="col">
                <label for="street">Street Address:</label>
                <input type="text" class="form-control" id="street" name="street" placeholder="123 Main St" required>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="city">City:</label>
                <input type="text" class="form-control" id="city" name="city" required>
            </div>
            <div class="col">
                <label for="postal_code">Postal Code:</label>
                <input type="text" class="form-control" id="postal_code" name="postal_code" required>
            </div>
            <div class="col">
                <label for="country">Country:</label>
                <select class="form-control" id="country" name="country" required>
                    <option value="FIN">Finland</option>
        <option value="SW">Sweden</option>
        <option value="Fr">France</option>
        <option value="En">England</option>
                </select>
            </div>
        </div>
    </div>

    <div class="form-group mt-3">
    <div class="row">
        <div class="col-md-6">
            <label for="card_num">Card Number:</label>
            <input type="text" class="form-control" id="card_num" pattern="\d{16}" placeholder="16 digits" required>
        </div>
        <div class="col-md-3">
            <label for="expiry">Expiry (MM/YY):</label>
            <input type="text" class="form-control" id="expiry" pattern="(0[1-9]|1[0-2])\/[0-9]{2}" placeholder="MM/YY" required>
        </div>
        <div class="col-md-3">
            <label for="cvv">CVV:</label>
            <input type="password" class="form-control" id="cvv" pattern="\d{3,4}" required>
        </div>
    </div>
</div>

    <br>
    <button type="submit" class="btn btn-primary" name="submit">Complete Payment</button>
</form>
</div> </div> <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="script.js"></script>
</body>
</html>