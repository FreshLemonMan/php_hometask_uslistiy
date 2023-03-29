<?php
/**
 * @var array $list
 */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>PHOTO</div>
    <a href="/">Home</a>
    <a href="/about">About</a>
    <a href="/cabinet">Cabinet</a>
    <a href="/news">News</a>
    <a href="/photo">Photos</a>

    <ul>
        <?php
            foreach($list as $src) {
                echo "<p>$src</p>";
                echo "<img src='$src' alt=''>";
            }
        ?>
    </ul>
</body>
</html>
