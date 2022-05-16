<form action="action.php" method="post">
 <p>Votre nom : <input type="text" name="nom" /></p>
 <p>Votre âge : <input type="text" name="age" /></p>
 <p><input type="submit" value="OK"></p>
</form>




<?php
$servername = "localhost";
$username = "nom";
$dbname = "raptors"
$password = "age";

// Create connection
$conn = new mysqli($servername, $dbname, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>