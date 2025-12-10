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
		load_theme_textdomain( 'edelherzig-base', EDELHERZIG_DIR . '/languages' );

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
							'title' => __( 'Archive Boxed', 'edelherzig-base' ),
						),
						'archive-cards' => array(
							'file'  => EDELHERZIG_DIR . 'library/archive/archive-cards.php',
							'title' => __( 'Archive Cards', 'edelherzig-base' ),
						),
						'archive-row'   => array(
							'file'  => EDELHERZIG_DIR . 'library/archive/archive-row.php',
							'title' => __( 'Archive Row', 'edelherzig-base' ),
						),
					),
					'single'     => array(
						'single-post-centered' => array(
							'file'  => EDELHERZIG_DIR . 'library/single/single-post-centered.php',
							'title' => __( 'Single Post Centered', 'edelherzig-base' ),
						),
						'single-post-columns'  => array(
							'file'  => EDELHERZIG_DIR . 'library/single/single-post-columns.php',
							'title' => __( 'Single Post Columns', 'edelherzig-base' ),
						),
						'single-post-cover'    => array(
							'file'  => EDELHERZIG_DIR . 'library/single/single-post-cover.php',
							'title' => __( 'Single Post Cover', 'edelherzig-base' ),
						),
					),
					'front-page' => array(
						'front-page-alt'   => array(
							'file'  => EDELHERZIG_DIR . 'library/front-end/front-page-2.php',
							'title' => __( 'Homepage 2', 'edelherzig-base' ),
						),
						'front-page-alt-2' => array(
							'file'  => EDELHERZIG_DIR . 'library/front-end/front-page-3.php',
							'title' => __( 'Homepage 3', 'edelherzig-base' ),
						),
					),
				),
				'page_templates' => array(
					'about-page'     => array(
						'file'     => EDELHERZIG_DIR . 'library/templates/about-page.php',
						'title'    => __( 'About Page', 'edelherzig-base' ),
						'template' => 'template-plain',
					),
					'contact-page'   => array(
						'file'     => EDELHERZIG_DIR . 'library/templates/contact-page.php',
						'title'    => __( 'Contact Page', 'edelherzig-base' ),
						'template' => 'template-plain',
					),
					'portfolio-page' => array(
						'file'     => EDELHERZIG_DIR . 'library/templates/portfolio-page.php',
						'title'    => __( 'Portfolio Page', 'edelherzig-base' ),
						'template' => 'template-plain',
					),
					'services-page'  => array(
						'file'     => EDELHERZIG_DIR . 'library/templates/services-page.php',
						'title'    => __( 'Services Page', 'edelherzig-base' ),
						'template' => 'template-plain',
					),
				),
			)
		);

		remove_theme_support( 'core-block-patterns' );

		register_nav_menus( array( 'primary' => esc_html__( 'Primary Menu', 'edelherzig-base' ) ) );
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
			'hero_title'              => __( 'Block Based Themes Made simple', 'edelherzig-base' ),
			'edelherzig_feature_1'          => __( 'Style Variations', 'edelherzig-base' ),
			'edelherzig_feature_2'          => __( 'Built-in Patterns', 'edelherzig-base' ),
			'edelherzig_feature_3'          => __( 'Powered by Blocks', 'edelherzig-base' ),
			'page_title'              => __( 'This is a page title', 'edelherzig-base' ),
			'about_page_title'        => __( 'About our Team', 'edelherzig-base' ),
			'about_me'                => __( 'About me', 'edelherzig-base' ),
			'services_page_title'     => __( 'Explore our Services', 'edelherzig-base' ),
			'section_title'           => __( 'This is section title', 'edelherzig-base' ),
			'subtitle'                => __( 'Subtitle', 'edelherzig-base' ),
			'section_description'     => __( 'A short section description', 'edelherzig-base' ),
			'paragraph_text'          => __( 'This is placeholder text, feel free to replace it with your unique content as it\'s included here just to provide you with a better understanding of how your text will fit in the layout. Explore the various patterns and templates as you create your personalized web experience.', 'edelherzig-base' ),
			'short_text'              => __( 'Just some placeholder text', 'edelherzig-base' ),

			// Feature patterns.
			'feature_section_title'   => __( 'Showcase your Features and Services', 'edelherzig-base' ),
			'feature_title'           => __( 'This is feature title', 'edelherzig-base' ),
			'feature_description'     => __( 'A placeholder description that you can replace with your own content.', 'edelherzig-base' ),
			'button_text'             => __( 'Button Text', 'edelherzig-base' ),
			'button_text_2'           => __( 'Get Started', 'edelherzig-base' ),

			// Team patterns.
			'team_section_title'      => __( 'Our Team', 'edelherzig-base' ),
			'team_member'             => __( 'Team member name', 'edelherzig-base' ),
			'member_role'             => __( 'Company role', 'edelherzig-base' ),

			// Pricing patterns.
			'pricing_section_title'   => __( 'A pricing section. Join premium!', 'edelherzig-base' ),
			'plan_title'              => __( 'Plan title', 'edelherzig-base' ),
			'price'                   => __( '$19.99', 'edelherzig-base' ),
			'price_feature'           => __( 'A pricing feature', 'edelherzig-base' ),

			// Contact patterns.
			'contact_page_title'      => __( 'Get in touch', 'edelherzig-base' ),
			'contact_section_title'   => __( 'Contact details', 'edelherzig-base' ),
			'follow'                  => __( 'Follow us', 'edelherzig-base' ),
			'contact_details'         => __( 'Contact detail example', 'edelherzig-base' ),

			// FAQ patterns.
			'faq_section_title'       => __( 'Frequently Asked Questions', 'edelherzig-base' ),
			'faq_title'               => __( 'Just a frequent question', 'edelherzig-base' ),

			// Portfolio patterns.
			'portfolio_section_title' => __( 'Selected Portfolio', 'edelherzig-base' ),
			'portfolio_title'         => __( 'A project title', 'edelherzig-base' ),
			'portfolio_client'        => __( 'Client Name', 'edelherzig-base' ),

			// Loops and templates.
			'read_more'               => __( 'Read more', 'edelherzig-base' ),
			'continue_reading'        => __( 'Continue reading', 'edelherzig-base' ),
			'no_posts_found'          => __( 'Unfortunately no posts were found', 'edelherzig-base' ),
			'search_results'          => __( 'Search results', 'edelherzig-base' ),
			'search_button'           => __( 'Search', 'edelherzig-base' ),
			'search_placeholder'      => __( 'Search for a keyword...', 'edelherzig-base' ),
			'404'                     => __( '404', 'edelherzig-base' ),
			'page_not_found'          => __( 'Unfortunately the page was not found.', 'edelherzig-base' ),
			'categories'              => __( 'Categories', 'edelherzig-base' ),
			'read_also'               => __( 'Read also…', 'edelherzig-base' ),

			// Content Patterns.
			'content_title'           => __( 'A generic content title', 'edelherzig-base' ),
			'content_subtitle'        => __( 'A content subtitle', 'edelherzig-base' ),
			'lorem_ipsum_subtitle'    => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'edelherzig-base' ),

			// Testimonial patterns.
			'testimonial'             => __( '"...Absolutely one of the best services out there, very professional and easy-going experience, highly recommended..."', 'edelherzig-base' ),
			'testimonial_name'        => __( 'Jason Doe', 'edelherzig-base' ),

			// CTA patterns.
			'cta_title'               => __( 'Get started today, get in touch!', 'edelherzig-base' ),
			'edelherzig_cta_title'          => __( 'Create your new website today, with Edelherzig!', 'edelherzig-base' ),
		);

		return $strings;
	}
}
