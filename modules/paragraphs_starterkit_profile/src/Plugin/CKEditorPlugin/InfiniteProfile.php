<?php

/**
 * @file
 * Contains \Drupal\paragraphs_starterkit_profile\Plugin\CKEditorPlugin\InfiniteProfile.
 */

namespace Drupal\paragraphs_starterkit_profile\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "infiniteprofile" plugin.
 *
 * @CKEditorPlugin(
 *   id = "infiniteprofile",
 *   label = @Translation("Infinite profile widget"),
 *   module = "ckeditor"
 * )
 */
class InfiniteProfile extends CKEditorPluginBase  {

  public function getLibraries(Editor $editor) {
    return array(
      'paragraphs_starterkit_profile/drupal.ckeditor.plugins.infiniteprofile',
    );
  }

  /**
   * {@inheritdoc}
   */
  public function getFile() {
    return drupal_get_path('module', 'paragraphs_starterkit_profile') . '/js/plugins/infiniteprofile/plugin.js';
  }

   /**
   * {@inheritdoc}
   */
  public function getConfig(Editor $editor) {
    return array();
  }

  /**
   * {@inheritdoc}
   */
  public function getButtons() {
    return array(
      'InfiniteProfileModel' => array(
        'label' => t('Model profile'),
        'image' => drupal_get_path('module', 'paragraphs_starterkit') . '/js/plugins/infiniteprofile/image.png',
      ),
      'InfiniteProfileDesigner' => array(
        'label' => t('Desginer profile'),
        'image' => drupal_get_path('module', 'paragraphs_starterkit') . '/js/plugins/infiniteprofile/image.png',
      ),
      'InfiniteProfileCelebrity' => array(
        'label' => t('Celebrity profile'),
        'image' => drupal_get_path('module', 'paragraphs_starterkit') . '/js/plugins/infiniteprofile/image.png',
      ),
    );
  }

}
