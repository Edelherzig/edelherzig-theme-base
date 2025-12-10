<?php
/**
 * Homepage 2
 *
 * @author Themeisle
 * @package edelherzig
 * @since 1.0.5
 *
 * slug: homepage-2
 * title: Homepage 2
 * categories: edelherzig/pages
 * keywords: home, landing
 */

$edelherzig_strings = apply_filters( 'edelherzig_strings', array() );

return array(
	'title'      => __( 'Homepage 2', 'edelherzig-base' ),
	'categories' => array( 'edelherzig/pages' ),
	'content'    => '
				<!-- wp:pattern {"slug":"edelherzig/hero-columns"} /-->
                <!-- wp:pattern {"slug":"edelherzig/features-background"} /-->
                <!-- wp:pattern {"slug":"edelherzig/single-feature-button"} /-->
				<!-- wp:pattern {"slug":"edelherzig/testimonial-fullwidth"} /-->
				<!-- wp:pattern {"slug":"edelherzig/call-to-action-image"} /-->

    ',
);
