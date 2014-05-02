<?php

/**
 * @file
 * Template.php - process theme data for your sub-theme.
 * 
 * Rename each function and instance of "tools_theme" to match
 * your subthemes name, e.g. if you name your theme "tools_theme" then the function
 * name will be "tools_theme_preprocess_hook". Tip - you can search/replace
 * on "[name]_theme".
 */


/**
 * Override or insert variables for the html template.
 *
function [name]_theme_preprocess_html(&$vars) {
}
*/

/*
function [name]_theme_process_html(&$vars) {
}
*/

/*
function [name]_theme_field__commerce_price__product(&$vars) {
} 
*/

/*
function [name]_theme_preprocess_field(&$vars) {
}
*/

/**
 * Override or insert variables for the page templates.
 *
function [name]_theme_preprocess_page(&$vars) {
    dpm($vars);
}
function [name]_theme_process_page(&$vars) {
  dpm($vars);
}
*/


/**
 * Override or insert variables into the node templates.
 */
/* -- Delete this line if you want to use these functions
function [name]_theme_preprocess_node(&$vars) {
}
function [name]_theme_process_node(&$vars) {
}
// */


/**
 * Override or insert variables into the comment templates.
 */
/* -- Delete this line if you want to use these functions
function [name]_theme_preprocess_comment(&$vars) {
}
function [name]_theme_process_comment(&$vars) {
}
// */


/**
 * Override or insert variables into the block templates.
 */
/* -- Delete this line if you want to use these functions
function [name]_theme_preprocess_block(&$vars) {
}

function [name]_theme_process_block(&$vars) {
}
// */
