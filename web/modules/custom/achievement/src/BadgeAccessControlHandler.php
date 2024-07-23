<?php

namespace Drupal\achievement;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;

/**
 * Defines the access control handler for the badge entity type.
 */
class BadgeAccessControlHandler extends EntityAccessControlHandler {

  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {

    switch ($operation) {
      case 'view':
        return AccessResult::allowedIfHasPermission($account, 'view badge');

      case 'update':
        return AccessResult::allowedIfHasPermissions($account, ['edit badge', 'administer badge'], 'OR');

      case 'delete':
        return AccessResult::allowedIfHasPermissions($account, ['delete badge', 'administer badge'], 'OR');

      default:
        // No opinion.
        return AccessResult::neutral();
    }

  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermissions($account, ['create badge', 'administer badge'], 'OR');
  }

}
