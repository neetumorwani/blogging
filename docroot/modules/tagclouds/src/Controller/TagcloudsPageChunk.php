<?php

/**
 * @file
 * Contains \Drupal\tagclouds\Controller\TagcloudsPageChunk.
 */

namespace Drupal\tagclouds\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * Controller routines for user routes.
 */
class TagcloudsPageChunk extends ControllerBase {

  public function tagcloudsPageChunk($tagclouds_vocs = '') {
    $vocs = tagclouds_vocs_load($tagclouds_vocs);
    if (empty($vocs)) {
      foreach (entity_load_multiple('taxonomy_vocabulary') as $vocabulary) {
        $vocs[] = $vocabulary->vid;
      }
    }
    $config = \Drupal::config('tagclouds.admin_page');
    
    $tags = tagclouds_get_tags($vocs, $config->get('tagclouds_levels'), $config->get('tagclouds_page_amount'));

    $tags = tagclouds_sort_tags($tags);
    $output = _theme('tagclouds_weighted', array('terms' => $tags));

    if (!$output) {
      throw new NotFoundHttpException();
    }

    $output = "<div class=\"wrapper tagclouds\">$output</div>";
  
    return $output;
  }
}
