<?php

namespace Drupal\achievement;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityViewBuilder;

/**
 * Provides a view controller for an achievement rule entity type.
 */
class AchievementRuleViewBuilder extends EntityViewBuilder {

  /**
   * {@inheritdoc}
   */
  protected function getBuildDefaults(EntityInterface $entity, $view_mode): array {
    $build = parent::getBuildDefaults($entity, $view_mode);
    // The achievement rule has no entity template itself.
    unset($build['#theme']);
    return $build;
  }

}
