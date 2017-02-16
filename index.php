<?php require 'content.php';?>
<!DOCTYPE html>
<head>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
                        <blockquote><?=$arrayOfQuotes[$randomArrayKey]?></blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>