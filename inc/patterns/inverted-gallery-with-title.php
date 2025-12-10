<?php
/**
 * Inverted Gallery with Title
 *
 * @author Themeisle
 * @package edelherzig
 * @since 1.0.5
 *
 * slug: inverted-gallery-with-title
 * title: Inverted Gallery with Title
 * categories: edelherzig/content
 * keywords: gallery, inverted, title
 */

$edelherzig_strings = apply_filters( 'edelherzig_strings', array() );

// Define image URLs.
$images = array(
	EDELHERZIG_URL . 'assets/img/shape-01.svg',
	EDELHERZIG_URL . 'assets/img/shape-07.svg',
	EDELHERZIG_URL . 'assets/img/shape-06.svg',
	EDELHERZIG_URL . 'assets/img/shape-05.svg',
	EDELHERZIG_URL . 'assets/img/shape-08.svg',
);

return array(
	'title'      => __( 'Inverted Gallery with Title', 'edelherzig' ),
	'categories' => array( 'edelherzig/content' ),
	'content'    => '
        <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"edelherzig-bg-inv","textColor":"edelherzig-fg-alt","layout":{"inherit":true,"type":"constrained"}} -->
        <div class="wp-block-group alignfull has-edelherzig-fg-alt-color has-edelherzig-bg-inv-background-color has-text-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">
            <!-- wp:group {"align":"wide","layout":{"inherit":false}} -->
            <div class="wp-block-group alignwide">
                <!-- wp:columns -->
                <div class="wp-block-columns">
                    <!-- wp:column {"width":"30%"} -->
                    <div class="wp-block-column" style="flex-basis:30%">
                        <!-- wp:heading -->
                        <h2 class="wp-block-heading">' . esc_html( $edelherzig_strings['section_title'] ) . '</h2>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph -->
                        <p>' . esc_html( $edelherzig_strings['section_description'] ) . '</p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column {"width":"70%"} -->
                    <div class="wp-block-column" style="flex-basis:70%">
                        <!-- wp:gallery {"linkTo":"none"} -->
                        <figure class="wp-block-gallery has-nested-images columns-default is-cropped">
                            <!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
                            <figure class="wp-block-image size-large">
                                <img src="' . esc_url( $images[0] ) . '" alt=""/>
                            </figure>
                            <!-- /wp:image -->

                            <!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
                            <figure class="wp-block-image size-large">
                                <img src="' . esc_url( $images[1] ) . '" alt=""/>
                            </figure>
                            <!-- /wp:image -->

                            <!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
                            <figure class="wp-block-image size-large">
                                <img src="' . esc_url( $images[2] ) . '" alt=""/>
                            </figure>
                            <!-- /wp:image -->

                            <!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
                            <figure class="wp-block-image size-large">
                                <img src="' . esc_url( $images[3] ) . '" alt=""/>
                            </figure>
                            <!-- /wp:image -->

                            <!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
                            <figure class="wp-block-image size-large">
                                <img src="' . esc_url( $images[4] ) . '" alt=""/>
                            </figure>
                            <!-- /wp:image -->
                        </figure>
                        <!-- /wp:gallery -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    ',
);
