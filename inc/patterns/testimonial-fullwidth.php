<?php
/**
 * Testimonial Fullwidth
 *
 * @author Themeisle
 * @package edelherzig
 * @since 1.0.5
 *
 * slug: testimonial-fullwidth
 * title: Testimonial Fullwidth
 * categories: edelherzig/testimonials
 * keywords: testimonial, fullwidth, feedback
 */

$edelherzig_strings = apply_filters( 'edelherzig_strings', array() );

$images = array(
	EDELHERZIG_URL . 'assets/img/shape-05.svg',
);

return array(
	'title'      => __( 'Testimonial Fullwidth', 'edelherzig-base' ),
	'categories' => array( 'edelherzig/testimonials' ),
	'content'    => '
		<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|80","margin":{"top":"0","bottom":"0"}}},"backgroundColor":"edelherzig-bg-alt","layout":{"type":"constrained"},"metadata":{}} -->
		<div class="wp-block-group alignfull has-edelherzig-bg-alt-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">
			<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group alignwide">
				<!-- wp:image {"align":"center","id":287,"width":"88px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-resized is-style-rounded"} -->
				<figure class="wp-block-image aligncenter size-full is-resized is-style-rounded">
					<img src="' . esc_url( $images[0] ) . '" alt="" class="wp-image-287" style="aspect-ratio:1;object-fit:cover;width:88px"/>
				</figure>
				<!-- /wp:image -->

				<!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
				<p class="has-text-align-center has-medium-font-size">' . esc_html( $edelherzig_strings['testimonial'] ) . '</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|edelherzig-accent"}}}},"textColor":"edelherzig-accent","fontSize":"medium"} -->
				<p class="has-text-align-center has-edelherzig-accent-color has-text-color has-link-color has-medium-font-size">★ ★ ★ ★ ★</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","letterSpacing":"2px"}},"fontSize":"small"} -->
				<p class="has-text-align-center has-small-font-size" style="font-style:normal;font-weight:600;letter-spacing:2px;text-transform:uppercase">' . esc_html( $edelherzig_strings['testimonial_name'] ) . '</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	',
);
