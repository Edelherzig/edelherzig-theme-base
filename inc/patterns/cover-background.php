<?php
/**
 * Cover with Background Pattern for Edelherzig Theme
 *
 * @author Themeisle
 * @package edelherzig
 * @since 1.0.5
 *
 * slug: cover-background
 * title: Cover with Background
 * categories: edelherzig/heroes_page_titles
 * keywords: cover, background, heroes
 */

$edelherzig_strings = apply_filters( 'edelherzig_strings', array() );

$images = array(
	EDELHERZIG_URL . 'assets/img/edelherzig-cover-bg.svg',
);

return array(
	'title'      => __( 'Cover with Background', 'edelherzig-base' ),
	'categories' => array( 'edelherzig/heroes_page_titles' ),
	'content'    => '
        <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
            <!-- wp:cover {"url":"' . esc_url( $images[0] ) . '","dimRatio":60,"overlayColor":"black","minHeight":600,"minHeightUnit":"px","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","right":"var:preset|spacing|40","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30"}}} -->
            <div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40);min-height:600px">
                <span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-60 has-background-dim"></span>
                <img class="wp-block-cover__image-background" alt="" src="' . esc_url( $images[0] ) . '" data-object-fit="cover"/>
                <div class="wp-block-cover__inner-container">
                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"textColor":"edelherzig-fg-alt","layout":{"inherit":true,"type":"constrained"}} -->
                    <div class="wp-block-group has-edelherzig-fg-alt-color has-text-color">
                        <!-- wp:heading {"level":1} -->
                        <h1 class="wp-block-heading">' . esc_html( $edelherzig_strings['hero_title'] ) . '</h1>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"fontSize":"medium"} -->
                        <p class="has-medium-font-size">' . esc_html( $edelherzig_strings['short_text'] ) . '</p>
                        <!-- /wp:paragraph -->

                        <!-- wp:buttons -->
                        <div class="wp-block-buttons">
                            <!-- wp:button -->
                            <div class="wp-block-button"><a class="wp-block-button__link wp-element-button">' . esc_html( $edelherzig_strings['button_text_2'] ) . '</a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:group -->
    ',
);
