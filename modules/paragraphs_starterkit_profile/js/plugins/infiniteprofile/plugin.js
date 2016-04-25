/**
 * @file
 * Infinite profile plugin.
 *
 * @ignore
 */

(function ($, Drupal, drupalSettings, CKEDITOR) {

  'use strict';

  CKEDITOR.plugins.add('infiniteprofile', {
    requires: 'table',
    init : function(editor) {
      editor.addCommand('infiniteprofilemodel', {
        exec: function (editor) {
          var keys = drupalSettings.paragraphs_starterkit_profile.modelKeys;
          var rows = '';

          for (var i = 0; i < keys.length; i++) {
            rows += '<tr><th class="profile__key">' + keys[i] + '</th><td class="profile__value"></td></tr>';
          }

          editor.insertHtml('<table class="profile profile--model"><tbody>' + rows + '</tbody></table>');
          editor.editable().find('.profile__value').getItem(0).setStyle('width', '200px')
        }
      });
      editor.addCommand('infiniteprofiledesigner', {
        exec: function (editor) {
          var keys = drupalSettings.paragraphs_starterkit_profile.designerKeys;
          var rows = '';

          for (var i = 0; i < keys.length; i++) {
            rows += '<tr><th class="profile__key">' + keys[i] + '</th><td class="profile__value"></td></tr>';
          }

          editor.insertHtml('<table class="profile profile--designer"><tbody>' + rows + '</tbody></table>');
          editor.editable().find('.profile__value').getItem(0).setStyle('width', '200px')
        }
      });
      editor.addCommand('infiniteprofilecelebrity', {
        exec: function (editor) {
          var keys = drupalSettings.paragraphs_starterkit_profile.celebrityKeys;
          var rows = '';

          for (var i = 0; i < keys.length; i++) {
            rows += '<tr><th class="profile__key">' + keys[i] + '</th><td class="profile__value"></td></tr>';
          }

          editor.insertHtml('<table class="profile profile--celebrity"><tbody>' + rows + '</tbody></table>');
          editor.editable().find('.profile__value').getItem(0).setStyle('width', '200px')
        }
      });

      if (editor.ui.addButton) {
        editor.ui.addButton('InfiniteProfileModel', {
          label: Drupal.t('Model'),
          command: 'infiniteprofilemodel',
          icon: this.path + '/image.png'
        });
        editor.ui.addButton('InfiniteProfileDesigner', {
          label: Drupal.t('Designer'),
          command: 'infiniteprofiledesigner',
          icon: this.path + '/image.png'
        });
        editor.ui.addButton('InfiniteProfileCelebrity', {
          label: Drupal.t('Celebrity'),
          command: 'infiniteprofilecelebrity',
          icon: this.path + '/image.png'
        });
      }
    }
  });

})(jQuery, Drupal, drupalSettings, CKEDITOR);
