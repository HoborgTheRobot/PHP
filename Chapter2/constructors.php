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

        require 'comment.php';
        $comment = new Comment('WMLS eats shit every day',10);
      
    ?>

    <p><?php echo $comment->text ?> at <?php echo $comment->userID ?> am </p>
</body>
</html>