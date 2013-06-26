<?php

/**
 * Tests for the WP Plugin Test plugin.
 *
 * @package wp-plugin-test
 */
class WP_Plugin_Test_Captcha extends WP_UnitTestCase {


	$this->factory->blog->create_many( 3 );

	function test_change_to_blog() {
		$this->assertTrue(switch_to_blog(2););
	}

}