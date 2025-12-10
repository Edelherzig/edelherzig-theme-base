<?php
/**
 * Class Test_Loading
 *
 * @package edelherzig
 */

class Test_Loading extends WP_UnitTestCase {
	/**
	 * Test Constants.
	 */
	public function testConstants() {
		$this->assertTrue( defined( 'EDELHERZIG_VERSION' ) );
		$this->assertTrue( defined( 'EDELHERZIG_DEBUG' ) );
		$this->assertTrue( defined( 'EDELHERZIG_DIR' ) );
		$this->assertTrue( defined( 'EDELHERZIG_URL' ) );
	}

	/**
	 * Make sure debug is false.
	 */
	public function testDebugOff() {
		$this->assertEquals( EDELHERZIG_DEBUG, WP_DEBUG );
	}

	/**
	 * Make sure Core is loaded.
	 *
	 * @return void
	 */
	public function testCoreLoaded() {
		$this->assertTrue( class_exists( 'Edelherzig\Core', false ) );
	}
}
