<?php

class CurrentPage {
    public static function get() {
        $is_home = Request::is('/');
        $is_admin = Request::is('admin/*');

        if ($is_home) {
            return '';
        } else if ($is_admin) {
            $uri = Request::segment(2);
            return $uri;
        } else {
            $uri = Request::segment(1);
            return $uri;
        }
    }
}
