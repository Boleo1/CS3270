<?php
    session_start(); // Use session to keep track of user form inputs.
    define('PAGE_NAME', 'Bank | Login');
    define('ABS_PATH', "../  ");
    // extract($_REQUEST); // This is for grabbing the $_POST, $_GET or $_COOKIE
    

    if (isset($_POST['submit'])){
        $_SESSION['userName'] = $_POST['userName'];
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

    <!-- Declare form for user input, this gets sent to the next page.-->
    <form  class="loginForm" action="index.php" method="post">
        <label for="userName" >Username: <input type="text" id="userName" name="userName"></label><br>
        <label for="userPassword" >Password: <input type="password" id="userPassword" name="userPassword"></label><br>
        <label for="userSubmit" ><input class="loginSubmit"type="submit" name='submit' value="Submit"></label><br>
    </form>
    <a href="/CS3270/index.php"> Click to go back</a>
</body>
</html>