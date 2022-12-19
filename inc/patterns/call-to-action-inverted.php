<?php
/**
 * Pattern
 *
 * @author Themeisle
 * @package jaxon
 * @since 1.0.0
 *
 * slug: call-to-action-inverted
 * title: Call to action inverted
 * categories: Jaxon
 * keywords: button, call-to-action, banner, inverted
 */

use Jaxon\Assets_Manager;



return array(
	'title'      => __( 'Call to action inverted', 'jaxon' ),
	'categories' => array( 'jaxon' ),
	'content'    => '
    <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"64px"},"blockGap":"40px","margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"ti-bg-inv","textColor":"ti-fg-alt","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull has-ti-fg-alt-color has-ti-bg-inv-background-color has-text-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:64px;padding-bottom:64px"><!-- wp:heading {"textAlign":"center","textColor":"ti-fg-alt"} -->
<h2 class="has-text-align-center has-ti-fg-alt-color has-text-color">Before we even knew it, we were off the ground and flying</h2>
<!-- /wp:heading -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"ti-accent","className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-ti-accent-background-color has-background wp-element-button">Shop NOW</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
',
);

