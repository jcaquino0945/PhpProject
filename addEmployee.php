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

// // sql to create table
// $sql = "CREATE TABLE employees (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     displayName VARCHAR(30) NOT NULL,
//     salary FLOAT(10,2) NOT NULL,
//     employedAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//     )";

// $sql = "INSERT INTO employees (displayName, salary)
// VALUES ('Keanu Reeves', 1000000)";

// if ($conn->query($sql) === TRUE) {
//     echo " employees has been created";
//   } else {
//     echo "Error creating employee: " . $conn->error;
//   }
$sql = "SELECT * FROM employees";
$result = $conn->query($sql);

// if ($result->num_rows > 0) {
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
//     echo "id: " . $row["id"]. " - Name: " . $row["displayName"]. " " . $row["salary"]. "<br>";
//   }
// } else {
//   echo "0 results";
// }
$conn->close();

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Adamina&family=Libre+Franklin&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/index.css">

    <title>Salary Calculator</title>
</head>

<body>
    <div class="ads">

    </div>

    <nav class="navbar shadow">
        <div class="navbar-logo">
            <p>Vague</p>
        </div>
        <div class="navbar-links">
        <a href="home.php" style="color:red">Salary Calculator</a>
            <a href="employees.php">Employees</a>
            <a href="about_us.php">About us</a>

        </div> 
    </nav>

    <main class="main">
    <form action="add.php" method="post">
        <div class="form-title">
            <p class="display-6">Title Calculator</p>
        </div>

        <div class="form-subtitle">
            <p>Employee Information</p>
        </div>

        </div>
        <div class="form-row">
            <div class="form-row-child">
                <label for="inputPlaceholder3">Employee Name</label>
                <input type="Placeholder" class="form-control" id="displayName" placeholder="John Dela Cruz" name="displayName">
            </div>
            <div class="form-row-child">
                <label for="inputPlaceholder3">Salary per hour</label>
                <input type="Placeholder" class="form-control" id="salary" placeholder="300" name="salary">
            </div>
            <!-- <div class="form-row-child">
               
                    <input type="submit" class="btn btn-danger my-btn">
               
            </div> -->
        </div>
        <input type="submit" class="btn btn-danger my-btn-2" name="submit">
        </form>
    </main>

     

       

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>