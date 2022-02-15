<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance</title>
</head>
<body>
<?php

    require 'CheckingAccount.php';

    $account = new PremiumCheckingAccount();

    $account->getBalance();

    $account->deposit(20);

    $account->withdraw(10);

    $account->transfer(100);

    echo 'Premium Balance: ' . $account->minimumBalance . '<br>';
?>  
</body>
</html>