<?php
define('URL_ROOT', 'https://cs.bemidjistate.edu/vs5942cv/CS3270');
// define('ABS_PATH', $_SERVER['DOCUMENT_ROOT']);
define('ABS_PATH', __DIR__);

$data = [
    'myName' => 'Anthony',
    'pageTitle' => 'Projects',

    'projectsData' => [
        [
            'projectName' => 'Bemidji State Homepage',
            'projectDesc' => 'Homepage that has began development last semester with intro to web programming I and has carried onto advanced web programming',
            'projectLangs' => ['html', 'css', 'javascript', 'PHP'],
            'githubLink' => 'https://www.github.com/boleo1/CS3270',
            'projectLink' => 'https://cs.bemidjistate.edu/vs5942cv',
        ],
        [
            'projectName' => 'Banking website for BSU',
            'projectDesc' => 'Simple banking website made in advanced web programming, utilizes sessions to store variables update them based on form submissions',
            'projectLangs' => ['html', 'css', 'PHP'],
            'githubLink' => 'https://github.com/Boleo1/CS3270/tree/main/banking',
            'projectLink' => 'https://cs.bemidjistate.edu/vs5942cv/banking',
        ],
        [
            'projectName' => 'Hangman - Static, simple to solve',
            'projectDesc' => 'Hangman game that was developed in intro to web development, this was straight-forward and didnt need to be fancy just functional.',
            'projectLangs' => ['html', 'css', 'javascript'],
            'githubLink' => 'https://github.com/Boleo1/simple-hangman',
            'projectLink' => 'https://cs.bemidjistate.edu/vs5942cv/Hangman/hangman.htm',
        ],
        [
            'projectName' => 'Information Technology Website - Red Lake Tribal Council ----IN PROGRESS---',
            'projectDesc' => 'Was given access to web server that needs to be built from the ground up. Will be a fun learning process where learning secure web development practices will be learned and tested.',
            'projectLangs' => ['html','CSS', 'PHP', 'others unknown'],
            'githubLink' => 'https://www.github.com/boleo1',
            'projectLink' => 'https://cs.bemidjistate.edu/vs5942cv',
        ],
        [
            'projectName' => 'PROJECT PLACEHOLDER #5',
            'projectDesc' => 'Lorem ipsodum and shit like that',
            'projectLangs' => ['html', 'css', 'javascript'],
            'githubLink' => 'https://www.github.com/boleo1',
            'projectLink' => 'https://cs.bemidjistate.edu/vs5942cv',
        ]
    ]
];

include_once ABS_PATH . "/media/views/head.view.php"
?>
<main class="mainBody">
<?php include_once ABS_PATH . "/media/views/project.view.php" ?>
</main>
</body>
<?php include_once ABS_PATH . "/media/views/footer.view.php"?>
</html>