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
$conn->query('INSERT INTO stagiare (nom, prenom) VALUES ("X" , "Y")');
$conn->close();
?>
