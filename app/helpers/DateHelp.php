<?php

class DateHelp {
    public static function formatted_date($mydate) {
        $date = date("m/d/Y", strtotime($mydate));
        return $date;
    }
}