<?php
class LanyonWP_Functions
{
	public static $instance;

	public static function init()
	{
		if ( is_null( self::$instance ) )
			self::$instance = new LanyonWP_Functions();
		return self::$instance;
	}

	private function __construct()
	{
		add_action( 'wp_enqueue_scripts', array( $this, 'lanyonwp_enqueue_scripts' ) );
		add_action( 'init', array( $this, 'lanyonwp_menus' ) );
		add_action( 'init', array( $this, 'lanyonwp_theme_supports') );
		add_action( 'widgets_init', array( $this, 'lanyonwp_register_sidebars' ) );
		add_action( 'init', array( $this, 'lanyonwp_paginate_links') );
	}

	public function lanyonwp_enqueue_scripts()
	{
		wp_enqueue_style( 'poole-styles', get_template_directory_uri() . '/assets/css/poole.css' );
		wp_enqueue_style( 'syntax-styles', get_template_directory_uri() . '/assets/css/syntax.css' );
		wp_enqueue_style( 'wpcore-styles', get_template_directory_uri() . '/assets/css/wpcore.css' );
		wp_enqueue_style( 'lanyonwp-styles', get_template_directory_uri() . '/assets/css/lanyon.css' );

		wp_enqueue_script( 'jquery' );
	}

	public function lanyonwp_menus()
	{
		register_nav_menu( 'lanyonwp-nav-menu', 'Nav Menu' );
	}

	public function lanyonwp_theme_supports()
	{
		add_theme_support('post-thumbnails');
	}

	public function lanyonwp_register_sidebars() 
	{
		$defaults = array(
			'before_widget' => '<div class="widget %2$s">',
			'after_widget' => '</div>',
		    'before_title' => '<h3 class="widget-title">',
		    'after_title' => '</h3>'
		);
		 
		$sidebars = array(
			array(
		        'id' => 'lanyonwp-sidebar',
		        'name' => __( 'Sidebar' ),
		        'description' => __( 'Primary Widget Area under Menu in Sidebar' ),
		    ),
		);
		 
		foreach ( $sidebars as $sidebar )
		{
		    register_sidebar( array_merge( $defaults, $sidebar ) );
		}
		
	}

	public function lanyonwp_paginate_links()
	{
		add_filter('next_post_link', 'post_link_attributes');
		add_filter('previous_post_link', 'post_link_attributes');
		 
		function post_link_attributes($output) {
		    $code = 'class="pagination-item"';
		    return str_replace('<a href=', '<a '.$code.' href=', $output);
		}

	}

}
LanyonWP_Functions::init();