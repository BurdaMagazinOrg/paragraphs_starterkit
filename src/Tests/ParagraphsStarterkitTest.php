<?php
/**
 * @file
 * Contains \Drupal\paragraphs_demo\Tests\ParagraphsDemoTest.php.
 */

namespace Drupal\paragraphs_starterkit\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Tests the demo module for Paragraphs.
 *
 * @group paragraphs
 */
class ParagraphsStarterkitTest extends WebTestBase {

  /**
   * Modules to enable.
   *
   * @var string[]
   */
  public static $modules = array(
    'paragraphs_starterkit',
  );

  /**
   * {@inheritdoc}
   */
  protected function setUp() {
    parent::setUp();
  }

  /**
   * Asserts demo paragraphs have been created.
   */
  protected function testConfigurationsAndCreation() {
    $admin_user = $this->drupalCreateUser(array(
      'administer site configuration',
      'administer content translation',
      'create content translations',
      'administer languages',
      'administer content types',
      'administer node fields',
      'administer node display',
      'administer paragraphs types',
      'administer paragraph fields',
      'administer paragraph display',
      'administer paragraph form display',
      'administer node form display',
    ));

    $this->drupalLogin($admin_user);
    // Check for all pre-configured paragraphs_starterkit.
    $this->drupalGet('admin/structure/paragraphs_type');
    $this->assertText('Image + Text');
    $this->assertText('Images');
    $this->assertText('Text');
    $this->assertText('Text + Image');
    $this->assertText('User');

    // Check for preconfigured languages.
    $this->drupalGet('admin/config/regional/language');
    $this->assertText('English');
    $this->assertText('German');
    $this->assertText('French');

    // Check for Content language translation checks.
    $this->drupalGet('admin/config/regional/content-language');
    $this->assertFieldChecked('edit-entity-types-paragraph');
    $this->assertFieldChecked('edit-settings-paragraph-images-translatable');
    $this->assertFieldChecked('edit-settings-paragraph-image-text-translatable');
    $this->assertFieldChecked('edit-settings-paragraph-text-translatable');
    $this->assertFieldChecked('edit-settings-paragraph-text-image-translatable');
    $this->assertFieldChecked('edit-settings-paragraph-user-translatable');

    // Check for paragraph type Image + text that has the correct fields set.
    $this->drupalGet('admin/structure/paragraphs_type/image_text/fields');
    $this->assertText('Text');
    $this->assertText('Image');

    // Check for paragraph type Text that has the correct fields set.
    $this->drupalGet('admin/structure/paragraphs_type/text/fields');
    $this->assertText('Text');
    $this->assertNoText('Image');

    // Check that all paragraphs types are enabled (disabled).
    $this->clickLink('Edit', 1);
    $this->assertNoFieldChecked('edit-settings-handler-settings-target-bundles-drag-drop-image-text-enabled');
    $this->assertNoFieldChecked('edit-settings-handler-settings-target-bundles-drag-drop-images-enabled');
    $this->assertNoFieldChecked('edit-settings-handler-settings-target-bundles-drag-drop-text-image-enabled');
    $this->assertNoFieldChecked('edit-settings-handler-settings-target-bundles-drag-drop-user-enabled');
    $this->assertNoFieldChecked('edit-settings-handler-settings-target-bundles-drag-drop-text-enabled');
  }

}
