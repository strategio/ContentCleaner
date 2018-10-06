<?php

namespace Strategio\ContentCleaner;

// @todo: make the settings writable/readable from DB
class Settings {

	/**
	 * @return array search => replace
	 */
	public function get_words() {
		return array(
			'Hi' => 'Howdy',
		);
	}
}
