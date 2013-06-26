<?php

/**
 * Tests for the WP Plugin Test plugin.
 *
 * @package wp-plugin-test
 */
class WP_Plugin_Test_Captcha extends WP_UnitTestCase {


	function test_change_to_blog() {
		$this->factory->blog->create_many( 3 );

		$this->assertTrue(switch_to_blog(2));
	}

}