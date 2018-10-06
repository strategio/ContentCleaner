<?php

namespace Strategio\ContentCleaner;

class Filter {

	/** @var Settings $settings */
	private $settings;

	public function __construct( Settings $settings ) {
		$this->settings = $settings;
	}

	/**
	 * @param string $content
	 *
	 * @return string
	 */
	public function filter( $content ) {
		// @todo: Implement the filter logic
		return $content;
	}
}
