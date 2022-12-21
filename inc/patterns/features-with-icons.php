<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package jaxon
 * @since 1.0.0
 *
 * slug: features-with-icons
 * title: Features with icons
 * categories: Jaxon
 * keywords: columns, inverted, icons, features
 */

use Jaxon\Assets_Manager;

return array(
	'title'      => __( 'Features with icons', 'jaxon' ),
	'categories' => array( 'jaxon' ),
	'content'    => '
    <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"64px","right":"24px","left":"24px"},"blockGap":"0","margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"ti-bg-inv","textColor":"ti-fg-alt","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull has-ti-fg-alt-color has-ti-bg-inv-background-color has-text-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:64px;padding-right:24px;padding-bottom:64px;padding-left:24px"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"40px","left":"40px"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"100%"} -->
<div class="wp-block-column" style="flex-basis:100%"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"id":412,"width":56,"height":56,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="' . esc_url( Assets_Manager::get_image_url( 'icon-3.svg' ) ) . '" alt="" class="wp-image-412" width="56" height="56"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":4} -->
<h4>Fast Delivery</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ut labore et dolore magna aliqua.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"100%"} -->
<div class="wp-block-column" style="flex-basis:100%"><!-- wp:image {"id":411,"width":57,"height":59,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="' . esc_url( Assets_Manager::get_image_url( 'icon-2.svg' ) ) . '" alt="" class="wp-image-411" width="57" height="59"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":4} -->
<h4>High Quality</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ut labore et dolore magna aliqua.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"100%"} -->
<div class="wp-block-column" style="flex-basis:100%"><!-- wp:image {"id":410,"width":44,"height":56,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="' . esc_url( Assets_Manager::get_image_url( 'icon-1.svg' ) ) . '" alt="" class="wp-image-410" width="44" height="56"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":4} -->
<h4>Warranty</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ut labore et dolore magna aliqua.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
',
);
