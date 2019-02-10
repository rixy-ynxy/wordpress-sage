<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
    public function category_loop() {
        $args = array(
            'post_type' => 'post',
            'orderby' => 'desc',
            'category__not_in' => array(6),
        );
        $the_query = new \WP_Query($args);
        return $the_query;
    }

    public function front() {
        if (is_front_page('$front')){
            return 'home';
        } else {
            return 'page';
        }
    }
}
