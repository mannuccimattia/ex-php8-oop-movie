<?php

require_once "./Traits/Cover.php";

require_once "./Models/Genre.php";
require_once "./Models/Movie.php";

require_once "./data/movie_data.php";


// convert movies to a php array
function getMovies($movies)
{

  $moviesArray = [];

  foreach ($movies as $movie) {

    $currentMovie = [];

    foreach ($movie as $key => $value) {

      // convert genre to array, remove null values
      if ($key === "genre" && is_object($value)) {

        $callback = function ($item) {
          return $item !== null;
        };

        $genresArray = array_filter($value->genres, $callback);
        $currentMovie[$key] = join(", ", $genresArray);
      } else {

        $currentMovie[$key] = $value;
      }
    }

    $moviesArray[] = $currentMovie;
  }

  return $moviesArray;
}

// render cycle
$moviesArray = getMovies($movies);
