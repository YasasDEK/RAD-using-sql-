<?php 
 $nic = filter_input(INPUT_POST, 'nic');
 $password = filter_input(INPUT_POST, 'password');

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

else{
    
$sql = "SELECT nic, first_name, last_name , gender , dob , address , mobile , land , email , license  FROM driver where $nic='nic'";
$result = $conn->query($sql);

    $result = $conn->query($sql);
    echo $row["nic"]

    $conn->close();
        
}
?>