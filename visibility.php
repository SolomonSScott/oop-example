<?php

/**
 * A simple Class
 */
class Book {

  /**
   * A public property (Can be seen/used by anything)
   * @var string
   */
  public $title = 'The Invisible Man';

  /**
   * Private property (Can only be seen by this class)
   * @var string
   */
  private $isbn_number = '978-3-16-148410-0';

  /**
   * Protected property (Can be seen/used by any class extending this one)
   * @var string
   */
  protected $publisher = 'Penguin Publisher';

  public function get_title()
  {
    return $this->title;
  }
}