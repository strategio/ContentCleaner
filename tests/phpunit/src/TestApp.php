<?php

use \Strategio\ContentCleaner\App;

class TestApp extends \ContentCleanerTestCase {

	/**
	 * @test
	 */
	public function it_should_run() {
		$subject = new App();
		$subject->run();
	}
}
