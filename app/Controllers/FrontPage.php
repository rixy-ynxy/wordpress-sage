<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
    public function members_loop() {
        $args = array(
            'post_type' => 'members',
            'orderby' => 'desc',
        );
        $the_query = new \WP_Query($args);
        return $the_query;
    }
}
