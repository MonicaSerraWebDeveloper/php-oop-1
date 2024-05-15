<?php

class Movie {
    public $name;
    public $year;
    public $duration;
    public $streaming;
    public $averageVote;
    public $genre;

    public function __construct($_name, $_year, $_duration, $_streaming, $_averageVote, $_genre) {
        $this->name = $_name;
        $this->year = $_year;
        $this->duration = $_duration;
        $this->streaming = $_streaming;
        $this->averageVote = $_averageVote;
        $this->genre = $_genre;
    }

    public function getTitleMovie() {
        return $this->name;
    }

    public function getInfoMovie() {
        return $this->year . ' - ' . $this->duration . ' - ' . $this->streaming;
    }

    public function getGenre() {
        return implode(', ', $this->genre);
    }
}

$movie1 = new Movie('Love Actually', 2003, '2h 15m', 'Netflix', 7.6, ['Commedia', 'Romance']);
$movie2 = new Movie('Harry, ti presento Sally', 1989, '1h 36m', 'Disney+', 7.7, ['Commedia', 'Romance']);
$movie3 = new Movie('Il diario di Bridget Jones', 2001, '1h 37m', 'Disney+', 6.8, ['Commedia', 'Romance']);

$movies = [
    $movie1,
    $movie2,
    $movie3
]

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