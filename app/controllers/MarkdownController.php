<?php

class MarkdownController extends BaseController {
    public function parse() {

        $data = Input::all();

        $markdownText = $data['text'];

        return Markdown::parse($markdownText);
    }
}
