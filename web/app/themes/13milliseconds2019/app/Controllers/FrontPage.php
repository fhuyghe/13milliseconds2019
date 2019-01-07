<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class FrontPage extends Controller
{

    public function portfolio() {
	    $args = array(
	    	'post_type' => 'post',
	    	//'orderby'	=> 'rand',
	    	//'posts_per_page' => 10,
	    );
	    $the_query = new WP_Query( $args );
	    return $the_query->posts;
	}
	
	public function location() {
        return get_field('location', 'option');
	}

}
