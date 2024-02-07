<?php
    define('PAGE_NAME', 'Bank | Home');
    define('ABS_PATH', "../");
    extract($_REQUEST); // This is for grabbing the $_POST, $_GET or $_COOKIE

    $data = [
        'myName' => "Ant",
        'pageName' => "Bank | Home",
        [

        ]
    ];

    include_once(ABS_PATH . '/media/views/bank.head.view.php')
?>

    This is the home page.
    <?php
    if (isset($userName)){
        echo "Welcome! $userName" . PHP_EOL;
    } 
    if (isset($userPassword)){
        echo "Password was: $userPassword" . PHP_EOL;
    }

    ?>
</body>
<?php include_once(ABS_PATH . '/media/views/bank.footer.view.php') ?>
</html>