<?php
include 'dbconnection.php';

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

if(!$result){
    die("SQL ERROR: " . $conn->error);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Users</title>
    <style>
        body { font-family: Arial; padding: 40px; }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #6f4e37;
            color: white;
        }
    </style>
</head>
<body>

<h2>Registered Users</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Role</th>
    </tr>

<?php
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>
                <td>".$row['user_id']."</td>
                <td>".$row['name']."</td>
                <td>".$row['email']."</td>
                <td>".$row['phone']."</td>
                <td>".$row['address']."</td>
                <td>".$row['role']."</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='6'>No users found</td></tr>";
}
?>

</table>

</body>
</html>
