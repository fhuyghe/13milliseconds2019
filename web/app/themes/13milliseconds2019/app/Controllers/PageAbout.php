<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class PageAbout extends Controller
{

	public function clients() {
        return get_field('client_section');
	}

}
