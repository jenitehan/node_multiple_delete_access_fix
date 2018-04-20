<?php

namespace Drupal\node_multiple_delete_access_fix\Routing;

use Drupal\Core\Routing\RouteSubscriberBase;
use Symfony\Component\Routing\RouteCollection;

/**
 * Class RouteSubscriber.
 *
 * Listens to the dynamic route events.
 */
class RouteSubscriber extends RouteSubscriberBase {

  /**
   * {@inheritdoc}
   */
  protected function alterRoutes(RouteCollection $collection) {
    // Alter the access permission for deleting multiple nodes.
    if ($route = $collection->get('node.multiple_delete_confirm')) {
      $route->setRequirement('_permission', 'access multiple node delete path');
    }
  }
}
