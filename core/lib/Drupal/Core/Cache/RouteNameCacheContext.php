<?php

/**
 * @file
 * Contains \Drupal\Core\Cache\RouteNameCacheContext.
 */

namespace Drupal\Core\Cache;

/**
 * Defines the RouteCacheContext service, for "per route name" caching.
 */
class RouteNameCacheContext extends RouteCacheContext {

  /**
   * {@inheritdoc}
   */
  public static function getLabel() {
    return t('Route name');
  }

  /**
   * {@inheritdoc}
   */
  public function getContext() {
    return $this->routeMatch->getRouteName();
  }

}
