<?php    
    session_start(); // Use session to keep track of user form inputs.
    define('PAGE_NAME', 'Bank | Home');
    define('ABS_PATH', "../");


    $userName = isset($_SESSION['userName']) ? $_SESSION['userName'] : 'Guest'; // checks if its set, if not we print out Guest.
    $data = [
        'myName' => "Ant",
        'pageName' => "Bank | Home",
        'dataTable' => [
            [
                'userName' => $userName, // store the username in the array so it will stay.
            ]
        ]
    ];

    include_once(ABS_PATH . '/media/views/bank.head.view.php')
?>

    <h2>This is the home page.</h2>
    <?php // echo out the username with a welcome message
    if (isset($userName)){
        echo "Welcome! " . $data['dataTable'][0]['userName'] . PHP_EOL;
    } 
    ?>
</body>
<?php include_once(ABS_PATH . '/media/views/bank.footer.view.php') ?>
</html>