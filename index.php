<?php require 'quotes.php';?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello World</title>
</head>
<body>
    <?php $randomArrayKey =  array_rand($arrayOfQuotes); ?>
    <div>
        <h2><?php echo $arrayOfQuotes[$randomArrayKey];?></h2>
    </div>
</body>
</html>