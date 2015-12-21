<?php

/**
 * @file
 * Contains \Drupal\tagclouds\Controller\TagcloudsListVocs.
 */

namespace Drupal\tagclouds\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * Controller routines for user routes.
 */
class TagcloudsListVocs extends ControllerBase {

  public function tagcloudsListVocs($tagclouds_vocs = NULL) {
    $vocs = tagclouds_vocs_load($tagclouds_vocs);
    if (empty($vocs)) {
      throw new NotFoundHttpException();
    }

    $output = '';
    foreach ($vocs as $vid) {
      $vocabulary = entity_load('taxonomy_vocabulary', $vid);

      if ($vocabulary == FALSE) {
        throw new NotFoundHttpException();
      }

      // Clean out vocabulary, so that we don't have to leave security to our
      // theme layer.
      $vocabulary->description = filter_xss_admin($vocabulary->description);
      $vocabulary->name = filter_xss_admin($vocabulary->name);

      $config = \Drupal::config('tagclouds.admin_page');
      $tags = tagclouds_get_tags(array($vocabulary->vid), $config->get('tagclouds_levels'), $config->get('tagclouds_page_amount'));
      $tags = tagclouds_sort_tags($tags);

      $output .= _theme('tagclouds_list_box', array('vocabulary' => $vocabulary, 'tags' => $tags));
    }

    if (!$output) {
      throw new NotFoundHttpException();
    }

    $output = "<div class=\"wrapper tagclouds\">$output</div>";
    return $output;
  }
}
