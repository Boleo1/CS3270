<?php

$name = "Anthony";
$about_me = "Hello my name is {$name} Beaulieu, I am from Red Lake Minnesota. I grew up in Red Lake from 2003 to about 2022 or so when
I moved out of my parents house and began to venture on living on my own and really experiencing things. Growing up in Red Lake wasn't too bad
for myself all throughout my childhood I just mainly played video games and stayed at the house, if it wasnt that I was playing basketball
during my high school career the people I had played basketball with all throughout middle school and growing up with we had made it to the minnesota
state basketball tournament, in simpler terms we were one of the top 8 teams in Class A in minnesota for 3 of my 4 years.";
$interest_q = "Why I want to learn computer science:";
$interest_a = "What had sparked my interest for computer science was growing up being a gamer, seeing all of the advancements that make up the gold standard of games
today. I had never really understood game development and what entailed it but I was always interested in learning it.Another thing is I feel I can
create new technology and create a bit of change back home in Red Lake. I have a lot of ideas but I just am not comfortable with sharing them publicly as I feel they are what will
cement my name in being a competent software developer, learning everything from BSU and their philosophies of teaching computer science help you grasp
whole concepts rather than just brushing over like a YouTube tutorial would.";
$after_q = "What do I want to do after BSU:";
$after_ans = "Once I am done with my degree at Bemidji State I hope to get more into my current job field,
I work as an entry level PC technician in Red Lake for my tribe, I would like to work on full stack development or general iOS or Android app development for
both younger and older people to stay connected to what is going on around the 'Rez' with community updates and event postings. Also earning more money and pursuing a better
life for not only myself but my kids whenever I may choose to have them. Tim Ferris's book 'The 4-Hour Workweek' changed my outlook on hard work and what it really is, compared
to the typical 9-5 office job fluff that most of the time is spent day dreaming about being off work if you are efficient enough to get the job done. I used to work as a correctional officer
in Red Lake for 3 years before shifting my focus on computer science and creating something for myself rather than punching a clock and working for a meaningless purpose, people will change if they want to
nobody is ever going to pull you out of bed in the morning and make the decisions you make its all up to you and thats were I stand with those who create their own problems but seek for someone to fix everything."
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo($name) ?> | About</title>
  <link rel="stylesheet" href="style.css">
</head>
<header class="topHeader"><?php echo($name) ?>'s<br>About Me</header>
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
      <h2 class="articleH2"><?php echo($interest_q) ?></h2>
      <p class="articleP"><?php echo($interest_a) ?></p>
    </article>
    <article class="altArticleBody">
      <h2 class="articleH2"><?php echo($after_q) ?></h2>
      <p class="articleP"><?php echo($after_ans) ?></p>
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