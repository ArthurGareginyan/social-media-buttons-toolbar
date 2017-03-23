/*
 * JS functions for plugin settings page
 *
 * Copyright (c) 2016-2017 Arthur Gareginyan ( http://www.arthurgareginyan.com ).
 * All Rights Reserved.
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

    // Enable Bootstrap Tooltips
    $('[data-toggle="tooltip"]').tooltip();

    // Dynamic content
    $( ".include-tab-author" ).load( "http://mycyberuniverse.com/public-files/dynamic-content/page-for-include.html #include-tab-author" );
    $( ".include-tab-support" ).load( "http://mycyberuniverse.com/public-files/dynamic-content/page-for-include.html #include-tab-support" );
    $( ".include-tab-family" ).load( "http://mycyberuniverse.com/public-files/dynamic-content/page-for-include.html #include-tab-family" );
    $( ".additional-css" ).load( "http://mycyberuniverse.com/public-files/dynamic-content/styles.html" );

});
