<?php
define('URL_ROOT', 'http://localhost:3000');
// define('ABS_PATH', $_SERVER['DOCUMENT_ROOT']);
define('ABS_PATH', 'cs.bemidjistate.edu/vs5942cv/CS3270');

$data = [
  'myName' => 'Anthony',
  'pageTitle' => "Home",
  'indexQuestions' => [

        [
          // index questions
        'question3' => "Why am I taking this class?",

        'answer3' => "I am taking this class to learn more about backend development,
        I would like to create better technology for my current job, I work as an entry level PC technician currently
        for my tribe in Red Lake. We support a lot of businesses and have a lot of information I would like to make
        easily accessible and provide a more up to date, informative, intuitive, and accessible information with the use of
        webpages, applications, etc.",

        'question4' => "What do I want to get from this class?",

        'answer4' => "I would like to get a more rounded toolset when it comes to creating these information tools for
        everyone to use and benefit from. I would like to learn more about web security and what makes a website not secure and the
        steps to do to ensure that the data being processed on the backend cannot be manipulated/breached.",
        ],
      ],

    ];
include_once ABS_PATH . '/media/views/head.view.php';
?>
  <main class="mainBody">
    <article class="articleBody">
      <h2 class="articleH2"><?php echo $data['indexQuestions'][0]['question3'] ?></h2>
      <p class="articleP"><?php echo $data['indexQuestions'][0]['answer3'] ?></p>
    </article>
    <article class="altArticleBody">
      <h2 class="articleH2"><?php echo $data['indexQuestions'][0]['question4'] ?></h2>
      <p class="articleP"><?php echo $data['indexQuestions'][0]['answer4'] ?></p>
    </article>
    <article class="articleBodyXC">
      <h3 class="articleH3">Extra Credit / Extras (click on links)</h3>
    <p class ="extracreditLink"><a href="https://cs.bemidjistate.edu/vs5942cv/Hangman/hangman.htm">Hangman game!</a></p>
    <p class ="extracreditLink"><a href="extracredit/index.php">Extra Credit: Simple php form demo</a></p>
    </article>
  </main>
</body>
<?php include_once('media/views/footer.view.php')?>
</html>