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
$pagibig = 100;

$workingHoursMinusHolidays = $workingHours - (($holidayRegularDays * 8) + ($holidaySpecialDays * 8));
$workingHoursMinusHolidaysPay = $salaryPerHour * $workingHoursMinusHolidays;

$regularHolidayPay = ($salaryPerHour * ($holidayRegularDays * 8)) * 2;
$specialHolidayPay = ($salaryPerHour * ($holidaySpecialDays * 8)) * 1.3;
$overtimeNormalPay =  $salaryPerHour * ($overtimeNormalHours * 1.25);
$overtimeSpecialPay =  $salaryPerHour * ($overtimeSpecialHours * 1.3);
// 168 - ((8) + (0))
// 168 - 8 - 8
// 152

$payAfterAdditions = $workingHoursMinusHolidaysPay + $regularHolidayPay + $specialHolidayPay + $overtimeNormalPay + $overtimeSpecialPay + $deminimis;

// echo $payAfterAdditions;

// Philhealth
if ($basePay <= 10000) {
    $philhealth = 175;
} else if ($basePay > 10000 && $basePay <= 69999.99) {
    $philhealth = $basePay * 0.0175;
} else if ($basePay > 70000) {
    $philhealth = 1225;
}



// SSS
if ($basePay <= 3250) {
    $sss = 135;
} else if ($basePay > 3250 && $basePay <= 3749.99){
    $sss = 157.50;
} else if ($basePay > 3750 && $basePay <= 4249.99){
    $sss = 180;
} else if ($basePay > 4250 && $basePay <= 4749.99){
    $sss = 202.50;
} else if ($basePay > 4800 && $basePay <= 5249.99){
    $sss = 225;
} else if ($basePay > 5250 && $basePay <= 5749.99){
    $sss = 247.50;
} else if ($basePay > 5750 && $basePay <= 6249.99){
    $sss = 270;
} else if ($basePay > 6250 && $basePay <= 6749.99){
    $sss = 292.50;
} else if ($basePay > 6750 && $basePay <= 7249.99){
    $sss = 315;
} else if ($basePay > 7250 && $basePay <= 7749.99){
    $sss = 337.50;
} else if ($basePay > 7750 && $basePay <= 8249.99){
    $sss = 360;
} else if ($basePay > 8250 && $basePay <= 8749.99){
    $sss = 382.50;
} else if ($basePay > 8750 && $basePay <= 9249.99){
    $sss = 405;
} else if ($basePay > 9250 && $basePay <= 9749.99){
    $sss = 427.50;
} else if ($basePay > 9750 && $basePay <= 10249.99){
    $sss = 450;
} else if ($basePay > 10250 && $basePay <= 10749.99){
    $sss = 472.50;
} else if ($basePay > 10750 && $basePay <= 11249.99){
    $sss = 495;
} else if ($basePay > 11250 && $basePay <= 11749.99){
    $sss = 517.50;
} else if ($basePay > 11750 && $basePay <= 12249.99){
    $sss = 540;
} else if ($basePay > 12550 && $basePay <= 12749.99){
    $sss = 562.50;
} else if ($basePay > 12750 && $basePay <= 13249.99){
    $sss = 585;
} else if ($basePay > 13250 && $basePay <= 13749.99){
    $sss = 607.50;
} else if ($basePay > 13750 && $basePay <= 14249.99){
    $sss = 630;
} else if ($basePay > 14250 && $basePay <= 14749.99){
    $sss = 652.50;
} else if ($basePay > 14750 && $basePay <= 15249.99){
    $sss = 675;
} else if ($basePay > 15250 && $basePay <= 15749.99){
    $sss = 697.50;
} else if ($basePay > 15750 && $basePay <= 16249.99){
    $sss = 720;
} else if ($basePay > 16250 && $basePay <= 16749.99){
    $sss = 742.50;
} else if ($basePay > 16750 && $basePay <= 17249.99){
    $sss = 765;
} else if ($basePay > 17250 && $basePay <= 17749.99){
    $sss = 787.50;
} else if ($basePay > 17750 && $basePay <= 18249.99){
    $sss = 810;
} else if ($basePay > 18250 && $basePay <= 18749.99){
    $sss = 832.50;
} else if ($basePay > 18750 && $basePay <= 19249.99){
    $sss = 855;
} else if ($basePay > 19250 && $basePay <= 19749.99){
    $sss = 877.50;
} else if ($basePay > 19750 && $basePay <= 20249.99){
    $sss = 900;
} else if ($basePay > 20250 && $basePay <= 20749.99){
    $sss = 922.50;
} else if ($basePay > 20750 && $basePay <= 21249.99){
    $sss = 945;
} else if ($basePay > 21250 && $basePay <= 21749.99){
    $sss = 967.50;
} else if ($basePay > 21750 && $basePay <= 22249.99){
    $sss = 990;
} else if ($basePay > 22250 && $basePay <= 22749.99){
    $sss = 1012.50;
} else if ($basePay > 22750 && $basePay <= 23249.99){
    $sss = 1035;
} else if ($basePay > 23250 && $basePay <= 23749.99){
    $sss = 1057.50;
} else if ($basePay > 23750 && $basePay <= 24249.99){
    $sss = 1080;
} else if ($basePay > 23250 && $basePay <= 23749.99){
    $sss = 1102.50;
} else if ($basePay > 24750){
    $sss = 1125;
} 

// absences 
$totalAbsences = ($absences * 8) * $salaryPerHour;

// Total deductions 
$totalDeductions = $sss + $philhealth + $totalAbsences + $pagibig;

// Taxable Salary
$taxableSalary = $payAfterAdditions - $totalDeductions;

$temp = $payAfterAdditions - $workingHoursMinusHolidaysPay;


$finalTax = 0;
// $additionalTax
if ($taxableSalary < 20833.33){
    $additionalTax = $taxableSalary;
    $finalTax = $additionalTax;
} else if ($taxableSalary >= 20833.34 && $taxableSalary <= 33333.33) {
    $additionalTax= $taxableSalary - 20833.34 * 0.2;
    $finalTax = $additionalTax;
} else if ($taxableSalary >= 33333.34 && $taxableSalary <= 66666.67) {
    $additionalTax= $taxableSalary - 33333.34 * 0.25;
    $finalTax = 2500 + $additionalTax;
} else if ($taxableSalary >= 66666.68 && $taxableSalary <= 166666.67) {
    $additionalTax= $taxableSalary - 66666.68 * 0.3;
    $finalTax = 10833.33 + $additionalTax;
} else if ($taxableSalary >= 166666.68) {
    $additionalTax= $taxableSalary - 166666.68 * 0.32;
    $finalTax = 40833.33 + $additionalTax;
} 
 

// if month == 'December' && basepay > 90000 {
//     decsalary = final tax + base pay
// }

// echo $specialHolidayPay;     
// echo $regularHolidayPay   ;   
// echo $overtimeNormalPay ;    
// echo $overtimeSpecialPay ;   

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
        <a href="form1.php" style="color:red">Salary Calculator</a>
            <a href="../employees.php">Employees</a>
            <a href="../about_us.php">About us</a>
        </div> 
    </nav>

    <main class="main" >
        <div class="form-title">
            <p class="display-6">Salary breakdown</p>
        </div>

        <div class="mt-5 p-5 rounded border border-dark w-100">
            <div class="">
                <p>Salary information for the month of: <?php echo $_POST["month"]; ?></p>
                <p>Employee Name: <?php echo $_POST["displayName"]; ?></p>
                <p>Base pay: <?php echo number_format($basePay, 2) ?></p>
            </div>
            <hr>
            <div class="mt-5">
                <p class="text-uppercase mb-4 fw-bold">Additional Pay</p>
                <div class="w-100 d-flex">
                    <div class="w-100">
                        <p class="my-2 fw-bold">Overtime</p>
                        <p class="my-2">Normal: Php <?php echo number_format($overtimeNormalPay, 2); ?></p>
                        <p class="my-2">Rest Day: Php <?php echo number_format($overtimeSpecialPay, 2); ?></p>
                        <p class="my-4 fw-bold">Total: Php <?php echo number_format($overtimeNormalPay + $overtimeSpecialPay, 2);?></p>
                    </div>
                    <div class="w-100">
                        <p class="my-2 fw-bold">Holidays</p>
                        <p class="my-2">Regular: Php <?php echo number_format($regularHolidayPay, 2); ?></p>
                        <p class="my-2">Special: Php <?php echo number_format($specialHolidayPay, 2); ?></p>
                        <p class="my-4 fw-bold">Total: Php <?php echo number_format($regularHolidayPay + $specialHolidayPay, 2);?></p>
                    </div>
                    <div class="w-100">
                        <p class="my-2 fw-bold">De Minimis</p>
                        <p class="my-2">Rice: Php 2000.00</p>
                        <p class="my-2">Medical: Php 550.00</p>
                        <p class="my-2">Dependent: Php 250.00</p>
                        <p class="my-2">Laundry: Php 300.00</p>
                        <p class="my-4 fw-bold">Total: Php 3,100.00</p>
                    </div>
                </div>
                <hr>
                <div class="w-100">
                    <p class="text-uppercase mb-4 fw-bold">Deductions</p>
                    <p class="my-2">Absences: Php <?php echo number_format($totalAbsences, 2); ?></p>
                    <p class="my-2">Philhealth: Php <?php echo number_format($philhealth, 2); ?></p>
                    <p class="my-2">SSS: Php <?php echo number_format($sss, 2); ?></p>
                    <p class="my-2">Pag-ibig: Php <?php echo number_format($pagibig, 2); ?></p>
                    <p class="my-4 fw-bold">Total: Php <?php echo number_format($totalAbsences + $philhealth + $sss + $pagibig, 2);?></p>
                </div>
                <hr>
                <div>
                    <?php if ($_POST["month"] == "December"): ?>
                            <p class="text-uppercase mb-4 fw-bold">Final Computation for December</p>
                            <p class="my-2">Base Pay: Php <?php echo number_format($basePay, 2); ?></p>
                            <p class="my-2">Total Additional Pay: Php <?php echo number_format($temp, 2); ?></p>
                            <p class="my-2">Total Deductions: Php <?php echo number_format($totalDeductions, 2); ?></p>
                            <p class="my-2">Taxable Salary: Php <?php echo number_format($taxableSalary, 2); ?></p>
                            <p class="my-2">December Monthly Salary: Php <?php echo number_format($finalTax, 2); ?></p>
                            <p class="my-2">13th Month Pay: Php <?php echo number_format($basePay, 2); ?></p>
                            <p class="my-4 fw-bold">Full salary for December: <?php echo number_format($basePay + $finalTax, 2); ?></p>
                    <?php else : ?>
                        <div>
                            <p class="text-uppercase mb-4 fw-bold">Final Computation</p>
                            <p class="my-2">Base Pay: Php <?php echo number_format($basePay, 2); ?></p>
                            <p class="my-2">Total Additional Pay: Php <?php echo number_format($temp, 2); ?></p>
                            <p class="my-2">Total Deductions: Php <?php echo number_format($totalDeductions, 2); ?></p>
                            <p class="my-2">Taxable Salary: Php <?php echo number_format($taxableSalary, 2); ?></p>
                            <p class="my-4 fw-bold">Final Salary: Php <?php echo number_format($finalTax, 2); ?></p>
                              
                        </div>
                    <?php endif ?>
                </div>
            </div>
            <!-- lalabas lang kapag december -->
            <!-- <p>13 month pay: </p>  -->
        </div>

        
    </main>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>