/**
 * Gluon Theme - Admin Settings Page Scripts
 *
 * Handles media uploader for logo selection.
 *
 * @package Gluon_Theme
 * @since 1.0.0
 */

(function ($) {
    'use strict';

    $(document).ready(function () {
        // Handle upload button click
        $('.gluon-logo-upload').on('click', '.gluon-upload-button', function (e) {
            e.preventDefault();

            var $container = $(this).closest('.gluon-logo-upload');
            var targetId = $container.data('target');
            var $input = $('#' + targetId);
            var $preview = $('#' + targetId + '_preview');
            var $removeBtn = $container.find('.gluon-remove-button');

            var mediaUploader = wp.media({
                title: 'Select Logo',
                button: {
                    text: 'Use this logo'
                },
                multiple: false
            });

            mediaUploader.on('select', function () {
                var attachment = mediaUploader.state().get('selection').first().toJSON();
                $input.val(attachment.id);
                $preview.html('<img src="' + attachment.url + '" alt="">');
                $removeBtn.show();
            });

            mediaUploader.open();
        });

        // Handle remove button click
        $('.gluon-logo-upload').on('click', '.gluon-remove-button', function (e) {
            e.preventDefault();

            var $container = $(this).closest('.gluon-logo-upload');
            var targetId = $container.data('target');
            var $input = $('#' + targetId);
            var $preview = $('#' + targetId + '_preview');

            $input.val('');
            $preview.empty();
            $(this).hide();
        });
    });

})(jQuery);
