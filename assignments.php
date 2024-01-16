<?php

$name = "Anthony";
$assignment1Title = "Assignment 1 - Home Page";
$assignment1Desc = "You are to create a 'Home' page. This page will include a header with either your name or 'Home' in it. A navigation bar with links to 'Home' and 'Assignments'.
 The links can be dead for now. As well as an article section where you answer the following questions. 1. Why are you taking this class? 2.What do you want to take away from this class?
  Styling and creativity will be left up to you individually. You will also need to include a link on the page to the GitHub directory where all the source code for this assignment is 
  located.";
$assignment2Title = "Assignment 2 - About Page";
$assignment2Desc = "You are to create an 'About' page"
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo($name) ?> | Assignments</title>
  <link rel="stylesheet" href="style.css">
</head>
<header class="topHeader">
<img class="headerImg" src="images/header.jpg" alt="header image of myself">
  <p><?php echo($name) ?>'s<br>homepage</p>
</header>
<nav class="topNav">
      <ul class="navList">
        <li class="navItems"><a href="index.php">Home</a></li>
        <li class="navItems"><a href="about.php">About</a></li>
        <li class="navItems"><a href="assignments.php">Assignments</a></li>
        <li class="navItems"><a href="https://github.com/boleo1">Github</a></li>
      </ul>
    </nav>
<body class="container">
  <main class="mainBody">
    <article class="articleBody">
      <h2 class="articleH2"><?php echo($assignment1Title) ?></h2>
      <p class="articleP"><?php echo($assignment1Desc) ?></p>
    </article>
    <article class="altArticleBody">
      <h2 class="articleH2"><?php echo($assignment2Title) ?></h2>
      <p class="articleP"><?php echo($assignment2Desc) ?></p>
    </article>
  </main>
</body>
<footer class="footer">
  <nav class="footerNav">
    <ul class="footerList">
      <li class="footerLinks"><a href="index.php">Home</a></li>
      <li class="footerLinks"><a href="about.php">About</a></li>
      <li class="footerLinks"><a href="assignments.php">Assignments</a></li>
      <li class="footerLinks"><a href="https://github.com/boleo1">Github</a></li>
    </ul>
  </nav>
  <p class="footerCopyright"><a href="https://github.com/boleo1">&copy; Anthony Beaulieu</a>
</footer>
</html>