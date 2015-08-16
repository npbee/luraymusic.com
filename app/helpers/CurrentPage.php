<?php

class CurrentPage {
    public static function get() {
        $is_home = Request::is('/');

        if ($is_home) {
            return '';
        } else {
            $uri = Request::path();

            return $uri;
        }
    }
}
