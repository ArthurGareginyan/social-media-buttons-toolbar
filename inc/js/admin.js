/*
 * JS functions for plugin settings page
 *
 * Copyright (c) 2016 Arthur Gareginyan ( http://www.arthurgareginyan.com ).
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

    // Bootstrap Checkbox
    $(':checkbox').checkboxpicker();

});
