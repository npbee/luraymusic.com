<?php

class Markdown {
    public static function parse($markdownText) {
        $Parsedown = new Parsedown();
        $text = $Parsedown->text($markdownText);
        return $text;
    }
}
