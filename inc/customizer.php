<?php

function car_rental_customizer_settings($wp_customize)
{
    /**
     * Site Identity Settings
     */
    // Logo
    $wp_customize->add_setting('company_logo');
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'company_logo',
        array(
            'label' => 'Company Logo',
            'section' => 'title_tagline',
            'settings' => 'company_logo',
        )
    ));
    /**
     * Company Details
     */
    // Add Company Details Section
    $wp_customize->add_section('company_details', array(
        'title' => 'Company Details',
        'description' => '',
        'priority' => 30,
    ));
    // Contact Email
    $wp_customize->add_setting('contact_email');
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'contact_email',
        array(
            'label' => 'Contact Email',
            'section' => 'company_details',
            'settings' => 'contact_email',
            'type' => 'text'
        )
    ));
    // Contact Telephone Number
    $wp_customize->add_setting('contact_telephone');
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'contact_telephone',
        array(
            'label' => 'Contact Telephone Number',
            'section' => 'company_details',
            'settings' => 'contact_telephone',
            'type' => 'text'
        )
    ));


    // Opening Times

    $wp_customize->add_setting('monday');
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'monday',
        array(
            'label' => 'Monday Opening Times',
            'section' => 'company_details',
            'settings' => 'monday',
            'type' => 'text'
        )
    ));

    $wp_customize->add_setting('tuesday');
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'tuesday',
        array(
            'label' => 'Tuesday Opening Times',
            'section' => 'company_details',
            'settings' => 'tuesday',
            'type' => 'text'
        )
    ));

    $wp_customize->add_setting('wednesday');
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'wednesday',
        array(
            'label' => 'Wednesday Opening Times',
            'section' => 'company_details',
            'settings' => 'wednesday',
            'type' => 'text'
        )
    ));

    $wp_customize->add_setting('thursday');
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'thursday',
        array(
            'label' => 'Thursday Opening Times',
            'section' => 'company_details',
            'settings' => 'thursday',
            'type' => 'text'
        )
    ));

    $wp_customize->add_setting('friday');
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'friday',
        array(
            'label' => 'Friday Opening Times',
            'section' => 'company_details',
            'settings' => 'friday',
            'type' => 'text'
        )
    ));

    $wp_customize->add_setting('saturday');
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'saturday',
        array(
            'label' => 'Saturday Opening Times',
            'section' => 'company_details',
            'settings' => 'saturday',
            'type' => 'text'
        )
    ));

    $wp_customize->add_setting('sunday');
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'sunday',
        array(
            'label' => 'Sunday Opening Times',
            'section' => 'company_details',
            'settings' => 'sunday',
            'type' => 'text'
        )
    ));

    $wp_customize->add_setting('text');
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'text',
        array(
            'label' => 'Footer text',
            'section' => 'company_details',
            'settings' => 'text',
            'type' => 'textarea'
        )
    ));

    function themeslug_sanitize_dropdown_pages($page_id, $setting)
    {
        $page_id = absint($page_id);
        return ('publish' == get_post_status($page_id) ? $page_id : $setting->default);
    }
}

add_action('customize_register', 'car_rental_customizer_settings');
