<?php
 $nic = filter_input(INPUT_POST, 'nic');
 $first_name = filter_input(INPUT_POST, 'first_name');
 $last_name = filter_input(INPUT_POST, 'last_name');
 $gender = filter_input(INPUT_POST, 'gender');
 $dob = filter_input(INPUT_POST, 'dob');
 $address = filter_input(INPUT_POST, 'address');
 $mobile = filter_input(INPUT_POST, 'mobile');
 $land = filter_input(INPUT_POST, 'land');
 $email = filter_input(INPUT_POST, 'email');
 $license = filter_input(INPUT_POST, 'license');
 $password = filter_input(INPUT_POST, 'password');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "details";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(!empty($first_name)){$sql = "UPDATE driver SET first_name='$first_name' WHERE nic='$nic'";};
if(!empty($last_name)){$sql = "UPDATE driver SET last_name='$last_name' WHERE nic='$nic'";};
if(!empty($gender)){$sql = "UPDATE driver SET gender='$gender' WHERE nic='$nic'";};
if(!empty($dob)){$sql = "UPDATE driver SET dob='$dob' WHERE nic='$nic'";};
if(!empty($address)){$sql = "UPDATE driver SET address='$address' WHERE nic='$nic'";};
if(!empty($mobile)){$sql = "UPDATE driver SET mobile='$mobile' WHERE nic='$nic'";};
if(!empty($land)){$sql = "UPDATE driver SET land='$land' WHERE nic='$nic'";};
if(!empty($email)){$sql = "UPDATE driver SET email='$email' WHERE nic='$nic'";};
if(!empty($license)){$sql = "UPDATE driver SET license='$license' WHERE nic='$nic'";};
if(!empty($password)){$sql = "UPDATE driver SET password='$password' WHERE nic='$nic'";};

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
