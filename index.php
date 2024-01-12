<?php

$name = "Anthony";
$questionOne = "Why am I taking this class?";
$questionTwo = "What do I want to get from this class?";
$answerOne = "I am taking this class to learn more about backend development,
I would like to create better technology for my current job, I work as an entry level PC technician currently
for my tribe in Red Lake. We support a lot of businesses and have a lot of information I would like to make
easily accessible and provide a more up to date, informative, intuitive, and accessible information with the use of
webpages, applications, etc.";
$answerTwo = "I would like to get a more rounded toolset when it comes to creating these information tools for
everyone to use and benefit from. I would like to learn more about web security and what makes a website not secure and the
steps to do to ensure that the data being processed on the backend cannot be manipulated/breached. ";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo($name) ?> | Home</title>
  <link rel="stylesheet" href="style.css">
</head>
<header class="topHeader"><?php echo($name) ?>'s<br>homework</header>
<nav class="topNav">
      <ul class="navList">
        <li class="navItems"><a href="index.php">Home</a></li>
        <li class="navItems"><a href="index.php">About</a></li>
        <li class="navItems"><a href="index.php">Assignments</a></li>
        <li class="navItems"><a href="https://github.com/boleo1">Github</a></li>
      </ul>
    </nav>
<body class="container">
  <main class="mainBody">
    <article class="articleBody">
      <h2 class="articleH2"><?php echo($questionOne) ?></h2>
      <p class="articleP"><?php echo($answerOne) ?></p>
      <h2 class="articleH2"><?php echo($questionTwo) ?></h2>
      <p class="articleP"><?php echo($answerTwo) ?></p>
    </article>
  </main>
</body>
</html>