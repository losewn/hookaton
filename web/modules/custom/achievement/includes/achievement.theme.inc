<?php

/**
 * @file
 * Provides the theming functions for achievement.
 */

use Drupal\Core\Render\Element;

/**
 * Prepares variables for badge templates.
 */
function template_preprocess_badge(array &$variables) {
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
