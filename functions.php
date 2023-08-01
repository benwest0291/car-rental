<?php

/**
 *
 * Stylesheets and Scripts
 *
 */

function add_theme_scripts()
{
    // Styles
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.css', array(), '1');
    wp_enqueue_style('slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), '1');
    wp_enqueue_style("poppins", "//fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Open+Sans&family=Poppins:wght@200;300;400;500;600;700;800;900&family=Raleway:wght@100;200;300;400;500;600;700;800&family=Sofia&display=swap");
    wp_enqueue_style('styles', get_stylesheet_directory_uri() . '/assets/css/styles.css', array(), '1.1');

    // Scripts
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.5.1.min.js', array(), '3.5.1', true);
    wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js', array('jquery'), '2.11.6', true);
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js', array('jquery'), '5.2.3', true);
    wp_enqueue_script('slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.js', array('jquery'), '1.8.1', true);
    wp_register_script('custom', get_stylesheet_directory_uri() . '/assets/js/custom.js', array('jquery'), '1', true);

    wp_enqueue_script('custom');
    wp_enqueue_script('font-awesome', 'https://kit.fontawesome.com/ff41bfe92a.js', array(), '6.2.0', true);
}

add_action('wp_enqueue_scripts', 'add_theme_scripts');

/**
 *
 * Site setup
 *
 */
function car_rental_setup()
{
    // Register navigation menus.
    register_nav_menus(
        array(
            'header' => esc_html__('Header Menu', 'car-rental'),
            'footer' => esc_html__('Footer Menu', 'car-rental'),
        )
    );
}

add_action("after_setup_theme", "car_rental_setup");

//    add_theme_support("title-tag");
//    add_theme_support("post-thumbnails");


/**
 *
 * Register Customizer Fields
 *
 */
require_once(get_template_directory() . '/inc/customizer.php');



/**
 *
 * Render Masthead
 *
 */
function render_masthead($prefix = "", $args = array())
{
    $defaults = array(
        "masthead_bg_image" => get_field($prefix . "_masthead_bg_image"),
        "masthead_small_heading" => get_field($prefix . "_masthead_small_heading"),
        "masthead_main_heading" => get_field($prefix . "_masthead_main_heading"),
        "masthead_paragraph" => get_field($prefix . "_masthead_paragraph"),
        "masthead_image" => get_field($prefix . "_masthead_image"),
        "masthead_left_button_heading" => get_field($prefix . "_masthead_left_button_heading"),
        "masthead_left_button_url" => get_field($prefix . "_masthead_left_button_url"),
        "masthead_right_button_heading" => get_field($prefix . "_masthead_right_button_heading"),
        "masthead_right_button_url" => get_field($prefix . "_masthead_right_button_url"),
    );

    $data = array_merge($defaults, $args);

    include(get_template_directory() . "/inc/blocks/masthead.php");
    unset($data);
}


/**
 *
 * Render Banner
 *
 */
function render_banner($prefix = "", $args = array())
{
    $defaults = array(
        "banner_heading" => get_field($prefix . "_banner_heading"),
        "banner_paragraph" => get_field($prefix . "_banner_paragraph"),
        "banner_image" => get_field($prefix . "_banner_image"),
    );

    $data = array_merge($defaults, $args);

    include(get_template_directory() . "/inc/blocks/download-banner.php");
    unset($data);
}



/**
 *
 * Render Trip Planner
 *
 */
function render_trip_planner($prefix = "", $args = array())
{
    $defaults = array(
        "trip_plan_small_heading" => get_field($prefix . "_trip_plan_small_heading"),
        "trip_plan_main_heading" => get_field($prefix . "_trip_plan_main_heading"),
        "trip_plan_image_one" => get_field($prefix . "_trip_plan_image_one"),
        "trip_plan_title_one" => get_field($prefix . "_trip_plan_title_one"),
        "trip_plan_paragraph_one" => get_field($prefix . "_trip_plan_paragraph_one"),
        "trip_plan_image_two" => get_field($prefix . "_trip_plan_image_two"),
        "trip_plan_title_two" => get_field($prefix . "_trip_plan_title_two"),
        "trip_plan_paragraph_two" => get_field($prefix . "_trip_plan_paragraph_two"),
        "trip_plan_image_three" => get_field($prefix . "_trip_plan_image_three"),
        "trip_plan_title_three" => get_field($prefix . "_trip_plan_title_three"),
        "trip_plan_paragraph_three" => get_field($prefix . "_trip_plan_paragraph_three"),

    );

    $data = array_merge($defaults, $args);

    include(get_template_directory() . "/inc/blocks/trip-plan.php");
    unset($data);
}


/**
 *
 * Render Large Strapline
 *
 */
function render_large_strapline($prefix = "", $args = array())
{
    $defaults = array(
        "strapline_heading" => get_field($prefix . "_strapline_heading"),
        "strapline_paragraph" => get_field($prefix . "_strapline_paragraph"),
    );

    $data = array_merge($defaults, $args);

    include(get_template_directory() . "/inc/blocks/large-strapline.php");
    unset($data);
}



/**
 *
 * Render Deals
 *
 */
function render_deals($prefix = "", $args = array())
{
    $defaults = array(
        "deals_main_image" => get_field($prefix . "_deals_main_image"),
        "deals_small_heading" => get_field($prefix . "_deals_small_heading"),
        "deals_main_heading" => get_field($prefix . "_deals_main_heading"),
        "deals_paragraph" => get_field($prefix . "_deals_paragraph"),
        "deals_button_text" => get_field($prefix . "_deals_button_text"),
        "deals_button_url" => get_field($prefix . "_deals_button_url"),

        "deals_image_one" => get_field($prefix . "_deals_image_one"),
        "deals_heading_one" => get_field($prefix . "_deals_heading_one"),
        "deals_paragraph_one" => get_field($prefix . "_deals_paragraph_one"),

        "deals_image_two" => get_field($prefix . "_deals_image_two"),
        "deals_heading_two" => get_field($prefix . "_deals_heading_two"),
        "deals_paragraph_two" => get_field($prefix . "_deals_paragraph_two"),

        "deals_image_three" => get_field($prefix . "_deals_image_three"),
        "deals_heading_three" => get_field($prefix . "_deals_heading_three"),
        "deals_paragraph_three" => get_field($prefix . "_deals_paragraph_three"),
    );

    $data = array_merge($defaults, $args);

    include(get_template_directory() . "/inc/blocks/deals.php");
    unset($data);
}


/**
 *
 * Testimonials block
 *
 */
function render_testimonials_block($prefix = "", $args = array())
{
    $defaults = array(
        "testimonials_small_heading" => get_field($prefix . "_testimonials_small_heading"),
        "testimonials_main_heading" => get_field($prefix . "_testimonials_main_heading"),
        "testimonials_paragraph" => get_field($prefix . "_testimonials_paragraph"),
    );

    $data = array_merge($defaults, $args);

    include(get_template_directory() . "/inc/blocks/testimonials.php");
    unset($data);
}


/**
 *
 * Site banner
 *
 */
function render_site_banner($prefix = "", $args = array())
{
    $defaults = array(
        "banner_heading" => get_field($prefix . "_banner_heading"),
        "background_image" => get_field($prefix . "_background_image"),
    );

    $data = array_merge($defaults, $args);

    include(get_template_directory() . "/inc/blocks/banner.php");
    unset($data);
}


/**
 *
 * About block
 *
 */

function render_about_block($prefix = "", $args = array())
{
    $defaults = array(
        "about_image" => get_field($prefix . "_about_image"),
        "about_small_heading" => get_field($prefix . "_about_small_heading"),
        "about_main_heading" => get_field($prefix . "_about_main_heading"),
        "about_paragraph" => get_field($prefix . "_about_paragraph"),

        "about_icon_one" => get_field($prefix . "_about_icon_one"),
        "about_service_number_one" => get_field($prefix . "_about_service_number_one"),
        "about_service_one" => get_field($prefix . "_about_service_one"),

        "about_icon_two" => get_field($prefix . "_about_icon_two"),
        "about_service_number_two" => get_field($prefix . "_about_service_number_two"),
        "about_service_two" => get_field($prefix . "_about_service_two"),

        "about_icon_three" => get_field($prefix . "_about_icon_three"),
        "about_service_number_three" => get_field($prefix . "_about_service_number_three"),
        "about_service_three" => get_field($prefix . "_about_service_three"),
    );

    $data = array_merge($defaults, $args);

    include(get_template_directory() . "/inc/blocks/about.php");
    unset($data);
}


/**
 *
 * Strapline
 *
 */

function render_strapline($prefix = "", $args = array())
{
    $defaults = array(
        "strapline_background_image" => get_field($prefix . "_strapline_background_image"),
        "strapline_text" => get_field($prefix . "_strapline_text"),
    );

    $data = array_merge($defaults, $args);

    include(get_template_directory() . "/inc/blocks/strapline.php");
    unset($data);
}


/**
 *
 * FAQ block
 *
 */
function render_faq_block($prefix = "", $args = array())
{
    $defaults = array(
        "faq_small_heading" => get_field($prefix . "_faq_small_heading"),
        "faq_main_heading" => get_field($prefix . "_faq_main_heading"),
        "faq_paragraph" => get_field($prefix . "_faq_paragraph"),
        "faq_side_image" => get_field($prefix . "_faq_side_image")
    );

    $data = array_merge($defaults, $args);

    include(get_template_directory() . "/inc/blocks/faq.php");
    unset($data);
}


/**
 *
 * Rental block
 *
 */
function render_rental_fleet_block($prefix = "", $args = array())
{
    $defaults = array(
        "rental_fleet_small_heading" => get_field($prefix . "_rental_fleet_small_heading"),
        "rental_fleet_main_heading" => get_field($prefix . "_rental_fleet_main_heading"),
        "rental_fleet_paragraph" => get_field($prefix . "_rental_fleet_paragraph"),
    );

    $data = array_merge($defaults, $args);

    include(get_template_directory() . "/inc/blocks/rental-fleet.php");
}


if (function_exists('acf_add_options_page')) {

    acf_add_options_page();
}


/**
 *
 * Turn acf image from number to url
 *
 */
function custom_acf_rest_api_image_format($value, $post_id, $field)
{
    // Get the full image object from the ID using wp_get_attachment_image_src()
    $image = wp_get_attachment_image_src($value, 'full');
    // Return an array with the image URL and other metadata
    return array(
        'url' => $image[0],
        'width' => $image[1],
        'height' => $image[2],
        'alt' => get_post_meta($value, '_wp_attachment_image_alt', true)
    );
}

// Hook the filter function to the acf/rest/format_value_for_rest/type=image filter
add_filter('acf/rest/format_value_for_rest/type=image', 'custom_acf_rest_api_image_format', 10, 3);
