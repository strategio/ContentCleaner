<?php

namespace Strategio\ContentCleaner;

class Hooks {

	/** @var Filter $filter */
	private $filter;

	public function __construct( Filter $filter ) {
		$this->filter = $filter;
	}

	public function add_hooks() {
		add_filter( 'the_content', array( $this, 'filter_content' ) );
	}

	public function filter_content( $content ) {
		return $this->filter->filter( $content );
	}
}
