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
?>