<?php

class Genre
{
  public $genres;
  public function __construct($_gen_1, $_gen_2, $_gen_3)
  {
    // $this->genreName = $_genreName;
    $this->genres = [$_gen_1, $_gen_2, $_gen_3];
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

$mov_1 = new Movie("IT", "Andy Muschietti", 2017, "704.2 mil", "USA", new Genre("Horror", "Supernatural", null));
$mov_2 = new Movie("The Blob", "Irvin S. Yeaworth Jr.", 1958, "4 mil", "USA", new Genre("Thriller", "Horror", "Sci-Fi"));

$movies = [$mov_1, $mov_2];

foreach ($movies as $movie) {
  foreach ($movie as $key => $value) {
    if (!is_string($value) && !is_int($value)) {
      foreach ($value as $array) {
        if (in_array(null, $array)) {
          $callback = function ($item) {
            return $item !== null;
          };
          echo join(", ", array_filter($array, $callback));
        } else {
          echo join(", ", $array);
        }
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
