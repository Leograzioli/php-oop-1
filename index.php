<?php 

require_once __DIR__ . "/models/Movie.php";

$my_movie = [
    new Movie("codice da vinci", "120 min", ["action", "comedy"], "lorem ipsum tua sorella"), 
    new Movie("Le avventure di francesco e phyton", "120 min", ["comedy"], "lorem ipsum tua sorella")
];

foreach($my_movie as $movie) {
    echo $movie->print() . "<br>";
}