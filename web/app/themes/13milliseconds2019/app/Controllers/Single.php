<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Single extends Controller
{
	
	public function media() {
		return get_field('media');
	}

	public function data() {
		$data['live_link'] = get_field('live_link');
		
		return $data;
	}

}
