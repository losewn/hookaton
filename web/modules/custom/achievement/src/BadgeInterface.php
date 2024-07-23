<?php

namespace Drupal\achievement;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;

/**
 * Provides an interface defining a badge entity type.
 */
interface BadgeInterface extends ContentEntityInterface, EntityChangedInterface {

  /**
   * Gets the badge title.
   *
   * @return string
   *   Title of the badge.
   */
  public function getTitle(): string;

  /**
   * Sets the badge title.
   *
   * @param string $title
   *   The badge title.
   *
   * @return \Drupal\achievement\BadgeInterface
   *   The called badge entity.
   */
  public function setTitle(string $title): BadgeInterface;

  /**
   * Gets the badge creation timestamp.
   *
   * @return int
   *   Creation timestamp of the badge.
   */
  public function getCreatedTime(): int;

  /**
   * Sets the badge creation timestamp.
   *
   * @param int $timestamp
   *   The badge creation timestamp.
   *
   * @return \Drupal\achievement\BadgeInterface
   *   The called badge entity.
   */
  public function setCreatedTime(int $timestamp): BadgeInterface;

  /**
   * Returns the badge status.
   *
   * @return bool
   *   TRUE if the badge is enabled, FALSE otherwise.
   */
  public function isEnabled(): bool;

  /**
   * Sets the badge status.
   *
   * @param bool $status
   *   TRUE to enable this badge, FALSE to disable.
   *
   * @return \Drupal\achievement\BadgeInterface
   *   The called badge entity.
   */
  public function setStatus(bool $status): BadgeInterface;

}
