<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package jaxon
 * @since 1.0.0
 *
 * slug: row-with-logos
 * title: Row with logos
 * categories: Jaxon
 * keywords: row, clients, images. logos
 */

use Jaxon\Assets_Manager;



return array(
	'title'      => __( 'Row with logos', 'jaxon' ),
	'categories' => array( 'jaxon' ),
	'content'    => '
    <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"40px","bottom":"40px","right":"0"},"blockGap":"var:preset|spacing|80","margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"ti-accent","textColor":"ti-fg-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-ti-fg-alt-color has-ti-accent-background-color has-text-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:40px;padding-right:0;padding-bottom:40px"><!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"width":134,"height":35,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="' . esc_url( Assets_Manager::get_image_url( 'jaxon-placeholder-logo-05.1.2.svg' ) ) . '" width="134" height="35"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"width":108,"height":27,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="' . esc_url( Assets_Manager::get_image_url( 'jaxon-placeholder-logo-04.1.2.svg' ) ) . '" width="108" height="27"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"width":140,"height":36,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="' . esc_url( Assets_Manager::get_image_url( 'jaxon-placeholder-logo-01.1.2.svg' ) ) . '" width="140" height="36"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"width":149,"height":45,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="' . esc_url( Assets_Manager::get_image_url( 'jaxon-placeholder-logo-02.1.2.svg' ) ) . '" width="149" height="45"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"width":137,"height":36,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="' . esc_url( Assets_Manager::get_image_url( 'jaxon-placeholder-logo-03.1.2.svg' ) ) . '" width="137" height="36"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
',
);

