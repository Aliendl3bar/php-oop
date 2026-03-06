<?php
require 'Article.php';

class BlogArticle extends Article {
    private $auteur;

    public function __construct($title, $content, $author) {
        parent::__construct($title, $content);
        $this->auteur = $author;
    }

    public function show() {
        return parent::show() . " - Author : " . $this->auteur;
    }
}