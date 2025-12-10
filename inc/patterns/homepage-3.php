<?php
/**
 * Homepage 3
 *
 * @author Themeisle
 * @package edelherzig
 * @since 1.0.5
 *
 * slug: homepage-3
 * title: Homepage 3
 * categories: edelherzig/pages
 * keywords: home, landing
 */

$edelherzig_strings = apply_filters( 'edelherzig_strings', array() );

return array(
	'title'      => __( 'Homepage 3', 'edelherzig-base' ),
	'categories' => array( 'edelherzig/pages' ),
	'content'    => '
				<!-- wp:pattern {"slug":"edelherzig/hero-boxed"} /-->
				<!-- wp:pattern {"slug":"edelherzig/alternating-feature-columns"} /-->
				<!-- wp:pattern {"slug":"edelherzig/inverted-background"} /-->
				<!-- wp:pattern {"slug":"edelherzig/testimonial-cards"} /-->
				<!-- wp:pattern {"slug":"edelherzig/call-to-action-3"} /-->

	',
);
