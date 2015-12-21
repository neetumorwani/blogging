<?php

/**
 * @file
 * Contains \Drupal\tagclouds\Plugin\Derivative\TagcloudsTermsBlock.
 */

namespace Drupal\tagclouds\Plugin\Derivative;

use Drupal\Component\Plugin\Derivative\DerivativeBase;

/**
 * Provides block plugin definitions for mymodule blocks.
 *
 * @see \Drupal\tagclouds\Plugin\Block\TagcloudsTermsBlock
 */
class TagcloudsTermsBlock extends DerivativeBase {

  /**
   * {@inheritdoc}
   */
  public function getDerivativeDefinitions($base_plugin_definition) {
    foreach (entity_load_multiple('taxonomy_vocabulary') as $voc) {
      $this->derivatives[$voc->vid] = $base_plugin_definition;
      $this->derivatives[$voc->vid]['admin_label'] = t('Tags in @voc', array('@voc' => $voc->name));
    }
    return $this->derivatives;
  }
}