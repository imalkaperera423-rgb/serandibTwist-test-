<?php
// Check if the 'submit' button in the form was clicked
if (isset($_POST['submit'])) {

    // Retrieve data from the form and store it in variables
   // 1. Retrieve the new fields from your updated form
    $customer_name = $_POST['customer_name'];
    $email         = $_POST['email'];
    $phone         = $_POST['phone'];
    $street        = $_POST['street'];
    $city          = $_POST['city'];
    $postalcode           = $_POST['postal_code'];
    $country       = $_POST['country'];

    // Include the database connection file
    include 'db.php';

    // Define an SQL query to insert data into the 'studentsinfo' table
    $sql = "INSERT INTO payments (customer_name, email, phone, street, city, postal_code, country)
            VALUES ('$customer_name', '$email', '$phone', '$street', '$city', '$postalcode', '$country')";

    // Execute the SQL query using the database connection
    if ($conn->query($sql) === TRUE) {
        // If the query was successful, display a success message
        echo "New record added";
    } else {
        // If there was an error in the query, display an error message
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
