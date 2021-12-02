<?php
// $cars = array (
//     array("Volvo",22,18),
//     array("BMW",15,13),
//     array("Saab",5,2),
//     array("Land Rover",17,15)
//   );

//   for ($row = 0; $row < 4; $row++) {
//     echo "<p><b>Row number $row</b></p>";
//     echo "<ul>";
//     for ($col = 0; $col < 3; $col++) {
//       echo "<li>".$cars[$row][$col]."</li>";
//     }
//     echo "</ul>";
//   }
?>
<!doctype html>
<html lang="en">
<body>
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

    <title>Hello, world!</title>
</head>



</body>
<div class="ads">

</div>

<nav class="navbar shadow">
    <div class="navbar-logo">
        <p>Vague</p>
    </div>
    <div class="navbar-links">
    <a href="home.php">Salary Calculator</a>
            <a href="employees.php" style="color:red">Employees</a>
    </div> 
</nav>


Value 1: <?php echo $_GET["val1"]; ?><br>
Value 2: <?php echo $_GET["val2"]; ?><br>
Value 3: <?php echo $_GET["val3"]; ?><br>

</html>    <!-- <form action="welcome_get.php" method="get">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="Placeholder"><br>
        <input type="submit">
    </form> -->