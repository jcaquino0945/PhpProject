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


if(isset($_POST['submit'])){

    if(!empty($_POST['displayName']) && !empty($_POST['salary'])){
        $displayName = $_POST['displayName'] ;
        $salary = $_POST['salary'] ;
       

        $query  = "INSERT INTO employees(displayName,salary) VALUES('$displayName', '$salary')" ;
    
        $run = mysqli_query($conn, $query) ;

        if ($run){
            echo 'Form submitted!';
            header('Location: employees.php');
        }else{
            echo 'Unable to submit form';
      
        }
    }else{
        echo 'All fields are required!';
    }

}
?>