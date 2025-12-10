<?php
/**
 * Main theme class.
 *
 * @author Themeisle
 * @package edelherzig
 * @since 1.0.0
 */

namespace Edelherzig;

/**
 * Class Core
 *
 * @package edelherzig
 */
class Core {
	/**
	 * Core instance.
	 *
	 * @var Core
	 */
	public static $instance = null;

	/**
	 * Get the static instance of the class.
	 *
	 * @return Core
	 */
	public static function get_instance() {
		if ( null === self::$instance ) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	/**
	 * Core constructor.
	 */
	public function __construct() {
		$this->run_hooks();

		new Admin();
		new Block_Patterns();
		new Block_Styles();
	}

	/**
	 * Initialize hooks.
	 *
	 * @return void
	 */
	private function run_hooks() {
		add_action( 'after_setup_theme', array( $this, 'setup' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue' ) );
		add_action( 'enqueue_block_editor_assets', array( $this, 'add_editor_styles' ) );
		add_filter( 'edelherzig_strings', array( $this, 'strings' ) );
	}

	/**
	 * Setup theme.
	 *
	 * @return void
	 */
	public function setup() {
		load_theme_textdomain( 'edelherzig', EDELHERZIG_DIR . '/languages' );

		$starter_content = new Starter_Content();

		add_theme_support( 'starter-content', $starter_content->get() );
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'editor-styles' );
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		add_theme_support(
			'otter-onboarding',
			array(
				'logo'           => EDELHERZIG_URL . 'assets/img/logo.svg',
				'templates'      => array(
					'archive'    => array(
						'archive-boxed' => array(
							'file'  => EDELHERZIG_DIR . 'library/archive/archive-boxed.php',
							'title' => __( 'Archive Boxed', 'edelherzig' ),
						),
						'archive-cards' => array(
							'file'  => EDELHERZIG_DIR . 'library/archive/archive-cards.php',
							'title' => __( 'Archive Cards', 'edelherzig' ),
						),
						'archive-row'   => array(
							'file'  => EDELHERZIG_DIR . 'library/archive/archive-row.php',
							'title' => __( 'Archive Row', 'edelherzig' ),
						),
					),
					'single'     => array(
						'single-post-centered' => array(
							'file'  => EDELHERZIG_DIR . 'library/single/single-post-centered.php',
							'title' => __( 'Single Post Centered', 'edelherzig' ),
						),
						'single-post-columns'  => array(
							'file'  => EDELHERZIG_DIR . 'library/single/single-post-columns.php',
							'title' => __( 'Single Post Columns', 'edelherzig' ),
						),
						'single-post-cover'    => array(
							'file'  => EDELHERZIG_DIR . 'library/single/single-post-cover.php',
							'title' => __( 'Single Post Cover', 'edelherzig' ),
						),
					),
					'front-page' => array(
						'front-page-alt'   => array(
							'file'  => EDELHERZIG_DIR . 'library/front-end/front-page-2.php',
							'title' => __( 'Homepage 2', 'edelherzig' ),
						),
						'front-page-alt-2' => array(
							'file'  => EDELHERZIG_DIR . 'library/front-end/front-page-3.php',
							'title' => __( 'Homepage 3', 'edelherzig' ),
						),
					),
				),
				'page_templates' => array(
					'about-page'     => array(
						'file'     => EDELHERZIG_DIR . 'library/templates/about-page.php',
						'title'    => __( 'About Page', 'edelherzig' ),
						'template' => 'template-plain',
					),
					'contact-page'   => array(
						'file'     => EDELHERZIG_DIR . 'library/templates/contact-page.php',
						'title'    => __( 'Contact Page', 'edelherzig' ),
						'template' => 'template-plain',
					),
					'portfolio-page' => array(
						'file'     => EDELHERZIG_DIR . 'library/templates/portfolio-page.php',
						'title'    => __( 'Portfolio Page', 'edelherzig' ),
						'template' => 'template-plain',
					),
					'services-page'  => array(
						'file'     => EDELHERZIG_DIR . 'library/templates/services-page.php',
						'title'    => __( 'Services Page', 'edelherzig' ),
						'template' => 'template-plain',
					),
				),
			)
		);

		remove_theme_support( 'core-block-patterns' );

		register_nav_menus( array( 'primary' => esc_html__( 'Primary Menu', 'edelherzig' ) ) );
	}

	/**
	 * Enqueue scripts and styles.
	 *
	 * @return void
	 */
	public function enqueue() {
		Assets_Manager::enqueue_style( Assets_Manager::ASSETS_SLUGS['frontend-css'], 'style' );
	}

	/**
	 * Add editor styles.
	 *
	 * @return void
	 */
	public function add_editor_styles() {
		Assets_Manager::enqueue_style( Assets_Manager::ASSETS_SLUGS['editor-css'], 'editor' );
	}

	/**
	 * Define theme strings.
	 * 
	 * @param array $strings Strings.
	 * @return array
	 */
	public function strings( $strings = array() ) {
		$strings = array(

			// Generic patterns.
			'hero_title'              => __( 'Block Based Themes Made simple', 'edelherzig' ),
			'edelherzig_feature_1'          => __( 'Style Variations', 'edelherzig' ),
			'edelherzig_feature_2'          => __( 'Built-in Patterns', 'edelherzig' ),
			'edelherzig_feature_3'          => __( 'Powered by Blocks', 'edelherzig' ),
			'page_title'              => __( 'This is a page title', 'edelherzig' ),
			'about_page_title'        => __( 'About our Team', 'edelherzig' ),
			'about_me'                => __( 'About me', 'edelherzig' ),
			'services_page_title'     => __( 'Explore our Services', 'edelherzig' ),
			'section_title'           => __( 'This is section title', 'edelherzig' ),
			'subtitle'                => __( 'Subtitle', 'edelherzig' ),
			'section_description'     => __( 'A short section description', 'edelherzig' ),
			'paragraph_text'          => __( 'This is placeholder text, feel free to replace it with your unique content as it\'s included here just to provide you with a better understanding of how your text will fit in the layout. Explore the various patterns and templates as you create your personalized web experience.', 'edelherzig' ),
			'short_text'              => __( 'Just some placeholder text', 'edelherzig' ),

			// Feature patterns.
			'feature_section_title'   => __( 'Showcase your Features and Services', 'edelherzig' ),
			'feature_title'           => __( 'This is feature title', 'edelherzig' ),
			'feature_description'     => __( 'A placeholder description that you can replace with your own content.', 'edelherzig' ),
			'button_text'             => __( 'Button Text', 'edelherzig' ),
			'button_text_2'           => __( 'Get Started', 'edelherzig' ),

			// Team patterns.
			'team_section_title'      => __( 'Our Team', 'edelherzig' ),
			'team_member'             => __( 'Team member name', 'edelherzig' ),
			'member_role'             => __( 'Company role', 'edelherzig' ),

			// Pricing patterns.
			'pricing_section_title'   => __( 'A pricing section. Join premium!', 'edelherzig' ),
			'plan_title'              => __( 'Plan title', 'edelherzig' ),
			'price'                   => __( '$19.99', 'edelherzig' ),
			'price_feature'           => __( 'A pricing feature', 'edelherzig' ),

			// Contact patterns.
			'contact_page_title'      => __( 'Get in touch', 'edelherzig' ),
			'contact_section_title'   => __( 'Contact details', 'edelherzig' ),
			'follow'                  => __( 'Follow us', 'edelherzig' ),
			'contact_details'         => __( 'Contact detail example', 'edelherzig' ),

			// FAQ patterns.
			'faq_section_title'       => __( 'Frequently Asked Questions', 'edelherzig' ),
			'faq_title'               => __( 'Just a frequent question', 'edelherzig' ),

			// Portfolio patterns.
			'portfolio_section_title' => __( 'Selected Portfolio', 'edelherzig' ),
			'portfolio_title'         => __( 'A project title', 'edelherzig' ),
			'portfolio_client'        => __( 'Client Name', 'edelherzig' ),

			// Loops and templates.
			'read_more'               => __( 'Read more', 'edelherzig' ),
			'continue_reading'        => __( 'Continue reading', 'edelherzig' ),
			'no_posts_found'          => __( 'Unfortunately no posts were found', 'edelherzig' ),
			'search_results'          => __( 'Search results', 'edelherzig' ),
			'search_button'           => __( 'Search', 'edelherzig' ),
			'search_placeholder'      => __( 'Search for a keyword...', 'edelherzig' ),
			'404'                     => __( '404', 'edelherzig' ),
			'page_not_found'          => __( 'Unfortunately the page was not found.', 'edelherzig' ),
			'categories'              => __( 'Categories', 'edelherzig' ),
			'read_also'               => __( 'Read also…', 'edelherzig' ),

			// Content Patterns.
			'content_title'           => __( 'A generic content title', 'edelherzig' ),
			'content_subtitle'        => __( 'A content subtitle', 'edelherzig' ),
			'lorem_ipsum_subtitle'    => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'edelherzig' ),

			// Testimonial patterns.
			'testimonial'             => __( '"...Absolutely one of the best services out there, very professional and easy-going experience, highly recommended..."', 'edelherzig' ),
			'testimonial_name'        => __( 'Jason Doe', 'edelherzig' ),

			// CTA patterns.
			'cta_title'               => __( 'Get started today, get in touch!', 'edelherzig' ),
			'edelherzig_cta_title'          => __( 'Create your new website today, with Edelherzig!', 'edelherzig' ),
		);

		return $strings;
	}
}
