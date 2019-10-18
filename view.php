<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
}
</style>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "details";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT nic, first_name, last_name , gender , dob , address , mobile , land , email , license  FROM driver";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
	echo "<caption>Driver Details</caption>";
	echo "<tr><th><b> nic </b></th><th><b> First Name </b></th><th><b> Last Name </b></th><th><b> Gender </b></th><th><b> date of birth </b></th><th><b> address </b></th><th><b> mobile </b></th><th><b> land </b></th><th><b> email </b></th><th><b> license </b></th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
        echo "<tr><td>".$row["nic"]."</td><td>" .$row["first_name"]."</td><td>".$row["last_name"]."</td><td>".$row["gender"]."</td><td>".$row["dob"]."</td><td>".$row["address"]."</td><td>".$row["mobile"]."</td><td>" .$row["land"]."</td><td>".$row["email"]."</td><td>" .$row["license"]."</td></tr>";
	}
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>