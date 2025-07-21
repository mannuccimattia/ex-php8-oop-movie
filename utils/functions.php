<?php

function getMovies($movies)
{
  foreach ($movies as $movie) {

    foreach ($movie as $key => $value) {

      if ($key === "genre" && is_object($value)) {
        // function: removes null values from genres array
        $callback = function ($item) {
          return $item !== null;
        };
        $genresArray = array_filter($value->genres, $callback);
        echo join(", ", $genresArray), "<br>";
      } else {
        echo $value, "<br>";
      }
    }
    echo "<br>";
  }
}

// render cycle
// foreach ($movies as $movie) {

//   foreach ($movie as $key => $value) {

//     // check if value is a class object (genre)
//     if (!is_string($value) && !is_int($value)) {

//       // cycle genres
//       foreach ($value as $array) {

//         if (in_array(null, $array)) {
//           // function: removes null values from genres array
//           $callback = function ($item) {
//             return $item !== null;
//           };
//           // print genres
//           return join(", ", array_filter($array, $callback)), "<br>";
//         } else {
//           return join(", ", $array), "<br>";
//         }
//       }
//     } else { // if string or int, print
//       return $value, "<br>";
//     }
//   }
// }