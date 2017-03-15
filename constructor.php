<?php

namespace Application;

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

$book = new Book('The Invisible Man');
echo $book->title; // The Invisible Man