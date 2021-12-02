<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "voguedb";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "SELECT * FROM employees";
$result = $conn->query($sql);
$conn->close();
?>




        
                    <div class="form-group">
                      <label for="exampleInputEmail1"> Name </label>
                      <input type="text" class="form-control" id="displayName" value="">
                    
                    
                      <label for="exampleInputEmail1"> Salary </label>
                      <input type="text" class="form-control" id="salary" value="">
                    
                    
                      <label for="exampleInputEmail1"> Date of Employment </label>
                      <input type="text" class="form-control" id="employedAt" value="">
                    </div>


