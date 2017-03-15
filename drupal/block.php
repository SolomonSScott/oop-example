<?php

namespace Drupal\ModuleName\Plugin\Block;

use Drupal\Core\Block\BlockBase;

class ModuleBlock extends BlockBase {

  public function build()
  {
    return array(
      '#type'   => 'markup',
      '#markup' => 'This block list the article.',
    );
  }
}