<?php

class Movie
{

  public $title;
  public $director;
  public $release;
  public $running;
  public $country;
  public $genre;

  use Cover;


  public function __construct(
    $_title,
    $_director,
    $_release,
    $_running,
    $_country,
    Genre $_genre
  ) {
    $this->title = $_title;
    $this->director = $_director;
    $this->release = $_release;
    $this->running = $_running;
    $this->country = $_country;
    $this->genre = $_genre;
  }
}
