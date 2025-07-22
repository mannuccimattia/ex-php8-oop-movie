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
  "103",
  "USA",
  new Genre("Horror", "Supernatural", null)
);

$mov_2 = new Movie(
  "The Blob",
  "Irvin S. Yeaworth Jr.",
  1958,
  "86",
  "USA",
  new Genre("Thriller", "Horror", "Sci-Fi")
);

$mov_3 = new Movie(
  "Gremlins",
  "Joe Dante",
  1984,
  "106",
  "USA",
  new Genre("Comedy", "Fantasy", "Supernatural")
);

$mov_4 = new Movie(
  "Amici Miei",
  "Mario Monicelli",
  1975,
  "140",
  "ITA",
  new Genre("Comedy", null, null)
);

//define movie covers
$mov_1->setUrl("https://upload.wikimedia.org/wikipedia/en/5/5a/It_%282017%29_poster.jpg");
$mov_2->setUrl("https://upload.wikimedia.org/wikipedia/en/8/80/The_Blob_%281958%29_theatrical_poster.jpg");
$mov_3->setUrl("https://upload.wikimedia.org/wikipedia/en/3/3d/Gremlins1.jpg");
$mov_4->setUrl("https://upload.wikimedia.org/wikipedia/en/c/c5/Amicimiei.jpg");

// define movies array
$movies = [$mov_1, $mov_2, $mov_3, $mov_4];
