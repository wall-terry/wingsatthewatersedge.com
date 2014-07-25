<?php

require_once '../model/database.php';

require_once '../utilities/main.php';


$articleID = filter_input(INPUT_POST, "articleID");


$article = getArticleData($articleID);

if ($_SESSION['username'] == $article['username']){
   include '../articles/editArticleView.php'; 
} else {
   include '../articles/articleView.php'; 
}
