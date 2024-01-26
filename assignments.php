<?php
  define('URL_ROOT', 'https://cs.bemidjistate.edu/vs5942cv/CS3270');
  define('ABS_PATH', __DIR__);

  $data = [
    'myName' => 'Anthony',
    'pageTitle' => 'Assignments',
    'assignmentsTable' => [
      [
        'assignment1' => "Assignment 1 - Home Page",
        'assignment1desc' =>"You are to create a 'Home' page. This page will include a header with either your name or 'Home' in it. A navigation bar with links to 'Home' and 'Assignments'.
        The links can be dead for now. As well as an article section where you answer the following questions. 1. Why are you taking this class? 2.What do you want to take away from this class?
         Styling and creativity will be left up to you individually. You will also need to include a link on the page to the GitHub directory where all the source code for this assignment is 
         located.",

         'assignment2' => "Assignment 2 - About Page",
         'assignment2desc' => "You are to create an 'About' page",

      ],
    ]
  ];
  include_once ABS_PATH . '/media/views/head.view.php';
?>

  <main class="mainBody">
    <article class="articleBody">
      <h2 class="articleH2"><?php echo $data['assignmentsTable'][0]['assignment1'] ?></h2>
      <p class="articleP"><?php echo $data['assignmentsTable'][0]['assignment1desc'] ?></p>
    </article>
    <article class="altArticleBody">
      <h2 class="articleH2"><?php  echo $data['assignmentsTable'][0]['assignment2']  ?></h2>
      <p class="articleP"><?php  echo $data['assignmentsTable'][0]['assignment2desc']  ?></p>
    </article>
  </main>
</body>
<?php include_once('media/views/footer.view.php')?>
</html>