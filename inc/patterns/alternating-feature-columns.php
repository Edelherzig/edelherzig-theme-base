<?php
/**
 * Alternating Feature Columns
 *
 * @author Themeisle
 * @package edelherzig
 * @since 1.0.5
 *
 * slug: alternating-feature-columns
 * title: Alternating Feature Columns
 * categories: edelherzig/features
 * keywords: alternating, feature, columns
 */

$edelherzig_strings = apply_filters( 'edelherzig_strings', array() );

$images = array(
	EDELHERZIG_URL . 'assets/img/shape-010.svg',
	EDELHERZIG_URL . 'assets/img/shape-011.svg',
);

return array(
	'title'      => __( 'Alternating Feature Columns', 'edelherzig' ),
	'categories' => array( 'edelherzig/features' ),
	'content'    => '
        <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","right":"0px","left":"0px"},"margin":{"top":"0px","bottom":"0px"},"blockGap":"0px"}},"layout":{"inherit":false}} -->
        <div class="wp-block-group alignfull" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
            <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":"0px"}}} -->
            <div class="wp-block-columns are-vertically-aligned-center">
                <!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"32px","right":"32px","bottom":"32px","left":"32px"}}}} -->
                <div class="wp-block-column is-vertically-aligned-center" style="padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px">
                    <!-- wp:group {"layout":{"inherit":false,"contentSize":"600px","type":"constrained"}} -->
                    <div class="wp-block-group">
                        <!-- wp:heading -->
                        <h2 class="wp-block-heading">' . esc_html( $edelherzig_strings['feature_title'] ) . '</h2>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph -->
                        <p>' . esc_html( $edelherzig_strings['paragraph_text'] ) . '</p>
                        <!-- /wp:paragraph -->

                        <!-- wp:buttons -->
                        <div class="wp-block-buttons">
                            <!-- wp:button {"className":"is-style-primary"} -->
                            <div class="wp-block-button is-style-primary">
                                <a class="wp-block-button__link wp-element-button">' . esc_html( $edelherzig_strings['button_text'] ) . '</a>
                            </div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"32px","right":"32px","bottom":"32px","left":"32px"}}},"backgroundColor":"edelherzig-bg-alt"} -->
                <div class="wp-block-column is-vertically-aligned-center has-edelherzig-bg-alt-background-color has-background" style="padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px">
                    <!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image aligncenter size-full">
                        <img src="' . esc_url( $images[0] ) . '" alt=""/>
                    </figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->

            <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":"0px"}}} -->
            <div class="wp-block-columns are-vertically-aligned-center">
                <!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"32px","right":"32px","bottom":"32px","left":"32px"}}},"backgroundColor":"edelherzig-bg-alt"} -->
                <div class="wp-block-column is-vertically-aligned-center has-edelherzig-bg-alt-background-color has-background" style="padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px">
                    <!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image aligncenter size-full">
                        <img src="' . esc_url( $images[1] ) . '" alt=""/>
                    </figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"32px","right":"32px","bottom":"32px","left":"32px"}}}} -->
                <div class="wp-block-column is-vertically-aligned-center" style="padding-top:32px;padding-right:32px;padding-bottom:32px;padding-left:32px">
                    <!-- wp:group {"layout":{"inherit":false,"contentSize":"600px","type":"constrained"}} -->
                    <div class="wp-block-group">
                        <!-- wp:heading -->
                        <h2 class="wp-block-heading">' . esc_html( $edelherzig_strings['feature_title'] ) . '</h2>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph -->
                        <p>' . esc_html( $edelherzig_strings['paragraph_text'] ) . '</p>
                        <!-- /wp:paragraph -->

                        <!-- wp:buttons -->
                        <div class="wp-block-buttons">
                            <!-- wp:button {"className":"is-style-primary"} -->
                            <div class="wp-block-button is-style-primary">
                                <a class="wp-block-button__link wp-element-button">' . esc_html( $edelherzig_strings['button_text'] ) . '</a>
                            </div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:group -->
    ',
);
