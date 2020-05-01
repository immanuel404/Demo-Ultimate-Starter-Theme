<?php

function wpb_customize_register($wp_customize) {
	// SHOW SECTION
	$wp_customize->add_section('showcase', array(
		'title' => __('Showcase', 'wpbootstrap'),
		'description' => sprintf(__('Options for the showcase', 'wpbootstrap')),
		'priority' => 130	
	));

	// To Edit HOME-Page HEADER
	$wp_customize->add_setting('showcase_image', array(
		'default' => get_bloginfo('template_directory').'/usa1.jpg',
		'type' => 'theme_mod'
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image', array(
		'label' => __('Homepage Image', 'wpbootstrap'),
		'section' => 'showcase',
		'settings' => 'showcase_image',
		'priority' => 1
	)));

	$wp_customize->add_setting('showcase_heading', array(
		'default' => _x('Ultimate Starter Theme', 'wpbootstrap'),
		'type' => 'theme_mod'
	));
	$wp_customize->add_control('showcase_heading', array(
		'label' => __('Heading', 'wpbootstrap'),
		'section' => 'showcase',
		'priority' => 2
	));


	$wp_customize->add_setting('showcase_text', array(
		'default' => _x('A easy-to-use WordPress Theme that provides all the essentails. With a Modern Design & Clean User Experience.', 'wpbootstrap'),
		'type' => 'theme_mod'
	));
	$wp_customize->add_control('showcase_text', array(
		'label' => __('Text', 'wpbootstrap'),
		'section' => 'showcase',
		'priority' => 3
	));


	$wp_customize->add_setting('btn_url', array(
		'default' => _x('http://test.com', 'wpbootstrap'),
		'type' => 'theme_mod'
	));
	$wp_customize->add_control('btn_url', array(
		'label' => __('Button Url', 'wpbootstrap'),
		'section' => 'showcase',
		'priority' => 4
	));


	$wp_customize->add_setting('btn_text', array(
		'default' => _x('Customize', 'wpbootstrap'),
		'type' => 'theme_mod'
	));
	$wp_customize->add_control('btn_text', array(
		'label' => __('Button Text', 'wpbootstrap'),
		'section' => 'showcase',
		'priority' => 5
	));

	// To Edit BLOG-Page HEADER
	$wp_customize->add_setting('showcase_image2', array(
		'default' => get_bloginfo('template_directory').'/usa2.jpg',
		'type' => 'theme_mod'
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image2', array(
		'label' => __('Blog Page Image', 'wpbootstrap'),
		'section' => 'showcase',
		'settings' => 'showcase_image2',
		'priority' => 6
	)));

	$wp_customize->add_setting('showcase_heading2', array(
		'default' => _x('Ultimate Starter Theme', 'wpbootstrap'),
		'type' => 'theme_mod'
	));
	$wp_customize->add_control('showcase_heading2', array(
		'label' => __('Heading', 'wpbootstrap'),
		'section' => 'showcase',
		'priority' => 7
	));


	$wp_customize->add_setting('showcase_text2', array(
		'default' => _x('A easy-to-use WordPress Theme that provides all the essentails. With a Modern Design & Clean User Experience.', 'wpbootstrap'),
		'type' => 'theme_mod'
	));
	$wp_customize->add_control('showcase_text2', array(
		'label' => __('Text', 'wpbootstrap'),
		'section' => 'showcase',
		'priority' => 8
	));


}
	add_action('customize_register', 'wpb_customize_register');



