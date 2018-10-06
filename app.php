<?php
/**
Plugin Name: Clean Content
Plugin URI: https://strategio.fr
Description: A plugin to clean up content.
Author: Pierre Sylvestre
Version: 1.0.0
Author URI: https://strategio.fr
*/

require_once 'vendor/autoload.php';

( new \Strategio\ContentCleaner\App() )->run();