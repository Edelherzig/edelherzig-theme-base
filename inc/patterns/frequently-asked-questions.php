<?php
/**
 * Frequently Asked Questions Pattern for Edelherzig Theme
 *
 * @author Themeisle
 * @package edelherzig
 * @since 1.0.5
 *
 * slug: frequently-asked-questions
 * title: Frequently Asked Questions
 * categories: edelherzig/content
 * keywords: faq, questions, answers
 */

$edelherzig_strings = apply_filters( 'edelherzig_strings', array() );

return array(
	'title'      => __( 'Frequently Asked Questions', 'edelherzig-base' ),
	'categories' => array( 'edelherzig/content' ),
	'content'    => '
		<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0px","bottom":"0px"},"blockGap":"var:preset|spacing|40"}},"layout":{"inherit":true,"type":"constrained"}} -->
		<div class="wp-block-group alignfull" style="margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">
			<!-- wp:heading {"textAlign":"center","className":"is-style-default"} -->
			<h2 class="wp-block-heading has-text-align-center is-style-default">' . esc_html( $edelherzig_strings['faq_section_title'] ) . '</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center","fontSize":"normal"} -->
			<p class="has-text-align-center has-normal-font-size">' . esc_html( $edelherzig_strings['section_description'] ) . '</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"textColor":"edelherzig-fg-alt"} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-edelherzig-fg-alt-color has-text-color wp-element-button">' . esc_html( $edelherzig_strings['button_text'] ) . '</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

			<!-- wp:spacer {"height":"40px"} -->
			<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:group {"align":"wide"} -->
			<div class="wp-block-group alignwide">
				<!-- wp:columns -->
				<div class="wp-block-columns">
					<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}},"backgroundColor":"edelherzig-bg-alt"} -->
					<div class="wp-block-column has-edelherzig-bg-alt-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
						<!-- wp:heading {"level":3,"fontSize":"medium"} -->
						<h3 class="wp-block-heading has-medium-font-size">' . esc_html( $edelherzig_strings['faq_title'] ) . '</h3>
						<!-- /wp:heading -->

						<!-- wp:paragraph -->
						<p>' . esc_html( $edelherzig_strings['paragraph_text'] ) . '</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:column -->

					<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}},"backgroundColor":"edelherzig-bg-alt"} -->
					<div class="wp-block-column has-edelherzig-bg-alt-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
						<!-- wp:heading {"level":3,"fontSize":"medium"} -->
						<h3 class="wp-block-heading has-medium-font-size">' . esc_html( $edelherzig_strings['faq_title'] ) . '</h3>
						<!-- /wp:heading -->

						<!-- wp:paragraph -->
						<p>' . esc_html( $edelherzig_strings['paragraph_text'] ) . '</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:column -->
					
				</div>
				<!-- /wp:columns -->

				<!-- wp:columns -->
				<div class="wp-block-columns">
					<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}},"backgroundColor":"edelherzig-bg-alt"} -->
					<div class="wp-block-column has-edelherzig-bg-alt-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
						<!-- wp:heading {"level":3,"fontSize":"medium"} -->
						<h3 class="wp-block-heading has-medium-font-size">' . esc_html( $edelherzig_strings['faq_title'] ) . '</h3>
						<!-- /wp:heading -->

						<!-- wp:paragraph -->
						<p>' . esc_html( $edelherzig_strings['paragraph_text'] ) . '</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:column -->

					<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}},"backgroundColor":"edelherzig-bg-alt"} -->
					<div class="wp-block-column has-edelherzig-bg-alt-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
						<!-- wp:heading {"level":3,"fontSize":"medium"} -->
						<h3 class="wp-block-heading has-medium-font-size">' . esc_html( $edelherzig_strings['faq_title'] ) . '</h3>
						<!-- /wp:heading -->

						<!-- wp:paragraph -->
						<p>' . esc_html( $edelherzig_strings['paragraph_text'] ) . '</p>
						<!-- /wp:paragraph -->
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
