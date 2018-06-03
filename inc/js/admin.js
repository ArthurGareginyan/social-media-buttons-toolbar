/*
 * Plugin JavaScript and jQuery code for the admin pages of website
 *
 * @package     Social Media Follow Buttons Bar
 * @author      Arthur Gareginyan
 * @link        https://www.spacexchimp.com
 * @copyright   Copyright (c) 2016-2018 Space X-Chimp. All Rights Reserved.
 */


jQuery(document).ready(function($) {

    "use strict";

    // Remove the 'successful' message after 3 seconds
    if ('.updated') {
        setTimeout(function() {
            $('.updated').fadeOut();
        }, 3000);
    }

    // Add dynamic content to page tabs. Needed for having an up to date content.
    $('.include-tab-store').load('https://www.spacexchimp.com/assets/dynamic-content/plugins.html #include-tab-store');

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

    // Enable switches
    $('.control-switch').checkboxpicker();

    // Enable number fields
    $('.control-number .btn-danger').on('click', function(){
        var input = $(this).parent().siblings('input');
        var value = parseInt(input.val());
        input.val(value - 1);
        input.change();
    });
    $('.control-number .btn-success').on('click', function(){
        var input = $(this).parent().siblings('input');
        var value = parseInt(input.val());
        input.val(value + 1);
        input.change();
    });

    // Show/hide fields
    $('#buttons .control-checkbox input').change(function() {
        var this_class = $(this).parent('.control-checkbox').attr('id') + '-url';
        $('#button-links .' + this_class).toggle();
    });

    // Live preview
    $('.new_tab').on('change', function() {
        var val = $(this).val();
        var position = $(this).next().children().hasClass('btn-success');
        $('#preview .sxc-follow-buttons a').each(function( index ) {
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
        $('#preview .sxc-follow-buttons a').each(function( index ) {
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
        var icon_size = $('.icon-size input').val() || '64';
        var margin = $('.margin-right input').val() / 2 || '5';
        icon_size = 'width:' + icon_size + 'px !important; height:' + icon_size + 'px !important;';
        margin = 'margin:' + margin + 'px !important;';
        $('#preview .sxc-follow-buttons img').attr('style',icon_size + margin);
    }
    $('.icon-size input').change(function() {
        LiveInlineStyles();
    });
    $('.margin-right input').change(function() {
        LiveInlineStyles();
    });
    $('.alignment').change(function() {
        var alignment = $('input[type=radio]:checked', '.alignment').val() || 'center';
        alignment = 'text-align:' + alignment + ' !important;';
        $('#preview .sxc-follow-buttons').attr('style',alignment);
    });

});
