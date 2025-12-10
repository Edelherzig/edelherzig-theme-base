<?php
/**
 * Call to Action with Image
 *
 * @author Themeisle
 * @package edelherzig
 * @since 1.0.5
 *
 * slug: call-to-action-image
 * title: Call to Action with Image
 * categories: edelherzig/call_to_action
 * keywords: call to action, cta, image, layout
 */

$edelherzig_strings = apply_filters( 'edelherzig_strings', array() );

$images = array(
	EDELHERZIG_URL . 'assets/img/edelherzig-cover-bg.svg',
);

return array(
	'title'      => __( 'Call to Action with Image', 'edelherzig' ),
	'categories' => array( 'edelherzig/call_to_action' ),
	'content'    => '
        <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0","right":"0","left":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"},"elements":{"link":{"color":{"text":"var:preset|color|edelherzig-fg-alt"}}}},"backgroundColor":"edelherzig-bg-inv","textColor":"edelherzig-fg-alt","layout":{"inherit":false},"metadata":{}} -->
        <div class="wp-block-group alignfull has-edelherzig-fg-alt-color has-edelherzig-bg-inv-background-color has-text-color has-background has-link-color" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}}} -->
        <div class="wp-block-columns" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"stretch","width":"50%","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
        <div class="wp-block-column is-vertically-aligned-stretch" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:50%"><!-- wp:image {"align":"center","lightbox":{"enabled":true},"id":281,"aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none"} -->
        <figure class="wp-block-image aligncenter size-large"><img src="' . esc_url( $images[0] ) . '" alt="" class="wp-image-281" style="aspect-ratio:1;object-fit:cover"/></figure>
        <!-- /wp:image --></div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","right":"var:preset|spacing|60","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-column is-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60);flex-basis:50%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","letterSpacing":"2px"}},"fontSize":"small"} -->
        <p class="has-small-font-size" style="font-style:normal;font-weight:600;letter-spacing:2px;text-transform:uppercase">' . esc_html( $edelherzig_strings['subtitle'] ) . '</p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"fontSize":"huge"} -->
        <h2 class="wp-block-heading has-huge-font-size">' . esc_html( $edelherzig_strings['cta_title'] ) . '</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"fontSize":"large"} -->
        <p class="has-large-font-size">' . esc_html( $edelherzig_strings['short_text'] ) . '</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:group -->

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
