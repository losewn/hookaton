<?php

namespace Drupal\hookaton_core\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a block with a simple text.
 *
 * @Block(
 *   id = "auth_to_anonym_in_subject_block",
 *   admin_label = @Translation("Block auth to subject page"),
 *   category = "Custom"
 * )
 */
class AuthToAnonymInSubjectBlock extends BlockBase {

/**
 * {@inheritdoc}
 */
public function build() {
  $build =[
    '#theme' => 'auth_to_anonym_in_subject_block',
    'content' => [],
  ];

  return $build;
}

}
