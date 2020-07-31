<?php
namespace wvnElementor\Modules\ACF;

use wvnElementor\Base\Module_Base;

if(! defined('ABSPATH')) exit; // Exit if accessed directly

class Module extends Module_Base {

	public function get_widgets() {
		return [
			'ACF',
		];
	}

	public function get_name() {
		return 'wew-acf';
	}
}
