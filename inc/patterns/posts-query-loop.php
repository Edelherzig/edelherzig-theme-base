<?php
/**
 * Post Query Loop Pattern for Edelherzig Theme
 *
 * @author Themeisle
 * @package edelherzig
 * @since 1.0.5
 *
 * slug: post-query-loop
 * title: Post Query Loop
 * categories: edelherzig/post_loops
 * keywords: post, query, loop
 */

$edelherzig_strings = apply_filters( 'edelherzig_strings', array() );

return array(
	'title'      => __( 'Post Query Loop', 'edelherzig' ),
	'categories' => array( 'edelherzig/post_loops' ),
	'content'    => '
        <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"layout":{"inherit":true,"type":"constrained"}} -->
        <div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">
            <!-- wp:query {"queryId":2,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
            <div class="wp-block-query">
                <!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group">
                    <!-- wp:post-featured-image {"align":"center"} /-->

                    <!-- wp:post-date {"fontSize":"small"} /-->

                    <!-- wp:post-title /-->

                    <!-- wp:post-terms {"term":"category","fontSize":"small"} /-->

                    <!-- wp:post-excerpt {"moreText":"' . esc_html( $edelherzig_strings['continue_reading'] ) . '","style":{"elements":{"link":{"color":{"text":"var:preset|color|edelherzig-accent"}}}}} /-->

                    <!-- wp:spacer {"height":"64px"} -->
                    <div style="height:64px" aria-hidden="true" class="wp-block-spacer"></div>
                    <!-- /wp:spacer -->
                </div>
                <!-- /wp:group -->
                <!-- /wp:post-template -->

                <!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
                <!-- wp:query-pagination-previous /-->

                <!-- wp:query-pagination-numbers /-->

                <!-- wp:query-pagination-next /-->
                <!-- /wp:query-pagination -->

                <!-- wp:query-no-results -->
                <!-- wp:paragraph {"backgroundColor":"edelherzig-bg-alt"} -->
                <p class="has-edelherzig-bg-alt-background-color has-background">' . esc_html( $edelherzig_strings['no_posts_found'] ) . '</p>
                <!-- /wp:paragraph -->
                <!-- /wp:query-no-results -->
            </div>
            <!-- /wp:query -->
        </div>
        <!-- /wp:group -->
    ',
);
