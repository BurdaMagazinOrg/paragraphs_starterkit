/**
 * @file
 * Infinite profile plugin.
 *
 * @ignore
 */

(function ($, Drupal, CKEDITOR) {

  'use strict';

  CKEDITOR.plugins.add('infiniteprofile', {
    requires: 'table',
    init : function(editor) {
      editor.addCommand('infiniteprofilemodel', {
        exec: function (editor) {
          editor.insertHtml('<table class="profile profile--model">' +
            '<tbody>' +
            '<tr><th class="profile__key">Name</th><td class="profile__value"></td>' +
            '<tr><th class="profile__key">Geburtstag</th><td class="profile__value"></td>' +
            '<tr><th class="profile__key">Geburtsort</th><td class="profile__value"></td>' +
            '<tr><th class="profile__key">Sternzeichen</th><td class="profile__value"></td>' +
            '<tr><th class="profile__key">Beruf</th><td class="profile__value"></td>' +
            '<tr><th class="profile__key">Größe</th><td class="profile__value"></td>' +
            '<tr><th class="profile__key">Maße</th><td class="profile__value"></td>' +
            '<tr><th class="profile__key">Gewicht</th><td class="profile__value"></td>' +
            '<tr><th class="profile__key">Augenfarbe</th><td class="profile__value"></td>' +
            '<tr><th class="profile__key">Naturhaarfarbe</th><td class="profile__value"></td>' +
            '</tr>' +
            '</tbody></table>');
          editor.editable().find('.profile__value').getItem(0).setStyle('width', '200px')
        }
      });
      editor.addCommand('infiniteprofiledesigner', {
        exec: function (editor) {
          editor.insertHtml('<table class="profile profile--designer">' +
            '<tbody>' +
            '<tr><th class="profile__key">Gründungsjahr</th><td class="profile__value"></td>' +
            '<tr><th class="profile__key">Firmensitz</th><td class="profile__value"></td>' +
            '<tr><th class="profile__key">Gründer</th><td class="profile__value"></td>' +
            '<tr><th class="profile__key">Chefdesigner</th><td class="profile__value"></td>' +
            '</tr>' +
            '</tbody></table>');
          editor.editable().find('.profile__value').getItem(0).setStyle('width', '200px')
        }
      });
      editor.addCommand('infiniteprofilecelebrity', {
        exec: function (editor) {
          editor.insertHtml('<table class="profile profile--celebrity">' +
            '<tbody>' +
            '<tr><th class="profile__key">Name</th><td class="profile__value"></td>' +
            '<tr><th class="profile__key">Geburtstag</th><td class="profile__value"></td>' +
            '<tr><th class="profile__key">Geburtsort</th><td class="profile__value"></td>' +
            '<tr><th class="profile__key">Sternzeichen</th><td class="profile__value"></td>' +
            '<tr><th class="profile__key">Größe</th><td class="profile__value"></td>' +
            '<tr><th class="profile__key">Beruf</th><td class="profile__value"></td>' +
            '</tr>' +
            '</tbody></table>');
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

})(jQuery, Drupal, CKEDITOR);
