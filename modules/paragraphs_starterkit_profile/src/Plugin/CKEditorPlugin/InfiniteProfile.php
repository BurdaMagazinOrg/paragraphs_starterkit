<?php

namespace Drupal\paragraphs_starterkit_profile\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginBase;
use Drupal\Core\StringTranslation\StringTranslationTrait;
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
class InfiniteProfile extends CKEditorPluginBase {

  use StringTranslationTrait;

  /**
   * {@inheritdoc}
   */
  public function getLibraries(Editor $editor) {
    return [
      'paragraphs_starterkit_profile/drupal.ckeditor.plugins.infiniteprofile',
    ];
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
    return [];
  }

  /**
   * {@inheritdoc}
   */
  public function getButtons() {
    return [
      'InfiniteProfileModel' => [
        'label' => $this->t('Model profile'),
        'image' => drupal_get_path('module', 'paragraphs_starterkit') . '/js/plugins/infiniteprofile/image.png',
      ],
      'InfiniteProfileDesigner' => [
        'label' => $this->t('Desginer profile'),
        'image' => drupal_get_path('module', 'paragraphs_starterkit') . '/js/plugins/infiniteprofile/image.png',
      ],
      'InfiniteProfileCelebrity' => [
        'label' => $this->t('Celebrity profile'),
        'image' => drupal_get_path('module', 'paragraphs_starterkit') . '/js/plugins/infiniteprofile/image.png',
      ],
    ];
  }

}
