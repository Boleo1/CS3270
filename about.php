<?php
  define('URL_ROOT', 'https://cs.bemidjistate.edu/vs5942cv/CS3270');
  define('ABS_PATH', __DIR__);

$data = [
  'myName' => "Anthony",
  'pageTitle' => "About",
  'aboutQuestions' => [

    [
    'question1' => "Why I want to learn computer science:",

    'answer1' => "What had sparked my interest for computer science was growing up being a gamer, seeing all of the advancements that make up the gold standard of games
    today. I had never really understood game development and what entailed it but I was always interested in learning it. Another thing is I feel I can
    create new technology and create a bit of change back home in Red Lake. I have a lot of ideas but I just am not comfortable with sharing them publicly as I feel they are what will
    cement my name in being a competent software developer, learning everything from BSU and their philosophies of teaching computer science help you grasp
    whole concepts rather than just brushing over like a YouTube tutorial would.",

    'question2' => "What do I want to do after BSU:",

    'answer2' => "Once I am done with my degree at Bemidji State I hope to get more into my current job field,
    I work as an entry level PC technician in Red Lake for my tribe, I would like to work on full stack development or general iOS or Android app development for
    both younger and older people to stay connected to what is going on around the 'Rez' with community updates and event postings. Also earning more money and pursuing a better
    life for not only myself but my kids whenever I may choose to have them. Tim Ferris's book 'The 4-Hour Workweek' changed my outlook on hard work and what it really is, compared
    to the typical 9-5 office job fluff that most of the time is spent day dreaming about being off work if you are efficient enough to get the job done. I used to work as a correctional officer
    in Red Lake for 3 years before shifting my focus on computer science and creating something for myself rather than punching a clock and working for a meaningless purpose, people will change if they want to
    nobody is ever going to pull you out of bed in the morning and make the decisions you make its all up to you and thats were I stand with those who create their own problems but seek for someone to fix everything.",
    ]

  ],
];
include_once ABS_PATH . '/media/views/head.view.php';
?>

  <main class="mainBody">
    <article class="articleBody">
      <h2 class="articleH2"><?php echo $data['aboutQuestions'][0]['question1'] ?></h2>
      <p class="articleP"><?php echo $data['aboutQuestions'][0]['answer1'] ?></p>
    </article>
    <article class="altArticleBody">
      <h2 class="articleH2"><?php echo $data['aboutQuestions'][0]['question2'] ?></h2>
      <p class="articleP"><?php echo $data['aboutQuestions'][0]['answer2'] ?></p>
    </article>
  </main>
</body>

</html>