<?php

/**
 * Tests for the WP Plugin Test plugin.
 *
 * @package wp-plugin-test
 */
class WP_Plugin_Test extends WP_UnitTestCase {

	function setUp() {
		parent::setUp();
	}

function test_change_to_blog() {

		global $wpdb;



		$this->assertObjectHasAttribute('post_date', get_post(1);
/*
		$blog_ids = $this->factory->blog->create_many( 4 );
		foreach ( $blog_ids as $blog_id ) {
			$this->assertTrue(switch_to_blog($blog_id));
		}
*/
	}

}