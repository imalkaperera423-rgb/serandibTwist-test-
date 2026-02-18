<?php
include 'db.php';
$a = $_GET['id'];
$result = mysqli_query($conn,"SELECT * FROM studentsinfo WHERE id= '$a'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Customer Data</title>
</head>
<body>
<form method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
Full Name: <br>
<input type="text" name="customer_name"  value="<?php echo $row['customer_name']; ?>">
<br>
Email :<br>
<input type="text" name="email" value="<?php echo $row['email']; ?>">
<br>
Phone:<br>
<input type="text" name="phone" value="<?php echo $row['phone']; ?>">
<br>
Street address:<br>
<input type="text" name="street" value="<?php echo $row['street']; ?>">
<br>
City:<br>
<input type="text" name="city" value="<?php echo $row['city']; ?>">
<br>Postal Code:<br>
<input type="text" name="postal_code" value="<?php echo $row['postal_code']; ?>">
<br>
Country:<br>
    <select name="country">
        <option value="Fin" <?php if($row['country'] == 'Fin') echo 'selected'; ?>>Finland</option>
        <option value="Sw" <?php if($row['country'] == 'Sw') echo 'selected'; ?>>Sweden</option>
        <option value="Fr" <?php if($row['country'] == 'Fr') echo 'selected'; ?>>France</option>
        <option value="En" <?php if($row['country'] == 'En') echo 'selected'; ?>>England</option>
    </select><br><br>


<br>

<input type="submit" name="submit" value="Submit" >
</form>
<?php 
if($_POST['submit']){
    
    $name    = $_POST['customer_name'];
    $email   = $_POST['email'];
    $phone   = $_POST['phone'];
    $street  = $_POST['street'];
    $city    = $_POST['city'];
    $postal  = $_POST['postal_code'];
    $country = $_POST['country'];

    $sql = "UPDATE payments
            SET customer_name='$name', email='$email', phone='$phone', street='$street', city='$city', postal_code='$postal', country='$country' 
            WHERE id='$a'";

            $query = mysqli_query($conn, $sql);

    if($query){
        echo "payment details Modified Successfully <br>";
        echo "<a href='update.php'> Check your updated List </a>";
        // if you want to redirect to update page after updating
        //header("location: update.php");
    }
    else { echo "Record Not modified";}
    }
$conn->close();
?>
</body>
</html>