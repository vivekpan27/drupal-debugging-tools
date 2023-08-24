<?php

namespace Drupal\debug_demo\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for Debug Demo routes.
 */
class DebugDemoController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function debug(): array {

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('It works!'),
    ];

    return $build;
  }

}
