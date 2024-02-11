<?php
    session_start();
    define('PAGE_NAME', 'Bank | Accounts');
    define('ABS_PATH', "../");
    
    // Check for session data if its not there we create it.
    if (!isset($_SESSION['accountData'])) {
        $_SESSION['accountData'] = [
            'checking' => 252,
            'savings' => 152,
            'joint' => 0,
        ];
    }

    $data = [
        'myName' => "Ant",
        'pageName' => "Bank | Home",
    ];

    include_once(ABS_PATH . '/media/views/bank.head.view.php')
?>
<?php 
$checkingBalance = $_SESSION['accountData']['checking'];
$savingsBalance = $_SESSION['accountData']['savings'];
$jointCheckings = $_SESSION['accountData']['joint'];
$totalBal = $checkingBalance + $savingsBalance + $jointCheckings;

echo "<h2>Accounts:</h2>";
echo "<p>Checking amount: $" . $checkingBalance . "</p>";
echo "<p>Savings amount: $" . $savingsBalance . "</p>";
echo "<p>Joint Checkings amount: $" . $jointCheckings . "</p>";
echo "<p>Total Balance: $" . $totalBal . "</p>";
?>
</body>
<?php include_once(ABS_PATH . '/media/views/bank.footer.view.php') ?>
</html>