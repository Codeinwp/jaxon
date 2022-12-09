<?php
/**
 * Class Test_Loading
 *
 * @package jaxon
 */

class Test_Loading extends WP_UnitTestCase {
	/**
	 * Test Constants.
	 */
	public function testConstants() {
		$this->assertTrue( defined( 'JAXON_VERSION' ) );
		$this->assertTrue( defined( 'JAXON_DEBUG' ) );
		$this->assertTrue( defined( 'JAXON_DIR' ) );
		$this->assertTrue( defined( 'JAXON_URL' ) );
	}

	/**
	 * Make sure debug is false.
	 */
	public function testDebugOff() {
		$this->assertEquals( JAXON_DEBUG, WP_DEBUG );
	}

	/**
	 * Make sure Core is loaded.
	 *
	 * @return void
	 */
	public function testCoreLoaded() {
		$this->assertTrue( class_exists( 'Jaxon\Core', false ) );
	}
}