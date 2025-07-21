<?php

// require traits
require_once "./Traits/Cover.php";

// require classes
require_once "./Models/Genre.php";
require_once "./Models/Movie.php";

// define movies
$mov_1 = new Movie(
  "IT",
  "Andy Muschietti",
  2017,
  "704.2 mil",
  "USA",
  new Genre("Horror", "Supernatural", null)
);

$mov_2 = new Movie(
  "The Blob",
  "Irvin S. Yeaworth Jr.",
  1958,
  "4 mil",
  "USA",
  new Genre("Thriller", "Horror", "Sci-Fi")
);

//define movie covers
$mov_1->setUrl(" https://en.wikipedia.org/w/index.php?curid=50943697");
$mov_2->setUrl("https://en.wikipedia.org/w/index.php?curid=880563");

// define movies array
$movies = [$mov_1, $mov_2];

// render cycle
foreach ($movies as $movie) {

  foreach ($movie as $key => $value) {

    // check if value is a class object (genre)
    if (!is_string($value) && !is_int($value)) {

      // cycle genres
      foreach ($value as $array) {

        if (in_array(null, $array)) {
          // function: removes null values from genres array
          $callback = function ($item) {
            return $item !== null;
          };
          // print genres
          echo join(", ", array_filter($array, $callback)), "<br>";
        } else {
          echo join(", ", $array), "<br>";
        }
      }
    } else { // if string or int, print
      echo $value, "<br>";
    }
  }
  echo '<hr>';
}

// var_dump($movies);
var_dump($mov_1);
var_dump($mov_2);
