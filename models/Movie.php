<?php

class Movie {
    public $title;
    public $duration;
    public $genre;
    public $description;

    function __construct(string $title, string $duration, array $genre, string $description)
    {
        $this->title = $title;
        $this->duration = $duration;
        $this->genre = $genre;
        $this->description = $description;
    }

    public function print() {
        return "Movie Title: $this->title Genre: " . $this->getGenres() . "Duration: $this->duration; Description: $this->description;";
    }

    public function getGenres() {
        $genres = "";
        foreach ($this->genre as $item) {
            $genres .= $item . " ";
        }
        return $genres;
    }
}