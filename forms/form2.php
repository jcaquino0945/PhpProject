<?php
include ('employeeClass.php');

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

// $sql = "SELECT * FROM employees";
// $result = $conn->query($sql);
// $conn->close();

$regHolidays = [0];
$specHolidays = [0];
$payFor13thMonth = 0;
$month = $_POST["month"]; //current month
$employeeName = $_POST["displayName"];

$result = mysqli_query($conn, "SELECT * FROM employees WHERE displayName='$employeeName' LIMIT 1");
$row = mysqli_fetch_assoc($result);

$displayName = $row['displayName'];
$salaryPerHour = $row['salary'];
$basePay = 0;
$workingHours = 0;


switch ($month) {
    case "January":
        $regHolidays = [0,1];
        // $basePay = $salaryPerHour * 168;
        $workingHours = 168;
        break;
    case "Febuary":
        $specHolidays = [0,1];
        // $basePay = $salaryPerHour * 152;
        $workingHours = 152;
        break;
    case "March":
        $regHolidays = [0];
        $specHolidays = [0];
        // $basePay = $salaryPerHour * 176;
        $workingHours = 176;
        break;
    case "April":
        $regHolidays = [0,1,2];
        $specHolidays = [0,1];
        // $basePay = $salaryPerHour * 176;
        $workingHours = 176;
        break;
    case "May":
        $regHolidays = [0,1];
        // $basePay = $salaryPerHour * 160;
        $workingHours = 160;
        break;
    case "June":
        $regHolidays = [0,1];
        // $basePay = $salaryPerHour * 176;
        $workingHours = 176;
        break;
    case "July":
        $regHolidays = [0];
        $specHolidays = [0];
        // $basePay = $salaryPerHour * 176;
        $workingHours = 176;
        break;
    case "August":
        $regHolidays = [0,1];
        $specHolidays = [0,1];
        // $basePay = $salaryPerHour * 168;
        $workingHours = 168;
        break;
    case "September":
        $regHolidays = [0];
        $specHolidays = [0];
        // $basePay = $salaryPerHour * 168;
        $workingHours = 168;
        break;
    case "October":
        $regHolidays = [0];
        $specHolidays = [0];
        // $basePay = $salaryPerHour * 168;
        $workingHours = 168;
        break;
    case "November":
        $regHolidays = [0,1];
        $specHolidays = [0,1];
        // $basePay = $salaryPerHour * 152;
        $workingHours = 152;
        break;
    case "December":
        $regHolidays = [0,1,2];
        $specHolidays = [0,1];
        // $basePay = $salaryPerHour * 176;
        $workingHours = 176;
        $payFor13thMonth = $salaryPerHour * 176;;
        break;
}

      $employee = new Employee($employeeName,$salaryPerHour);
      $vagueEmployee = new VagueEmployee($employeeName,$salaryPerHour,$workingHours);
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
        <a href="form1.php" style="color:red">Salary Calculator</a>
            <a href="../employees.php">Employees</a>
            <a href="../about_us.php">About us</a>
        </div> 
    </nav>

    <main class="main">
    <form action="form3.php" method="post">
        <div class="form-title">
            <p class="display-6">Salary Calculator (Part 2)</p>
        </div>

        <div class="half-form">
            <div class="half-form-left">
            <div class="half-form-subtitle">
                     <p>Holidays</p>
                </div>
                <div class="half-form-child">
                    <label for="inputPlaceholder3">Regular (Per day)</label>
                    <select class="form-select" aria-label="Default select example" name="holidayReg" id="holidayReg">
                    <?php foreach ($regHolidays as $value) { ?>
                        <option value="<?php echo $value; ?>"><?= $value ?></option>
                    <?php }; ?>
                    </select>
                </div>
                <div class="half-form-child">
                    <label for="inputPlaceholder3">Special (Per day)</label>
                    <select class="form-select" aria-label="Default select example" name="holidaySpec" id="holidaySpec">
                    <?php foreach ($specHolidays as $value) { ?>
                        <option value="<?php echo $value; ?>"><?= $value ?></option>
                    <?php }; ?>

                    </select>
                </div>
            </div>
            <div class="half-form-right">
                <div class="half-form-subtitle">
                     <p>Overtime</p>
                </div>
                <div class="half-form-child">
                    <label for="inputPlaceholder3">Normal (Per hour)</label>
                    <input type="Placeholder" class="form-control" id="overtimeHoursNormal" placeholder="Placeholder" name="overtimeHoursNormal">
                </div>
                <div class="half-form-child">
                    <label for="inputPlaceholder3">Rest Day (Per hour)</label>
                    <input type="Placeholder" class="form-control" id="overtimeHoursSpecial" placeholder="Placeholder" name="overtimeHoursSpecial">
                </div>
            </div>
        </div>
        <div class="half-form">
            <div class="half-form-left">
                <div class="half-form-subtitle">
                     <p>Absences</p>
                </div>
                <div class="half-form-child">
                    <label for="inputPlaceholder3">Day/s absent</label>
                    <input type="Placeholder" class="form-control" id="absences" placeholder="Placeholder" name="absences">
                </div>
            </div>
            <div class="half-form-right">
                <input type="Placeholder" class="form-control" id="basePay"  name="basePay" style="display: none;" value="<?php echo $vagueEmployee->getBasePay(); ?>">
                <input type="Placeholder" class="form-control" id="workingHours"  name="workingHours" style="display: none;" value="<?php echo $vagueEmployee->getWorkingHours(); ?>">
                <input type="Placeholder" class="form-control" id="salaryPerHour"  name="salaryPerHour" style="display: none;" value="<?php echo $salaryPerHour; ?>">
                <input type="Placeholder" class="form-control" id="payFor13thMonth"  name="payFor13thMonth" style="display: none;" value="<?php echo $payFor13thMonth; ?>">

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