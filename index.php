<?php require 'content.php';?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- A bootstrap theme -->
    <link rel="stylesheet" href="https://bootswatch.com/readable/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Hello World</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>Deepak Kumar</h1>
                <img src="images/me.jpg" alt="" class="picture">
                <h3 class="intro-text text-center">
                    I am an UX Engineer and front-end developer working mainly with HTML, JS and CSS. I live in Michigan and love to travel and play Tennis.
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="text-center">
                    <?php $randomArrayKey =  array_rand($arrayOfQuotes); ?>
                    <div>
                        <blockquote><?php echo $arrayOfQuotes[$randomArrayKey];?></blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>