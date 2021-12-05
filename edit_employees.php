<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "voguedb";
$msg = '';
$id = '';

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "SELECT * FROM employees";
$result = $conn->query($sql);


// $name = '';
// $salary = '';
// $employedAt = '';
// $displayName="";
// $salary="";
// $employedAt="";
// $conn->close();
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Adamina&family=Libre+Franklin&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/edit_employees.css">
    <title>Document</title>
</head>


<body>
    <div class="ads">

    </div>

    <nav class="navbar shadow">
        <div class="navbar-logo">
            <p>Vague</p>
        </div>
        <div class="navbar-links">
        <a href="about_us.php">About us</a>
        <a href="home.php">Salary Calculator</a>
                <a href="employees.php" style="color:red">Employees</a>
        </div> 
    </nav>

    <?php
       if(isset($_GET['id'])) {
        $id=$_GET['id'];
        $select=mysqli_query($conn,"SELECT * FROM employees WHERE id=$id");
        $row=mysqli_fetch_assoc($select);
        $id = $row['id'];
        $displayName=$row['displayName'];
        $salary=$row['salary'];
        $employedAt=$row['employedAt'];
    }

    
    ?>

    <form action="update.php" method="POST">
  
        <div class="form-group shadow">
                <div class="input-fields">
                <div class="edit-header">
                <p style="color: white;"> Update Employee's Data </p>
                </div>
                
                    <p style="padding-top: 3%;"> ID <input type="text" class="form-control shadow "  name="id" value="<?php echo $id; ?>"> </p>
                    <p> Name <input type="text" class="form-control shadow"  name="displayName" value="<?php echo $displayName; ?>"> </p>
                    <p> Salary <input type="text" class="form-control shadow"  name="salary" value="<?php echo $salary; ?>"> </p>
                    <p> Date of Employment <input type="text" class="form-control shadow" name="employedAt" value="<?php echo $employedAt; ?>"> </p>
                </div>
                

                <div class="buttons">
                    <a href="employees.php" class="">
                    <button type="button" class="btn btn-dark return" p style="font-size: 25px"> Return </button>
                    </a>
                    <input type="submit" class="btn btn-dark" p style="font-size: 25px" name="submit">
                </div>
        </div>
        
    </form>
  
   
    
</body>
</html>


        
                    


