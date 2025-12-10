<?php
/**
 * Team Pattern for Edelherzig Theme
 *
 * @author Themeisle
 * @package edelherzig
 * @since 1.0.5
 *
 * slug: team
 * title: Team
 * categories: edelherzig/team
 * keywords: team, members, profile
 */

$edelherzig_strings = apply_filters( 'edelherzig_strings', array() );

$images = array(
	EDELHERZIG_URL . 'assets/img/shape-02.svg',
);

return array(
	'title'      => __( 'Team', 'edelherzig-base' ),
	'categories' => array( 'edelherzig/team' ),
	'content'    => '
		<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|40"}},"backgroundColor":"edelherzig-bg-alt","layout":{"type":"constrained"}} -->
		<div class="wp-block-group alignfull has-edelherzig-bg-alt-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
		<div class="wp-block-columns alignwide" style="margin-top:0;margin-bottom:0">
			
			<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
			<div class="wp-block-column">
				<!-- wp:image {"id":284,"sizeSlug":"large","linkDestination":"none","className":"size-full"} -->
				<figure class="wp-block-image size-large size-full"><img src="' . esc_url( $images[0] ) . '" alt="" class="wp-image-284"/></figure>
				<!-- /wp:image -->

				<!-- wp:heading {"level":3,"fontSize":"medium"} -->
				<h3 class="wp-block-heading has-medium-font-size">' . esc_html( $edelherzig_strings['team_member'] ) . '</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"}},"fontSize":"small"} -->
				<p class="has-small-font-size" style="font-style:normal;font-weight:600;text-transform:uppercase">' . esc_html( $edelherzig_strings['member_role'] ) . '</p>
				<!-- /wp:paragraph -->

				<!-- wp:social-links {"openInNewTab":true,"style":{"spacing":{"blockGap":{"top":"8px","left":"8px"}}},"className":"is-style-logos-only"} -->
<ul class="wp-block-social-links is-style-logos-only"><!-- wp:social-link {"url":"#","service":"x"} /--><!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
<!-- /wp:social-links -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
			<div class="wp-block-column">
				<!-- wp:image {"id":284,"sizeSlug":"large","linkDestination":"none","className":"size-full"} -->
				<figure class="wp-block-image size-large size-full"><img src="' . esc_url( $images[0] ) . '" alt="" class="wp-image-284"/></figure>
				<!-- /wp:image -->

				<!-- wp:heading {"level":3,"fontSize":"medium"} -->
				<h3 class="wp-block-heading has-medium-font-size">' . esc_html( $edelherzig_strings['team_member'] ) . '</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"}},"fontSize":"small"} -->
				<p class="has-small-font-size" style="font-style:normal;font-weight:600;text-transform:uppercase">' . esc_html( $edelherzig_strings['member_role'] ) . '</p>
				<!-- /wp:paragraph -->

				<!-- wp:social-links {"openInNewTab":true,"style":{"spacing":{"blockGap":{"top":"8px","left":"8px"}}},"className":"is-style-logos-only"} -->
<ul class="wp-block-social-links is-style-logos-only"><!-- wp:social-link {"url":"#","service":"x"} /--><!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
<!-- /wp:social-links -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
			<div class="wp-block-column">
				<!-- wp:image {"id":284,"sizeSlug":"large","linkDestination":"none","className":"size-full"} -->
				<figure class="wp-block-image size-large size-full"><img src="' . esc_url( $images[0] ) . '" alt="" class="wp-image-284"/></figure>
				<!-- /wp:image -->

				<!-- wp:heading {"level":3,"fontSize":"medium"} -->
				<h3 class="wp-block-heading has-medium-font-size">' . esc_html( $edelherzig_strings['team_member'] ) . '</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"}},"fontSize":"small"} -->
				<p class="has-small-font-size" style="font-style:normal;font-weight:600;text-transform:uppercase">' . esc_html( $edelherzig_strings['member_role'] ) . '</p>
				<!-- /wp:paragraph -->

				<!-- wp:social-links {"openInNewTab":true,"style":{"spacing":{"blockGap":{"top":"8px","left":"8px"}}},"className":"is-style-logos-only"} -->
<ul class="wp-block-social-links is-style-logos-only"><!-- wp:social-link {"url":"#","service":"x"} /--><!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
<!-- /wp:social-links -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns --></div>
		<!-- /wp:group -->
	',
);
