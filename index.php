<?php

require_once "./Traits/Cover.php";

require_once "./Models/Genre.php";
require_once "./Models/Movie.php";

require_once "./data/movie_data.php";

require_once "./utils/functions.php";

// render cycle

getMovies($movies);

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
//           echo join(", ", array_filter($array, $callback)), "<br>";
//         } else {
//           echo join(", ", $array), "<br>";
//         }
//       }
//     } else { // if string or int, print
//       echo $value, "<br>";
//     }
//   }
//   echo '<hr>';
// }

// var_dump($movies);
// var_dump($mov_1);
// var_dump($mov_2);
// echo "-----------------------", "<br>";
