<?php
    define('PAGE_NAME', 'Bank | Login');
    define('ABS_PATH', "../  ");
    extract($_REQUEST); // This is for grabbing the $_POST, $_GET or $_COOKIE
    session_start();

    $error = '';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['userName'] ?? '';
        $password = $_POST['userPassword'] ?? '';
    }
    if(empty($username) || empty($password)){
        $error = 'Username and password cannot be empty';
    }
    else{
        header('Location: ../bank.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo PAGE_NAME ?></title>
</head>
<body>
    <form  class="loginForm" action="index.php" method="post">
        <label for="userName" >Username: <input type="text" id="userName" name="userName"></label><br>
        <label for="userPassword" >Password: <input type="password" id="userPassword" name="userPassword"></label><br>
        <label for="userSubmit" ><input class="loginSubmit"type="submit" value="Submit"></label><br>
        <?php if (!empty($error)): ?>
            <p style="color: red;"><?php echo $error; ?></p>
        <?php endif; ?>
    </form>
    <a href="/CS3270/index.php"> Click to go back</a>
</body>
</html>