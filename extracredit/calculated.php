<?php
  define('PAGE_NAME', "Budgeting");
  // define('abs_path', "extracredit/");
  extract($_REQUEST);
  $totalNeg = $supplies + $rent;
  $totalPos = $salaries + $sales;
  global $USERNAME;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo PAGE_NAME ,' | Calculated'?></title>
    <link rel="stylesheet" href="budgetstyle.css">
</head>
<body>
  <header class="header"><?php echo 'Welcome ', $USERNAME?></header>
  <article class="calculatedOutput">
    <p class="calculatedP">
      Here is the information you had entered:<br>
      Salaries: <span class="phpEcho"><?php echo $salaries, PHP_EOL?></span><br>
      Sales: <span class="phpEcho"><?php echo $sales, PHP_EOL?></span><br>
      Rent: <span class="phpEcho"><?php echo $rent, PHP_EOL?></span><br>
      Supplies: <span class="phpEcho"><?php echo $supplies, PHP_EOL?></span><br>
      Total supplies & rent: <span class="phpEcho"><?php echo $totalNeg , PHP_EOL?></span><br>
      Total salaries & sales: <span class="phpEcho"><?php echo $totalPos , PHP_EOL?></span><br>
    </p>
  </article>
  <nav class="bottomNav">
    <li><a href="index.php">Calculator</a></li>
    <li><a href="../index.php">Anthony homepage</a></li>
  </nav>
</body>
</html>