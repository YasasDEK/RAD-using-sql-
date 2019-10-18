<?php
$nic = filter_input(INPUT_POST, 'nic');
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "details";

// Create connection
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
// Check connection
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
// sql to delete a record
$sql = "DELETE FROM driver WHERE nic='$nic'";
}
if ($conn->query($sql)){
echo "record deleted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
?>

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
