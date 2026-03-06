<?php
require 'BlogArticle.php';

$article = new BlogArticle("OOp in PHP", "discover the origins of OOp.", "amine");
echo $article->show();