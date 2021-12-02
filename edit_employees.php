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


<form method="POST" action="">

        <!-- <?php 
          $conn = new mysqli($servername, $username, $password,$dbname); 
        
          if(isset($_POST['id'])) {
            $id = $_POST['id'];
            $query = "SELECT * FROM employees WHERE id='id' ";
            $query_run = mysqli_query($conn, $query);

            if(mysql_num_rows($query_run) > 0 ) {
              foreach($query_run as $row) {
                
                ?> -->
                    <div class="form-group">
                      <label for="exampleInputEmail1"> Name </label>
                      <input type="text" class="form-control" id="displayName" value="<?= $row['displayName'];?>">
                    
                    
                      <label for="exampleInputEmail1"> Salary </label>
                      <input type="text" class="form-control" id="salary" value="<?= $row['salary'];?>">
                    
                    
                      <label for="exampleInputEmail1"> Date of Employment </label>
                      <input type="text" class="form-control" id="employedAt" value="<?= $row['employedAt'];?>">
                    </div>
                <?php

        //       }
        //     }else {
        //       echo "No Record Found";
        //     }
        //   }
          
        // ?>
</form>
