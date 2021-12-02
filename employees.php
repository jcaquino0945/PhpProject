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

// sql to create table
// $sql = "CREATE TABLE employees (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     displayName VARCHAR(30) NOT NULL,
//     salary FLOAT(10,2) NOT NULL,
//     employedAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//     )";
// $sql = "DELETE INTO employees (id, displayName, salary)
// VALUES ('1','Delica', 2000)";


// $sql = "DELETE INTO employees ( displayName, salary)
// VALUES ('0','Keanu Reeves', 1000000)";

// if ($conn->query($sql) === TRUE) {
//     echo " employees has been created";
//   } else {
//     echo "Error creating employee: " . $conn->error;
//   }



// if ($result->num_rows > 0) {
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
//     echo "id: " . $row["id"]. " - Name: " . $row["displayName"]. " " . $row["salary"]. "<br>";
//   }
// } else {
//   echo "0 results";
// }


$sql = "SELECT * FROM employees";
$result = $conn->query($sql);
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/index.css">

    <title>Hello, world!</title>
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
    <a href="index.php">Salary Calculator</a>
            <a href="employees.php" style="color:red">Employees</a>
    </div> 
</nav>

<main class="main">
<div class="form-title">
    <p class="display-6">Employee List</p>
</div>
<div class="employees">
      <table class="table table-hover">
      <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Employee Name</th>
      <th scope="col">Monthly Salary</th>
      <th scope="col">Date of Employment</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php while($row = $result->fetch_assoc()) { ?>
    <tr>
      <th scope="row"><?= $row["id"] ?></th>
      <td><?= $row["displayName"] ?></td>
      <td>Php <?= $row["salary"] ?></td>
      <td><?= $row["employedAt"] ?></td>
      <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16" style=" margin-right:4px;"><a href="delete.php?id=<?php echo $row['id']; ?>">
        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
    </a></svg>
       
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill edit-icon" viewBox="0 0 16 16" data-toggle="modal" data-target="#editEmployeeModal" >
        <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
        </svg>
    
    </td>
    </tr>
    <?php }; ?>

  </tbody>
</table>
</div>
</main>


<!-- #####Start of Edit Modal########################### -->
<div class="modal fade" id="editEmployeeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Employee List</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- #####Start of the contents of the Modal########################### -->
        
        <!-- employee_Name
        employee_Salary
        employee_dateOfEmployment -->

        <!-- if(isset($_GET['id'])){

        } -->

     


        <form method="POST" action="">

        <?php 
          $conn = new mysqli($servername, $username, $password,$dbname); 
        
          if(isset($_POST['id'])) {
            $id = $_POST['id'];
            $query = "SELECT * FROM employees WHERE id='id' ";
            $query_run = mysqli_query($conn, $query);

              foreach($query_run as $row) {
                // echo $row['displayName'];
                ?>
                    <div class="form-group">
                      <label for="exampleInputEmail1"> Name </label>
                      <input type="text" class="form-control" id="displayName" value="<?= $row['displayName'];?>">
                    
                    
                      <label for="exampleInputEmail1"> Salary </label>
                      <input type="text" class="form-control" id="salary" value="<?= $row['salary'];?>">
                    
                    
                      <label for="exampleInputEmail1"> Date of Employment </label>
                      <input type="text" class="form-control" id="employedAt" value="<?= $row['employedAt'];?>">
                    </div>
                <?php

              }
          }
          
        ?>

        
          
        </form>
        <!-- #####End of the contents of the Modal########################### -->

      </div>
      <div class="modal-footer">
        <div class="close-modal-button">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
        </div>
        <button type="button" class="btn btn-dark">Save changes</button>
      </div>

    </div>
  </div>
</div>
<!-- #####End of Edit Modal########################### -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <!-- ##### JavaScript ##### -->
      <script src="./style/index.js"></script>


</body>
</html>   