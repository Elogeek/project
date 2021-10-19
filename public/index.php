<?php

require dirname(__FILE__) . './../src/Entity/Article.php';
require dirname(__FILE__) . './../src/Manager/ArticleManager.php';
require dirname(__FILE__) . './../src/Controller/Controller.php';
require dirname(__FILE__) . '/../src/Controller/HomeController.php';

$controller = new HomeController();
$controller->articles();