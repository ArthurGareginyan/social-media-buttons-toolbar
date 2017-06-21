/*
 * Plugin JavaScript and jQuery code for the admin pages of website
 *
 * @package     Social Media Follow Buttons Bar
 * @uthor       Arthur Gareginyan
 * @link        https://www.arthurgareginyan.com
 * @copyright   Copyright (c) 2016-2017 Arthur Gareginyan. All Rights Reserved.
 * @since       4.12.1
 */


jQuery(document).ready(function($) {

    "use strict";

    // Remove the "successful" message after 3 seconds
    if (".updated") {
        setTimeout(function() {
            $(".updated").fadeOut();
        }, 3000);
    }

    // Enable Bootstrap Checkboxes
    $(':checkbox').checkboxpicker();

    // Dynamic content
    $( ".include-tab-author" ).load( "https://mycyberuniverse.com/public-files/dynamic-content/page-for-include.html #include-tab-author" );
    $( ".include-tab-support" ).load( "https://mycyberuniverse.com/public-files/dynamic-content/page-for-include.html #include-tab-support" );
    $( ".include-tab-family" ).load( "https://mycyberuniverse.com/public-files/dynamic-content/page-for-include.html #include-tab-family" );
    $( ".additional-css" ).load( "https://mycyberuniverse.com/public-files/dynamic-content/styles.html" );

    // Add questions and answers into spoilers and color them in different colors
    $(".panel-group .panel").each(function(i) {
         $( ".question-" + (i+1) ).appendTo( $("h4", this) );
         $( ".answer-" + (i+1) ).appendTo( $(".panel-body", this) );

         if ( $(this).find("h4 div").hasClass('question-red') ) {
             $(this).addClass('panel-danger');
         } else {
             $(this).addClass('panel-info');
         }
    });

});
