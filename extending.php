<?php

/**
 * A simple Class
 */
class Book {

  /**
   * A property on a book
   * @var string
   */
  public $title;

  public function __construct( $title )
  {
    $this->title = $title;
  }
}

class Movie extends Book {

}

$movie = new Movie('Dr. Strange');
echo $movie->title; // Dr. Strange