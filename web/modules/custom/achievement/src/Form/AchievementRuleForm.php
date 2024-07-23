<?php

namespace Drupal\achievement\Form;

use Drupal\Core\Entity\ContentEntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Form controller for the achievement rule entity edit forms.
 */
class AchievementRuleForm extends ContentEntityForm {

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $entity = $this->getEntity();
    $result = $entity->save();
    $link = $entity->toLink($this->t('View'))->toRenderable();

    $message_arguments = ['%label' => $this->entity->label()];
    $logger_arguments = $message_arguments + ['link' => render($link)];

    if ($result == SAVED_NEW) {
      $this->messenger()
        ->addStatus($this->t('New achievement rule %label has been created.', $message_arguments));
      $this->logger('achievement_rule')
        ->notice('Created new achievement rule %label', $logger_arguments);
    }
    else {
      $this->messenger()
        ->addStatus($this->t('The achievement rule %label has been updated.', $message_arguments));
      $this->logger('achievement_rule')
        ->notice('Updated new achievement rule %label.', $logger_arguments);
    }

    $form_state->setRedirect('entity.achievement_rule.canonical', ['achievement_rule' => $entity->id()]);
  }

}
