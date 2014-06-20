<?php
/**
 * @file
 * Default settings for NeonTABS core, ZZ API
 */

// API SETTINGS.
$api = array(
  'tabs_api_default_brandcode' => 'ZZ',
  'tabs_io_config_api_api_key' => 'mouse',
  'tabs_io_config_api_base_url' => 'http://zz.api.carltonsoftware.co.uk',
  'tabs_io_config_api_sagepay_mode' => 'Test',
  'tabs_io_config_api_secret' => 'cottage',
  'tabs_io_config_cache_timeout' => '15',
  'tabs_io_config_company_email' => 'dummyemail@foo.com',
  'tabs_io_config_company_name' => 'NeonTABS',
  'tabs_io_config_sagepay_vendor' => 'dummy',
);

// MODULES TO AUTO-ENABLE.
$modules = array(
  'neontabs_permissions',
  // 'neontabs_guestbook',
  'neontabs_search',
  'neontabs_property_highlights',
  'neontabs_teaser',
  'neontabs_property_info',
  'neontabs_featured_image_link',
  'neontabs_carousel',
  'neontabs_menus',
  'neontabs_glance',
  'neontabs_arealoc_page',
  // 'neontabs_blog',
  // 'tagclouds',
);

// THEMES.
$theme = 'neontabs';
$admin_theme = 'seven';

$variables = array(
  // SITE.
  'default_nodes_main' => 1,
  'clean_urls' => 0,
  // BOOKING.
  'tabs_booking_enable_production_css' => FALSE,
  'tabs_booking_enable_jquery_ui_css' => FALSE,
  'jquery_update_jquery_version' => '1.8',
  // PROPERTY INFO FULL VIEW OPTIONS.
  'neontabs_property_info_cottage' => array(
    'propref',
    'county',
    'town',
  ),
  'neontabs_property_info_prices' => array(
    'price-from',
  ),
  'neontabs_property_info_images' => array(
    'images',
  ),
  'neontabs_property_info_stack' => array(
    'bedrooms',
    'changeoverday',
    'sleeps',
    'pets',
  ),
  'neontabs_property_info_offers' => array(
    'specialoffer',
  ),
  'neontabs_property_info_shortdesc' => array(
    'rating',
    'short',
  ),
  'neontabs_property_info_description' => array(
    'description',
    'attributes',
    'address',
  ),
  // PROPERTY INFO TEASER VIEW OPTIONS.
  'neontabs_teaser_pricing_text' => '7 nights from',
  'neontabs_teaser_options' => array(
    'town' => 'town',
    'county' => 'county',
    'pricefrom' => 'pricefrom',
    'rating' => 'rating',
    'specialoffer' => 'specialoffer',
  ),
  'neontabs_teaser_extras' => array(
    'bedrooms',
    'changeoverday',
    'sleeps',
    'pets',
    'attributes',
  ),
  // META AND PUBLISHING INFO.
  // BASIC PAGE.
  // Publication info, 0 = hide, 1 = show,
  'node_submitted_page' => 0,
  // Don't promote to front page,
  'node_options_page' => array('status'),
  // Hide the commenting facility,
  'comment_page' => COMMENT_NODE_CLOSED,
  // ARTICLE.
  'node_submitted_article' => 0,
  'node_options_article' => array('status'),
  'comment_article' => COMMENT_NODE_CLOSED,
  // WEBFORM.
  'node_submitted_webform' => 0,
  'node_options_webform' => array('status'),
  'comment_webform' => COMMENT_NODE_CLOSED,
  // SEARCH OPTIONS.
  // QUICK SEARCH.
  'neontabs_quick_search_options' => array(
    'fromDate' => 'fromDate',
    'nights' => 'nights',
    'accommodates' => 'accommodates',
    'pets' => 'pets',
    'name' => 'name',
    'area' => 'area',
    'location' => 'location',
    'attributes' => 'attributes',
  ),
  // ADVANCED SEARCH.
  'neontabs_adv_search_options' => array(
    'fromDate' => 'fromDate',
    'nights' => 'nights',
    'accommodates' => 'accommodates',
    'pets' => 'pets',
    'name' => 'name',
    'area' => 'area',
    'location' => 'location',
    'attributes' => 'attributes',
  ),
  // AREA PAGE MENU OPTIONS.
  'neontabs_arealoc_page_area_menu' => 'neontabs-main-menu:0',
  'neontabs_arealoc_page_location_menu' => '',
  // AREA PAGE AUTOCREATE.
  'neontabs_arealoc_page_area_auto' => TRUE,
  'neontabs_arealoc_page_area_alias' => 'cottages/[areaslug]',
  'neontabs_arealoc_page_area_title' => '[areaname] Holiday Cottages | [brandname]',
  'neontabs_arealoc_page_area_meta' => 'Holiday Cottages in [areaname]',

  // LOCATION PAGE AUTOCREATE.
  'neontabs_arealoc_page_location_auto' => TRUE,
  'neontabs_arealoc_page_location_alias' => 'cottages/[areaslug]/[locationslug]',
  'neontabs_arealoc_page_location_title' => '[locationname] Holiday Cottages | [brandname]',
  'neontabs_arealoc_page_location_meta' => 'Holiday Cottages in [locationname]',

);

/** ADD Custom attributes to search form 
$search_custom = array(   
  'ATTR01' => array(
    'alt_label' => '',
    'min_num' => '',
    'max_num' => '',
    'select_options' => '',
    'display_location' => array(
      'quicksearch' => 'quicksearch',
      'advancedsearch' => 'advancedsearch',
    ),
  ),
);
$variables['neontabs_search_data'] = serialize($search_custom);
  
// CUSTOM ATTRIBUTES FOR PROPERTY PAGE AND TEASER
$variables['neontabs_property_info_data'] = array(
  'ATTR01' => array(
    'alt_label' => '',
    'emptytext' => 'Not Specified',
    'display_loc' => array(
      'fullview' => 'fullview',
      'teaserview' => 'teaserview',
    ),
  ),
);
  
$variables['neontabs_property_info_data'] =
  serialize($variables['neontabs_property_info_data']);

**/

// DO NOT CHANGE.
$variables['neontabs_property_info'] = array_merge(
  $variables['neontabs_property_info_cottage'],
  $variables['neontabs_property_info_prices'],
  $variables['neontabs_property_info_images'],
  $variables['neontabs_property_info_stack'],
  $variables['neontabs_property_info_offers'],
  $variables['neontabs_property_info_shortdesc'],
  $variables['neontabs_property_info_description']
);

// NEONTABS MENUS SETTINGS.
// PAGES TO GENERATE.
$menus['pages'] = array(
  'neontabs_menus_privacy' => array(
    'title' => 'Privacy Policy',
    'alias' => 'privacy',
    'content' => 'Please add your privacy policy here',
  ),
  'neontabs_menus_faq' => array(
    'title' => 'Frequently Asked Questions',
    'alias' => 'faq',
    'content' => 'Please add your Frequently Asked Questions here',
  ),
  'neontabs_menus_tandc' => array(
    'title' => 'Terms and Conditions',
    'alias' => 'terms-and-conditions',
    'content' => 'Please add your Terms and Conditions here',
  ),
  'neontabs_menus_accessibility' => array(
    'title' => 'Accessibility',
    'alias' => 'accessibility',
    'content' => 'Please add your accessibility statement here',
  ),
  'neontabs_menus_contact' => array(
    'title' => 'Contact Us',
    'alias' => 'contact-us',
    'content' => 'Please add your contact details here',
  ),
  'neontabs_menus_letting' => array(
    'title' => 'Let Your Property',
    'alias' => 'let-your-property',
    'content' => 'Please add your "Let your property" information here',
  ),
  'neontabs_menus_booking' => array(
    'title' => 'Booking Information',
    'alias' => 'booking-info',
    'content' => 'Please add your "Booking Information" here',
  ),
  'neontabs_menus_home' => array(
    'title' => 'Welcome to the NeonTABS Demo',
    'alias' => 'about-us',
    'content' => 'This demonstration site is an example of the NeonTABS Drupal project for providing TABS-compatible cottage holiday website. This post represents the Welcome section of a holiday cottage website.',
  ),
);

// LOCATIONS MENU (Footer Left).
// Menu contents.
$menus['neontabs_areas_menu'] = array();

// MAIN NAVIGATION (Top Right).
$menus['neontabs_main_menu'] = array();

$menus['neontabs_top_menu'] = array(
  array(
    'page' => 'neontabs_menus_booking',
    'title' => 'Booking Information',
    'weight' => 2,
  ),
  array(
    'link' => 'shortlist',
    'title' => 'Shortlist',
    'weight' => 3,
  ),
  array(
    'page' => 'neontabs_menus_contact',
    'title' => 'Contact Us',
    'weight' => 4,
  ),
  array(
    'page' => 'neontabs_menus_letting',
    'title' => 'Let Your Property',
    'weight' => 5,
  ),
);

// FOOTER MENU (Middle Footer).
$menus['neontabs_footer_menu'] = array(
  array(
    'page' => 'neontabs_menus_contact',
    'title' => 'Contact Us',
    'weight' => 0,
  ),
  array(
    'page' => 'neontabs_menus_letting',
    'title' => 'Let Your Property',
    'weight' => 0,
  ),
  array(
    'page' => 'neontabs_menus_faq',
    'title' => 'Frequently Asked Questions',
    'weight' => 0,
  ),
  array(
    'page' => 'neontabs_menus_privacy',
    'title' => 'Privacy Policy',
    'weight' => 1,
  ),
  array(
    'page' => 'neontabs_menus_accessibiligty',
    'title' => 'Accessibility',
    'weight' => 1,
  ),
  array(
    'page' => 'neontabs_menus_tandc',
    'title' => 'Terms and Conditions',
    'weight' => 1,
  ),
);

$frontpage = 'neontabs_menus_home';
