/*
 * Plugin JavaScript and jQuery code for the admin pages of website
 *
 * @package     Social Media Follow Buttons Bar
 * @uthor       Arthur Gareginyan
 * @link        https://www.arthurgareginyan.com
 * @copyright   Copyright (c) 2016-2017 Arthur Gareginyan. All Rights Reserved.
 * @since       4.15
 */


jQuery(document).ready(function($) {

    "use strict";

    // Remove the 'successful' message after 3 seconds
    if ('.updated') {
        setTimeout(function() {
            $('.updated').fadeOut();
        }, 3000);
    }

    // Enable Bootstrap Checkboxes
    $(':checkbox').checkboxpicker();

    // Add dynamic content to page tabs. Needed for having an up to date content.
    $('.include-tab-author').load('https://www.spacexchimp.com/assets/dynamic-content/plugins.html #include-tab-author');
    $('.include-tab-support').load('https://www.spacexchimp.com/assets/dynamic-content/plugins.html #include-tab-support');
    $('.include-tab-store').load('https://www.spacexchimp.com/assets/dynamic-content/plugins.html #include-tab-store');
    $('.include-banner').load('https://www.spacexchimp.com/assets/dynamic-content/plugins.html #include-banner');

    // Add questions and answers into spoilers and color them in different colors
    $('.panel-group .panel').each(function(i) {
         $('.question-' + (i+1) ).appendTo( $('h4', this) );
         $('.answer-' + (i+1) ).appendTo( $('.panel-body', this) );

         if ( $(this).find('h4 div').hasClass('question-red') ) {
             $(this).addClass('panel-danger');
         } else {
             $(this).addClass('panel-info');
         }
    });

    // Live preview
    $('.new_tab').on('change', function() {
        var val = $(this).val();
        var position = $(this).next().children().hasClass('btn-success');
        $('#preview .smbt-social-icons a').each(function( index ) {
            if (position === true) {
                $(this).attr('target','_blank');
            } else {
                $(this).removeAttr('target');
            }
        });
    });

    $('.tooltips').on('change', function() {
        var val = $(this).val();
        var position = $(this).next().children().hasClass('btn-success');
        $('#preview .smbt-social-icons a').each(function( index ) {
            var text = '';
            if (position === true) {
                text = $(this).attr('title');
                $(this).attr('data-toggle','tooltip');
                $(this).attr('data-original-title',text);
            } else {
                text = $(this).attr('data-original-title');
                $(this).attr('title',text);
                $(this).removeAttr('data-toggle');
                $(this).removeAttr('data-original-title');
            }
        });
    });

    function LiveInlineStyles() {
        var icon_size = $('.icon-size').val() || '64';
        var margin = $('.margin-right').val() / 2 || '5';
        icon_size = 'width:' + icon_size + 'px !important; height:' + icon_size + 'px !important;';
        margin = 'margin:' + margin + 'px !important;';
        $('#preview .smbt-social-icons img').attr('style',icon_size + margin);
    }

    $('.icon-size').change(function() {
        LiveInlineStyles();
    });

    $('.margin-right').change(function() {
        LiveInlineStyles();
    });

    $('.alignment').change(function() {
        var alignment = $('input[type=radio]:checked', '.alignment').val() || 'center';
        alignment = 'text-align:' + alignment + ' !important;';
        $('#preview .smbt-social-icons').attr('style',alignment);
    });

});
