<?php
/**
 * Centered Text on Background
 * 
 * @author Themeisle
 * @package edelherzig
 * @since 1.0.5
 *
 * slug: centered-text-background
 * title: Centered Text on Background
 * categories: edelherzig/content
 * keywords: centered, text, background, content
 */

$edelherzig_strings = apply_filters( 'edelherzig_strings', array() );

return array(
	'title'      => __( 'Centered Text on Background', 'edelherzig-base' ),
	'categories' => array( 'edelherzig/content' ),
	'content'    => '
		<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0px","bottom":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|edelherzig-fg-alt"}}}},"backgroundColor":"edelherzig-bg-inv","textColor":"edelherzig-fg-alt","layout":{"inherit":true,"type":"constrained"}} -->
		<div class="wp-block-group alignfull has-edelherzig-fg-alt-color has-edelherzig-bg-inv-background-color has-text-color has-background has-link-color" style="margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">
			<!-- wp:group {"layout":{"type":"constrained","contentSize":"500px"}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"textAlign":"center"} -->
				<h2 class="wp-block-heading has-text-align-center">' . esc_html( $edelherzig_strings['content_title'] ) . '</h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center"} -->
				<p class="has-text-align-center">' . esc_html( $edelherzig_strings['paragraph_text'] ) . '</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"}},"fontSize":"small"} -->
				<p class="has-text-align-center has-small-font-size" style="font-style:normal;font-weight:600;text-transform:uppercase">' . esc_html( $edelherzig_strings['content_subtitle'] ) . '</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"align":"center"} -->
				<p class="has-text-align-center">' . esc_html( $edelherzig_strings['paragraph_text'] ) . '</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	',
);
