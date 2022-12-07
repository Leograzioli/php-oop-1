<?php 

class Movie {
    public $title;
    public $duration;
    public $genre;
    public $description;

    function __construct($title, $duration, $genre, $description)
    {
        $this->title = $title;
        $this->duration = $duration;
        $this->genre = $genre;
        $this->description = $description;
    }

    public function print() {
        return "Movie Title: $this->title; Genre: $this->genre; Duration: $this->duration; Description: $this->description;";
    }
}

$my_movie = new Movie("codice da vinci", "120 min", "action", "lorem ipsum tua sorella");

echo $my_movie->print();