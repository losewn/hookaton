<?php

namespace Drupal\achievement\Form;

use Drupal\Core\Entity\ContentEntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Form controller for the badge entity edit forms.
 */
class BadgeForm extends ContentEntityForm {

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
        ->addStatus($this->t('New badge %label has been created.', $message_arguments));
      $this->logger('badge')
        ->notice('Created new badge %label', $logger_arguments);
    }
    else {
      $this->messenger()
        ->addStatus($this->t('The badge %label has been updated.', $message_arguments));
      $this->logger('badge')
        ->notice('Updated new badge %label.', $logger_arguments);
    }

    $form_state->setRedirect('entity.badge.canonical', ['badge' => $entity->id()]);
  }

}
