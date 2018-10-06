<?php

use Strategio\ContentCleaner\Settings;

class TestSettings extends \ContentCleanerTestCase {

	/**
	 * @test
	 */
	public function it_should_get_words() {
		$expected_words = array(
			'Hi' => 'Howdy',
		);

		$subject = new Settings();

		$this->assertEquals( $expected_words, $subject->get_words() );
	}
}
