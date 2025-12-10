<?php
/**
 * Centered Title Pattern
 *
 * @author Themeisle
 * @package edelherzig
 * @since 1.0.5
 *
 * slug: centered-title
 * title: Centered Title
 * categories: edelherzig/heroes_page_titles
 * keywords: centered, title, content
 */

$edelherzig_strings = apply_filters( 'edelherzig_strings', array() );

return array(
	'title'      => __( 'Centered Title', 'edelherzig' ),
	'categories' => array( 'edelherzig/heroes_page_titles' ),
	'content'    => '
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"edelherzig-bg-alt","layout":{"inherit":true,"type":"constrained"}} -->
        <div class="wp-block-group has-edelherzig-bg-alt-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">
            <!-- wp:heading {"textAlign":"center","level":1,"fontSize":"huge"} -->
            <h1 class="wp-block-heading has-text-align-center has-huge-font-size">' . esc_html( $edelherzig_strings['page_title'] ) . '</h1>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->
    ',
);
