<?php
  define('PAGE_NAME', "Budgeting");
  define('abs_path', "vs5942cv/CS3270/extracredit/");
  extract($_REQUEST);
  global $USERNAME;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo PAGE_NAME?></title>
    <link rel="stylesheet" href="budgetstyle.css">
</head>
<header class="header">Simple PHP form demo</header>
<body>
  <form class="form" action="calculated.php" method="get" >
    <label for="sales">Username: <input type="text" name="USERNAME" id="sales"></label><br>
    <label for="sales">Sales: <input type="text" name="sales" id="sales"></label><br>
    <label for="rent">Rent: <input type="text" name="rent" id="rent"></label><br>
    <label for="salaries">Salaries: <input type="text" name="salaries" id="salaries"></label><br>
    <label for="supplies">Supplies: <input type="text" name="supplies" id="supplies"></label><br>
    <lable for="submit"><input type="submit" name="submit" id="submit">
</body>
</html>