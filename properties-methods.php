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
  public $title = 'The Invisible Man';

  /**
   * A method on a book
   * @return string
   */
  public function get_title()
  {
    return $this->title;
  }
}