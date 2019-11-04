<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class PageAbout extends Controller
{

	public function data() {
		
		$data['client_section'] = get_field('client_section');
		$data['sharon_photo'] = get_field('sharon_photo');
		$data['francois_photo'] = get_field('francois_photo');
		
		return $data;
	}

}
