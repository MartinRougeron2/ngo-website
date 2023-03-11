<?php

function tourism_guide_remove_customize_register() {
    global $wp_customize;
    $wp_customize->remove_section( 'adventure_travelling_color_option' );
    $wp_customize->remove_section( 'adventure_travelling_documentation' );
    $wp_customize->remove_section( 'adventure_travelling_static_blog_section' );
    $wp_customize->remove_section( 'adventure_travelling_topbar' );
    $wp_customize->remove_setting( 'adventure_travelling_location' );
    $wp_customize->remove_control( 'adventure_travelling_location' );
    $wp_customize->remove_setting( 'adventure_travelling_timming' );
    $wp_customize->remove_control( 'adventure_travelling_timming' );
}
add_action( 'customize_register', 'tourism_guide_remove_customize_register', 11 );

function tourism_guide_customize_register( $wp_customize ) {

    $wp_customize->add_setting('tourism_guide_search_icon',array(
        'default' => false,
        'sanitize_callback' => 'adventure_travelling_sanitize_checkbox'
    ));
    $wp_customize->add_control('tourism_guide_search_icon',array(
        'type' => 'checkbox',
        'label' => __('Show / Hide Search Option','tourism-guide'),
        'section' => 'adventure_travelling_social_media',
    ));

    // Post Section
	$wp_customize->add_section( 'tourism_guide_trip_offer_section' , array(
        'title'      => __( 'Explore Places Settings', 'tourism-guide' ),
        'panel' => 'adventure_travelling_panel_id'
    ) );

    $categories = get_categories();
    $cats = array();
    $i = 0;
    $offer_cat[]= 'select';
    foreach($categories as $category){
        if($i==0){
            $default = $category->slug;
            $i++;
        }
        $offer_cat[$category->slug] = $category->name;
    }

    $wp_customize->add_setting('tourism_guide_explore_section_category',array(
        'default'   => 'select',
        'sanitize_callback' => 'adventure_travelling_sanitize_choices',
    ));
    $wp_customize->add_control('tourism_guide_explore_section_category',array(
        'type'    => 'select',
        'choices' => $offer_cat,
        'label' => __('Select Category','tourism-guide'),
        'section' => 'tourism_guide_trip_offer_section',
    ));

}
add_action( 'customize_register', 'tourism_guide_customize_register' );