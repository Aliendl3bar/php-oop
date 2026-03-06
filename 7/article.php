<?php
class Article {
    public $title;
    public $content;

    public function show() {
        return "Title : " . $this->title . " - Content : " . $this->content;
    }
}

$article1 = new Article();
$article1->title = "Introduction to PHP";
$article1->content = "PHP is a server-side scripting language.";

echo $article1->show();

$article2 = new Article();
$article2->title = "Object-Oriented Programming in PHP";
$article2->content = "Object-oriented programming in PHP facilitates modularity and maintainability.";

echo "<br>" . $article2->show();