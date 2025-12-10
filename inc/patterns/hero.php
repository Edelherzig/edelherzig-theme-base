<?php
/**
 * Hero Section Pattern for Edelherzig Theme
 *
 * @author Themeisle
 * @package edelherzig
 * @since 1.0.5
 *
 * slug: hero
 * title: Hero Section
 * categories: edelherzig/heroes_page_titles
 * keywords: hero, section, title
 */

$edelherzig_strings = apply_filters( 'edelherzig_strings', array() );

$images = array(
	EDELHERZIG_URL . 'assets/img/edelherzig-illustration.svg',
);

return array(
	'title'      => __( 'Hero Section', 'edelherzig' ),
	'categories' => array( 'edelherzig/heroes_page_titles' ),
	'content'    => '
        <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|50","margin":{"top":"0","bottom":"0"}}},"backgroundColor":"edelherzig-bg-alt","layout":{"inherit":true,"type":"constrained"}} -->
        <div class="wp-block-group alignfull has-edelherzig-bg-alt-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">
            <!-- wp:heading {"textAlign":"center","level":1,"fontSize":"huge"} -->
            <h1 class="wp-block-heading has-text-align-center has-huge-font-size">' . esc_html( $edelherzig_strings['hero_title'] ) . '</h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
            <p class="has-text-align-center has-medium-font-size">' . esc_html( $edelherzig_strings['feature_description'] ) . '</p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
            <div class="wp-block-buttons">
                <!-- wp:button {"textColor":"edelherzig-fg-alt"} -->
                <div class="wp-block-button"><a class="wp-block-button__link has-edelherzig-fg-alt-color has-text-color wp-element-button">' . esc_html( $edelherzig_strings['button_text_2'] ) . '</a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->

            <!-- wp:spacer {"height":"3vw"} -->
            <div style="height:3vw" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->

            <!-- wp:image {"align":"center","sizeSlug":"large","linkDestination":"none"} -->
            <figure class="wp-block-image aligncenter size-large"><img src="' . esc_url( $images[0] ) . '" alt="Hero Illustration"/></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:group -->
    ',
);
