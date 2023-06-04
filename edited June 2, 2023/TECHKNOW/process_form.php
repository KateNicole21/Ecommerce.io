<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<?php
$id = isset($_POST['id']) ? $_POST['id'] : "";
$Full_Name = isset($_POST['Full_Name']) ? $_POST['Full_Name'] : "";
$Email = isset($_POST['Email']) ? $_POST['Email'] : "";
$Contact = isset($_POST['Contact']) ? $_POST['Contact'] : "";
$Address = isset($_POST['Address']) ? $_POST['Address'] : "";
$password = isset($_POST['password']) ? $_POST['password'] : "";



// Perform SQL insertion
$sql = "INSERT INTO customers VALUES ('$id','$Full_Name', '$Email', '$Contact', '$Address', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Record inserted successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
