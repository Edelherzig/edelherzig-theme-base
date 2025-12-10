<?php
/**
 * About Page
 *
 * @author Themeisle
 * @package edelherzig
 * @since 1.0.5
 *
 * slug: about-page
 * title: About Page
 * categories: edelherzig/pages
 * keywords: contact, social
 */

$edelherzig_strings = apply_filters( 'edelherzig_strings', array() );

return array(
	'title'      => __( 'About Page', 'edelherzig-base' ),
	'categories' => array( 'edelherzig/pages' ),
	'content'    => '
        <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"edelherzig-bg-alt","layout":{"inherit":true,"type":"constrained"}} -->
        <div class="wp-block-group alignfull has-edelherzig-bg-alt-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">
            <!-- wp:heading {"textAlign":"center","level":1,"align":"wide"} -->
            <h1 class="wp-block-heading alignwide has-text-align-center">' . esc_html( $edelherzig_strings['about_page_title'] ) . '</h1>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->
		<!-- wp:pattern {"slug":"edelherzig/team"} /-->
        <!-- wp:pattern {"slug":"edelherzig/centered-text-background"} /-->
        <!-- wp:pattern {"slug":"edelherzig/single-feature-button"} /-->
    ',
);
