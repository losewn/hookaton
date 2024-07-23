<?php

namespace Drupal\achievement;

use Drupal\Core\Entity\ContentEntityInterface;

/**
 * Provides an interface defining an achievement rule entity type.
 */
interface AchievementRuleInterface extends ContentEntityInterface {

  /**
   * Gets the achievement rule title.
   *
   * @return string
   *   Title of the achievement rule.
   */
  public function getTitle(): string;

  /**
   * Sets the achievement rule title.
   *
   * @param string $title
   *   The achievement rule title.
   *
   * @return \Drupal\achievement\AchievementRuleInterface
   *   The called achievement rule entity.
   */
  public function setTitle(string $title): AchievementRuleInterface;

  /**
   * Returns the achievement rule status.
   *
   * @return bool
   *   TRUE if the achievement rule is enabled, FALSE otherwise.
   */
  public function isEnabled(): bool;

  /**
   * Sets the achievement rule status.
   *
   * @param bool $status
   *   TRUE to enable this achievement rule, FALSE to disable.
   *
   * @return \Drupal\achievement\AchievementRuleInterface
   *   The called achievement rule entity.
   */
  public function setStatus(bool $status): AchievementRuleInterface;

}
