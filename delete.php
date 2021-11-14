<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vogueDB";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";
$id = $_GET['id']; // get id through query string

$del = mysqli_query($conn,"delete from employees where id = '$id'"); // delete query

if($del)
{
    mysqli_close($conn); // Close connection
    header("location:employees.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>