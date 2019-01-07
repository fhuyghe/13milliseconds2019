<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Single extends Controller
{
	
	public function media() {
		return get_field('media');
	}

	public function color() {
		return get_field('color');
	}

}
