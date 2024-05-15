<?php

require_once __DIR__ . '/models/Movie.php';
require_once __DIR__ . '/models/db.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <title>OOP</title>
</head>
<body>
    <div class="container">
        <?php foreach($movies as $movie) { ?>
        <div class="movie-container">
            <h2><?php echo $movie->getTitleMovie(); ?></h2>
            <p><?php echo $movie->getInfoMovie(); ?></p>
            <p><?php echo $movie->getGenre(); ?></p>
        </div>
        <?php }?>
    </div>
    
</body>
</html>