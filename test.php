<?php
$servername = "localhost";
$username = "root";
$password = "test1*1";
$dbname = "stage";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO stagiare (id, nom, prenom) VALUES ('3','Ab','Cd')";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
    	echo "id: " . $row["id"]. " - Name: " . $row["nom"]. " " . $row["prenom"]. "<br>";
	}
} else {
	echo "pas de stagiares";
}
$conn->close();
?>

