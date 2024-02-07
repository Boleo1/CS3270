<?php
    define('PAGE_NAME', 'Bank | Home');
    define('ABS_PATH', dirname(__FILE__));
    extract($_REQUEST); // This is for grabbing the $_POST, $_GET or $_COOKIE
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo PAGE_NAME ?></title>
</head>
<body>
    This is the home page.
    <?php
    if (isset($userName)){
        echo "Welcome! $userName" . PHP_EOL;
    } 
    if (isset($userPassword)){
        echo "Password was: $userPassword" . PHP_EOL;
    }

    ?>
    <a href="index.php">Click to go back</a>
</body>
</html>