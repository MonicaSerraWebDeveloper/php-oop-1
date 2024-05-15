<?php

class Movie {
    public $name;
    public $year;
    public $duration;
    public $streaming;
    public $averageVote;
    public $genre;

    function __construct($_name, $_year, $_duration, $_streaming, $_averageVote, $_genre) {
        $this->name = $_name;
        $this->year = $_year;
        $this->duration = $_duration;
        $this->streaming = $_streaming;
        $this->averageVote = $_averageVote;
        $this->genre = $_genre;
    }
}

$movie1 = new Movie('Love Actually', 2003, '2h 15m', 'Netflix', 7.6, 'commedia');
$movie2 = new Movie('Harry, ti presento Sally', 1989, '1h 36m', 'Disney+', 7.7, 'romance');

var_dump($movie1);
var_dump($movie2);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>
<body>
</body>
</html>