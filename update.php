<?php
    session_start();
    include "edit_employees.php";
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "vogueDB";
    $msg = "";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password,$dbname);
   
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    echo "Connected successfully";

     
     if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $displayName = $_POST['displayName'];
        $salary = $_POST['salary'];
        $employedAt = $_POST['employedAt'];
        $query = "UPDATE employees SET id='$_POST[id]', displayName='$_POST[displayName]', salary='$_POST[salary]', employedAt='$_POST[employedAt]' WHERE id='$_POST[id]'";
        $query_run = mysqli_query($conn, $query);
    
        if ($query_run) {
            $_SESSION['updateStatus']="Data was updated successfully";
            $_SESSION['updateStatus_Style']="success";
            header('Location: employees.php');
        } else {
            $_SESSION['updateStatus']="Update Failed";
            $_SESSION['updateStatus_Style']="danger";
        }
    }

     
?>