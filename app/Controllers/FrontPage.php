<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
    public function quest_loop() {
        $args = array(
            'post_type' => 'quest',
            'orderby' => 'desc',
        );
        $the_query = new \WP_Query($args);
        return $the_query;
    }
}
