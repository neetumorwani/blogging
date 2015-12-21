<?php

namespace Drupal\tagclouds\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a 'Book navigation' block.
 *
 * @Block(
 *   id = "tagclouds_block",
 *   admin_label = @Translation("Tagclouds terms"),
 *   category = @Translation("Tagclouds"),
 *   derivative = "Drupal\tagclouds\Plugin\Derivative\TagcloudsTermsBlock"
 * )
 */
class TagcloudsTermsBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return array(
      'cache' => array(
        'max_age' => 0,
        'contexts' => array(),
      ),
    );
  }

  /**
   * Overrides \Drupal\block\BlockBase::blockForm()
   */
  public function blockForm($form, FormStateInterface $form_state) {
    $terms_limit = isset($this->configuration['tags']) ? $this->configuration['tags'] : 0;
    $form['tags'] = array(
      '#type' => 'textfield',
      '#title' => t('Tags to show'),
      '#default_value' => $terms_limit,
      '#maxlength' => 3,
      '#description' => t("The number of tags to show in this block. Enter '0' to display all tags."),
    );
    $form['vocabulary'] = array(
      '#type' => 'textfield',
      '#title' => t('Vocabulary machine name'),
      '#default_value' => 'tags'
    );

    return $form;
  }

  /**
   * Overrides \Drupal\block\BlockBase::blockSubmit().
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    $this->configuration['tags'] = $form_state->getValue('tags');
    $this->configuration['vocabulary'] = $form_state->getValue('vocabulary');
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    $block_id = $this->getDerivativeId();

    return array(
      '#markup' => tagclouds_build_block_content($this->configuration['vocabulary'], $this->configuration['tags']),
    );
  }
}
