<?php
class Article {
    protected $title;
    protected $content;

    public function __construct($title, $content) {
        $this->title = $title;
        $this->content = $content;
    }

    public function show() {
        return "Title : " . $this->title . " - Content : " . $this->content;
    }
}

