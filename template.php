<?php

/**
 * Add body classes if certain regions have content.
 */
function nothingmore_preprocess_html(&$variables) {
  if (!empty($variables['page']['featured'])) {
    $variables['classes_array'][] = 'featured';
  }

 }

  // Add conditional stylesheets for IE
  drupal_add_css(path_to_theme() . '/css/ie.css', array('group' => CSS_THEME, 'browsers' => array('IE' => 'lte IE 7', '!IE' => FALSE), 'preprocess' => FALSE));
  drupal_add_css(path_to_theme() . '/css/ie6.css', array('group' => CSS_THEME, 'browsers' => array('IE' => 'IE 6', '!IE' => FALSE), 'preprocess' => FALSE));


/**
 * Override or insert variables into the page template for HTML output.
 */
function nothingmore_process_html(&$variables) {
 
}

/**
 * Override or insert variables into the page template.
 */
function nothingmore_process_page(&$variables) {
}

/**
 * Implements hook_preprocess_maintenance_page().

function nothingmore_preprocess_maintenance_page(&$variables) {
  // By default, site_name is set to Drupal if no db connection is available
  // or during site installation. Setting site_name to an empty string makes
  // the site and update pages look cleaner.
  // @see template_preprocess_maintenance_page
  if (!$variables['db_is_active']) {
    $variables['site_name'] = '';
  }
  drupal_add_css(drupal_get_path('theme', 'nothingmore') . '/css/maintenance-page.css');
}
 */

/**
 * Override or insert variables into the node template.
 */
function nothingmore_preprocess_node(&$variables) {

}

/**
 * Override or insert variables into the block template.
 */
function nothingmore_preprocess_block(&$variables) {
}
