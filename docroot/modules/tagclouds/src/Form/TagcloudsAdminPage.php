<?php

/**
 * @file
 * Contains \Drupal\tagclouds\Form\TagcloudsAdminPage.
 */

namespace Drupal\tagclouds\Form;

use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Language\LanguageManagerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Configure site information settings for this site.
 */
class TagcloudsAdminPage extends ConfigFormBase {

  /**
   * The language manager.
   *
   * @param \Drupal\Core\Language\LanguageManagerInterface $language_manager
   */
  protected $languageManager;

  /**
   * Constructs a \Drupal\system\ConfigFormBase object.
   *
   * @param \Drupal\Core\Config\ConfigFactoryInterface $config_factory
   *   The factory for configuration objects.
   */
  public function __construct(ConfigFactoryInterface $config_factory, LanguageManagerInterface $language_manager) {
    parent::__construct($config_factory);
    $this->languageManager = $language_manager;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('config.factory'),
      $container->get('language_manager')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'tagclouds_settings';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('tagclouds.admin_page');
    $options = array(
      'title,asc' => t('by title, ascending'), 'title,desc' => t('by title, descending'),
      'count,asc' => t('by count, ascending'), 'count,desc' => t('by count, descending'),
      'random,none' => t('random')
    );
    $sort_order = $config->get('tagclouds_sort_order');
    $form['tagclouds_sort_order'] = array(
      '#type' => 'radios',
      '#title' => t('Tagclouds sort order'),
      '#options' => $options,
      '#default_value' => (!empty($sort_order)) ? $sort_order : 'title,asc',
      '#description' => t('Determines the sort order of the tags on the freetagging page.'),
    );

    $options_display = array('style' => t('Display Tags with Style'), 'count' => t('Display Tags with Count'));
    $display_type = $config->get('tagclouds_display_type');
    $form['tagclouds_display_type'] = array(
      '#type' => 'radios',
      '#title' => t('Tagclouds Display Type'),
      '#options' => $options_display,
      '#default_value' => (!empty($display_type)) ? $display_type : 'style',
      '#description' => t('Determines the style of the page.'),
    );

    $form['tagclouds_display_node_link'] = array(
     '#type' => 'checkbox',
     '#title' => t('Link term to node when only one content is tagged'),
     '#default_value' => $config->get('tagclouds_display_node_link'),
     '#description' => t('When there is only one content tagged with a certain term, link that term to this node instead of the term list page.'),
    );

    $page_amount = $config->get('tagclouds_page_amount');
    $form['tagclouds_page_amount'] = array(
      '#type' => 'textfield',
      '#size' => 5,
      '#title' => t('Amount of tags on the pages'),
      '#default_value' => is_numeric($page_amount) ? $page_amount : 60,
      '#description' => t("The amount of tags that will show up in a cloud on the
        pages. Enter '0' to display all tags. Amount of tags in blocks must be
        configured in the block settings of the various cloud blocks."),
    );

    $levels = $config->get('tagclouds_levels');
    $form['tagclouds_levels'] = array(
      '#type' => 'textfield',
      '#size' => 5,
      '#title' => t('Number of levels'),
      '#default_value' => is_numeric($levels) ? $levels : 6,
      '#description' => t('The number of levels between the least popular
        tags and the most popular ones. Different levels will be assigned a different
        class to be themed in tagclouds.css'),
    );

    $lang = $this->languageManager->getLanguages();
    if (count($lang) > 1) {
      $form['tagclouds_language_separation'] = array(
        '#type' => 'checkbox',
        '#title' => t('Separation of Tags per language'),
        '#default_value' => $config->get('tagclouds_language_separation'),
        '#description' => t('If you have more than one language installed this setting would allow you to separate the tags for each language.'),
      );
    }

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->config('tagclouds.admin_page')
      ->set('tagclouds_sort_order', $form_state->getValue('tagclouds_sort_order'))
      ->set('tagclouds_display_type', $form_state->getValue('tagclouds_display_type'))
      ->set('tagclouds_display_node_link', $form_state->getValue('tagclouds_display_node_link'))
      ->set('tagclouds_page_amount', $form_state->getValue('tagclouds_page_amount'))
      ->set('tagclouds_levels', $form_state->getValue('tagclouds_levels'));

    if ($form_state->getValue('tagclouds_language_separation')) {
      $this->config('tagclouds.admin_page')
        ->set('tagclouds_language_separation', $form_state->getValue('tagclouds_language_separation'));
    }
    $this->config('tagclouds.admin_page')->save();

    parent::submitForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  function getEditableConfigNames() {
    return ['tagclouds.admin_page'];
  }
}
