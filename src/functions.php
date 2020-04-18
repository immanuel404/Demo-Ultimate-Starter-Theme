	<?php
	// REGISTER
	function register_nazvwalker() {
		require_once get_template_directory() . '/navbar/class-wp-bootstrap-navwalker.php';
	}
	// NAVBAR
	add_action( 'after_setup_theme', 'register_navwalker' );

	// POST IMAGE THUMBNAILS
	add_theme_support('post-thumbnails');

	// POST FORMATS
	add_theme_support('post_formats', array('gallery'));

	
// <!-- CONNECT MENU'S -->
	register_nav_menus(
		array(
	      'top-menu' => 'Top Menu Location',
	      // 'mobile-menu' => 'Mobile Menu Location',
	      // 'footer-menu' => 'Footer Menu Location',
	    )
	);

	// FUNCTION THAT SET EXCERPT LENGTH
	function set_excerpt_length() {
		return 45;
	}
	add_filter('excerpt_length', 'set_excerpt_length');

	// CONNECTS SIDEBARS TO WIDGETS
	function my_sidebars() {
		register_sidebar(array(
			'name' => 'Sidebar',
			'id' => 'page-sidebar',
			'before_widget' => '',
			'after_widget' => '',
			// 'after_title' => '</h4>'
		));
	}
	add_action('widgets_init', 'my_sidebars');

	// CUSTOMISER FILE
	require get_template_directory(). '/inc/customizer.php';