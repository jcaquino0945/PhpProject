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

$holidayRegularDays = $_POST["holidayReg"];
$holidaySpecialDays = $_POST["holidaySpec"];
$overtimeNormalHours = $_POST["overtimeHoursNormal"];
$overtimeSpecialHours = $_POST["overtimeHoursSpecial"];
$absences = $_POST["absences"];
$basePay = $_POST["basePay"];
$workingHours = $_POST["workingHours"];
$salaryPerHour = $_POST["salaryPerHour"];
$payFor13thMonth = $_POST["payFor13thMonth"];
$deminimis = 3100;

$workingHoursMinusHolidays = $workingHours - (($holidayRegularDays * 8) + ($holidaySpecialDays * 8));
$workingHoursMinusHolidaysPay = $salaryPerHour * $workingHoursMinusHolidays;

$regularHolidayPay = ($salaryPerHour * ($holidayRegularDays * 8)) * 2;
$specialHolidayPay = ($salaryPerHour * ($holidaySpecialDays * 8)) * 1.3;
$overtimeNormalPay =  $salaryPerHour * ($overtimeNormalHours * 1.25);
$overtimeSpecialPay =  $salaryPerHour * ($overtimeSpecialHours * 1.3);
// 168 - ((8) + (0))
// 168 - 8 - 8
// 152

$payAfterAdditions = $workingHoursMinusHolidaysPay + $regularHolidayPay + $specialHolidayPay + $overtimeNormalPay + $overtimeSpecialPay + $payFor13thMonth + $deminimis;

echo $payAfterAdditions;



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
        <div class="form-title">
            <p class="display-6">Employee Salary</p>
        </div>

        <div class="form-subtitle">
            <p>Pay after additions: Php <?php echo $basePay; ?></p>
        </div>

        
    </main>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>