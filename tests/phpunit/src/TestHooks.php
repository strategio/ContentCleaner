<?php

use Strategio\ContentCleaner\Hooks;

class TestHooks extends \ContentCleanerTestCase {

	/**
	 * @test
	 */
	public function it_adds_content_filter() {
		$filter = $this->createMock( '\Strategio\ContentCleaner\Filter' );

		$subject = new Hooks( $filter );

		\WP_Mock::expectFilterAdded( 'the_content', array( $subject, 'filter_content' ) );

		$subject->add_hooks();
	}

	/**
	 * @test
	 */
	public function it_should_filter_content() {
		$original_text = 'The original text';
		$filtered_text = 'The filtered text';

		$filter = $this->createMock( '\Strategio\ContentCleaner\Filter' );
		$filter->method( 'filter' )->with( $original_text )->willReturn( $filtered_text );

		$subject = new Hooks( $filter );

		$this->assertEquals( $filtered_text, $subject->filter_content( $original_text ) );
	}
}
