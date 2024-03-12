<?php
    session_start();
    define('PAGE_NAME', 'Bank | Transfers');
    define('ABS_PATH', "../");

    // Checks for session data, if it is not there we initialize it.
    if (!isset($_SESSION['accountData'])) { 
        $_SESSION['accountData'] = [
            'checking' => 252,
            'savings' => 152,
            'joint' => 0,
        ];
    }
    // Declare placeholder for message
    $message = '';
    $data = [
        'myName' => "Ant",
        'pageName' => "Bank | Home",
    ];

// This checks for the post submission, and assigns the form select names to $variables, $amount is a floating value since
// it may be a decimal input also.
    if (isset($_POST['transferSubmit'])) {
        $fromAccount = $_POST['fromAccount'];
        $toAccount = $_POST['toAccount'];
        $amount = floatval($_POST['amount']);
        
// Conditional checks for if the session account data array is greater or equal, if it is we can do math on it if not insufficient funds.
        if ($_SESSION['accountData'][$fromAccount] >= $amount) {
            $_SESSION['accountData'][$fromAccount] -= $amount;
            $_SESSION['accountData'][$toAccount] += $amount;
            $message = "Transfer successful!";
        } else {
            $message = "Insufficient funds for this transfer.";
        }
    }
    include_once(ABS_PATH . '/media/views/bank.head.view.php')
?>
<h2>Transfers: </h2>
<!-- displays the message based on what it may be, if there is nothing input, no output -->
<?php if (!empty($message)): ?>
    <p><?php echo $message; ?></p>
<?php endif; ?>

<form action='' method="post">
<label for="fromAccount">From Account:</label>
    <select name="fromAccount">
        <option value ="checking">Checking</option>
        <option value ="savings">Savings</option>
        <option value ="joint">Joint Checkings</option>
    </select>
    <br>

<label for="toAccount">To Account:</label>
    <select name="toAccount">
        <option value ="checking">Checking</option>
        <option value ="savings">Savings</option>
        <option value ="joint">Joint Checkings</option>
    </select>
    <br>

<label for="amount">Amount</label>
<input type="number" name="amount" required>
<br>

<label for="transferSubmit"><input type="submit" name="transferSubmit"></label>
</body>
<?php include_once(ABS_PATH . '/media/views/bank.footer.view.php') ?>
</html>