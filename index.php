<?php

class Movie
{

  public $title;
  public $director;
  public $release;
  public $revenue;
  public $country;

  public function __construct($_title, $_director, $_release, $_revenue, $_country)
  {
    $this->title = $_title;
    $this->director = $_director;
    $this->release = $_release;
    $this->revenue = $_revenue;
    $this->country = $_country;
  }
}

$mov_1 = new Movie("IT", "Andy Muschietti", 2017, "704.2 mil", "USA");
$mov_2 = new Movie("The Blob", "Irvin S. Yeaworth Jr.", 1958, "4 mil", "USA");


var_dump($mov_1);
var_dump($mov_2);
