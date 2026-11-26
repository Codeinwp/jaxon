<?php
/**
 * Support Hub metadata test.
 *
 * @package jaxon
 */

class Test_Support_Hub extends WP_UnitTestCase {
	/**
	 * The Support Hub opt-in wires jaxon_support_hub_metadata and returns the
	 * expected is_pro flag and the exact Help-form links, in order.
	 */
	public function test_support_hub_metadata_is_registered_and_complete() {
		new \Jaxon\Admin(); // Registers the filter in its constructor.

		$meta = apply_filters( 'jaxon_support_hub_metadata', array() );

		$this->assertFalse( $meta['is_pro'], 'Jaxon is a free theme with no Pro tier.' );
		$this->assertSame(
			array(
				array(
					'icon' => 'book-alt',
					'text' => 'Documentation',
					'url'  => 'https://docs.themeisle.com/fse-themes/jaxon-fse-theme',
				),
				array(
					'icon' => 'groups',
					'text' => 'Community Forum',
					'url'  => 'https://wordpress.org/support/theme/jaxon/',
				),
			),
			$meta['links']
		);
	}
}
