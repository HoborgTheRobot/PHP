<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    require 'Connection.php';

    $connection1 = new Connection();
    $connection2 = new Connection();
    $connection3 = new Connection();
    $connection1-> setConnectionID('192.168.0.1');
    print $connection1;
?>  
<p><?php echo 'Connection objects: ' . $connection1->getCount();?> </p>
</body>
</html>