<?php
/**
 * Single Feature with button
 *
 * @author Themeisle
 * @package edelherzig
 * @since 1.0.5
 *
 * slug: single-feature-button
 * title: Image with Content and Button
 * categories: edelherzig/features
 * keywords: image, content, button, feature
 */

$edelherzig_strings = apply_filters( 'edelherzig_strings', array() );

$images = array(
	EDELHERZIG_URL . 'assets/img/shape-01.svg', 
);

return array(
	'title'      => __( 'single-feature-button', 'edelherzig' ),
	'categories' => array( 'edelherzig/features' ),
	'content'    => '
		<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|80","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"},"metadata":{"name":"three columns of feature cards"}} -->
		<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
		<div class="wp-block-columns alignwide"><!-- wp:column -->
		<div class="wp-block-column"><!-- wp:image {"id":283,"aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none"} -->
		<figure class="wp-block-image size-large"><img src="' . esc_url( $images[0] ) . '" alt="" class="wp-image-283" style="aspect-ratio:1;object-fit:cover"/></figure>
		<!-- /wp:image --></div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading -->
		<h2 class="wp-block-heading">' . esc_html( $edelherzig_strings['feature_section_title'] ) . '</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p>' . esc_html( $edelherzig_strings['feature_description'] ) . '</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons"><!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">' . esc_html( $edelherzig_strings['button_text'] ) . '</a></div>
		<!-- /wp:button --></div>
		<!-- /wp:buttons --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns --></div>
		<!-- /wp:group -->
	',
);
