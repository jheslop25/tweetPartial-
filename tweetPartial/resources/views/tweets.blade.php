<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tweets - laravel</title>
</head>
<body>
    <?php
    //var_dump($allTweets['content']);
    foreach ($allTweets as $tweet) {
        echo("<p>" . $tweet['content'] . "</p>");
        echo("<p><strong>" . $tweet['author'] . "</strong></p>");
    }
    ?>
</body>
</html>
