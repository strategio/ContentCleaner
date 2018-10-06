<?php

namespace Strategio\ContentCleaner;

class App {

	/**
	 * @test
	 */
	public function run() {
		$hooks = new Hooks( new Filter( new Settings() ) );
		$hooks->add_hooks();
	}
}
