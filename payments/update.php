
<?php
require 'db.php'; 
$sql = "select * from payments";
$result = $conn->query($sql);?>
<html>
<head>
    <style>
        a.top {
            margin-right:20px;
            font-size:20px;
            color:red;
        }
        </style>
<title> Update payment Data</title>
</head>
<body>
    <a href="form.php" class="top">Create Data </a>
    <a href="update.php" class="top">Update/Delete Data </a>
    <a href="read.php" class="top">Retrieve Data </a>
<hr>
<table border="1" cellpadding="5">
<tr>
<th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Street</th>
    <th>City</th>
    <th>Postal Code</th> <th>Country</th>
    <th>Edit</th>
    <th>Delete</th>
</tr>

<?php 
if($result ->num_rows > 0) {
    while($row = $result ->fetch_assoc()){
?>
<tr>
<td><?php echo $row["id"]; ?></td>
<td><?php echo $row["customer_name"]; ?></td>
<td><?php echo $row["email"]; ?></td>
<td><?php echo $row["phone"]; ?></td>
<td><?php echo $row["street"]; ?></td>
<td><?php echo $row["city"]; ?></td>
<td><?php echo $row["postal_code"]; ?></td>
<td><?php echo $row["country"]; ?></td>
<td><a href="updatesingle.php?id=<?php echo $row['id']; ?>">Update</a></td>
<td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
</tr>

<?php 
}
}
else
{
    echo "no payment records found";
}
$conn->close();
?>
</table>
</body>
</html>