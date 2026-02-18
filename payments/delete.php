<?php
include 'db.php';
$a = $_GET['id'];
$result = mysqli_query($conn,"SELECT * FROM payments WHERE id= '$a'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Delete payment Data</title>
</head>
<body>
<form method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
Customer Name: <br>
    <input type="text" name="customer_name" value="<?php echo htmlspecialchars($row['customer_name']); ?>" readonly>
    <br>
    Email:<br>
    <input type="text" name="email" value="<?php echo htmlspecialchars($row['email']); ?>" readonly>
    <br>
    City:<br>
    <input type="text" name="city" value="<?php echo htmlspecialchars($row['city']); ?>" readonly>
    <br>
    Postal Code:<br>
    <input type="text" name="postal_code" value="<?php echo htmlspecialchars($row['postal_code']); ?>" readonly>
    <br><br>


<input type="submit" name="submit" value="Delete" >
</form>

<?php 
if($_POST['submit']){
    
    $fname = $_POST['fname'];
    $query = mysqli_query($conn,"DELETE FROM studentsinfo where id='$a'");
    if($query){
        echo "Record Deleted with id: $a <br>";
        echo "<a href='update.php'> Check your updated List </a>";
        // if you want to redirect to update page after updating
        //header("location: update.php");
    }
    else { echo "Record Not Deleted";}
    }
$conn->close();
?>
</body>
</html>