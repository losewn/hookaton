<?php

namespace Drupal\achievement;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;

/**
 * Defines the access control handler for the achievement rule entity type.
 */
class AchievementRuleAccessControlHandler extends EntityAccessControlHandler {

  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {

    switch ($operation) {
      case 'view':
        return AccessResult::allowedIfHasPermission($account, 'view achievement rule');

      case 'update':
        return AccessResult::allowedIfHasPermissions($account, ['edit achievement rule', 'administer achievement rule'], 'OR');

      case 'delete':
        return AccessResult::allowedIfHasPermissions($account, ['delete achievement rule', 'administer achievement rule'], 'OR');

      default:
        // No opinion.
        return AccessResult::neutral();
    }

  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermissions($account, ['create achievement rule', 'administer achievement rule'], 'OR');
  }

}
