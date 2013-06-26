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

		function test_the_content() {

			$blog_id = $this->factory->blog->create(array('path' => '/test_blogpath', 'title' => 'Test Title' ));

			switch_to_blog( $blog_id );
			$current_blog_id = get_current_blog_id();

			$this->assertEquals($current_blog_id, $blog_id);
			//$this->assertTrue();
		}

	}