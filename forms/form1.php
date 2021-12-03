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
    <link rel="stylesheet" href="../style/index.css">

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
            <a href="form1.php">JC</a>
        </div> 
    </nav>

    <main class="main">
    <form action="form2.php" method="post">
        <div class="form-title">
            <p class="display-6">Salary Calculator (Part 1)</p>
        </div>

        <div class="form-subtitle">
            <p>Employee Information</p>
        </div>

        <div class="form-row">
            <div class="form-row-child">
                <label for="inputPlaceholder4">Employee Name</label>
                <select class="form-select" aria-label="Default select example" name="displayName" id="displayName">
                    <option selected>Select Employee</option>
                    <?php while($row = $result->fetch_assoc()) { ?>
                    <option value="<?php echo $row['displayName']; ?>"><?= $row["displayName"] ?></option>
                    <?php }; ?>
                </select>
            </div>
            
            <div class="form-row-child">
                <label for="inputPlaceholder4">Month</label>
                    <select class="form-select" aria-label="Default select example" name="month" id="month">
                    <option selected disabled>Select Month</option>
                    <option value="January">January</option>
                    <option value="Febuary">Febuary</option>
                    <option value="March">March</option>
                    <option value="April">April</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="August">August</option>
                    <option value="September">September</option>
                    <option value="October">October</option>
                    <option value="November">November</option>
                    <option value="December">December</option>
                </select>
            </div>
           
        </div>
        <div class="form-row">
            <div class="form-row-child">
                <input type="submit" class="btn btn-danger form1-btn" value="Proceed">
            </div>
            <div class="form-row-child">

            </div>
        </div>
    </form>
    </main>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>