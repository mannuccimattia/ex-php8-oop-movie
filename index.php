<?php

class Genre
{
  public $genreName;
  public function __construct($_genreName)
  {
    $this->genreName = $_genreName;
  }
}
class Movie
{

  public $title;
  public $director;
  public $release;
  public $revenue;
  public $country;
  public $genre;

  public function __construct($_title, $_director, $_release, $_revenue, $_country, Genre $_genre)
  {
    $this->title = $_title;
    $this->director = $_director;
    $this->release = $_release;
    $this->revenue = $_revenue;
    $this->country = $_country;
    $this->genre = $_genre;
  }
}

$mov_1 = new Movie("IT", "Andy Muschietti", 2017, "704.2 mil", "USA", new Genre("Horror"));
$mov_2 = new Movie("The Blob", "Irvin S. Yeaworth Jr.", 1958, "4 mil", "USA", new Genre("Thriller"));

$movies = [$mov_1, $mov_2];

foreach ($movies as $movie) {
  foreach ($movie as $key => $value) {
    if (!is_string($value) && !is_int($value)) {
      foreach ($value as $objectValue) {
        echo $objectValue, "<br>";
      }
    } else {
      echo $value, "<br>";
    }
  }
  echo '<hr>';
}

// var_dump($movies);
var_dump($mov_1);
var_dump($mov_2);
