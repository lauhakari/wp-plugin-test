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
			$post_content = "EOF
			<i>This is the excerpt.</i>
			<!--more-->
			This is the <b>body</b>.";

			$post_id = $this->factory->post->create( compact( 'post_content' ) );

			$expected = "
			<p><i>This is the excerpt.</i><br />
			<span id="more-{$post_id}"></span><br />
			This is the <b>body</b>.</p>";

			$this->go_to( get_permalink( $post_id ) );
			$this->assertTrue( is_single() );
			$this->assertTrue( have_posts() );
			$this->assertNull( the_post() );

			$this->assertEquals( strip_ws( $expected ), strip_ws( get_echo( 'the_content' ) ) );
		}

	}