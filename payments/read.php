<?php
include 'db.php'; 
$sql = "SELECT * FROM payments";
$result = $conn->query($sql);

if($result->num_rows > 0) {
    echo "<h2>Payment Records</h2>";
    echo "<table border='1' cellpadding='10' style='border-collapse: collapse; width: 100%; font-family: Arial, sans-serif;'>";
    echo "<tr style='background-color: #6f4e37; color: white;'>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Street</th>
            <th>City</th>
            <th>Country</th>
            <th>Card Number</th>
            <th>Expiry</th>
          </tr>";

    while($row = $result->fetch_assoc()){
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . ($row["customer_name"]) . "</td>";
        echo "<td>" . ($row["email"]) . "</td>";
        echo "<td>" . ($row["phone"]) . "</td>";
        echo "<td>" . ($row["street"]) . "</td>";
        echo "<td>" . ($row["city"]) . "</td>";
        echo "<td>" . ($row["country"]) . "</td>";
        
        // Show only the last 4 digits of the card for security
      $masked_card = "**** **** **** " . substr($row["card_num"], -4);
        echo "<td>" . $masked_card . "</td>";
        
        echo "<td>" . ($row["expiry"]) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} 
else {
    echo "No payment records found";
}

$conn->close();
?>