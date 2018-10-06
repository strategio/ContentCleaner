<?php

use Strategio\ContentCleaner\Filter;

class TestFilter extends \ContentCleanerTestCase {

	/**
	 * @test
	 */
	public function it_should_filter_content() {
		$original_text = 'The original text';

		$settings = $this->createMock( '\Strategio\ContentCleaner\Settings' );

		$subject = new Filter( $settings );

		$this->assertEquals( $original_text, $subject->filter( $original_text ) );
	}
}
