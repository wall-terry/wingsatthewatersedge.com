<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once '../model/database.php';

require_once '../utilities/main.php';

//truncate a string only at a whitespace (by nogdog)
function truncate($text, $length) {
   $length = abs((int)$length);
   if(strlen($text) > $length) {
      $text = preg_replace("/^(.{1,$length})(\s.*|$)/s", '\\1...', $text);
   }
   return($text);
}


$userID = $_SESSION['userID'];
$username = $_SESSION['username'];
$title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
$text = filter_input(INPUT_POST, 'text', FILTER_UNSAFE_RAW);
$description = truncate(filter_input(INPUT_POST, 'text', FILTER_SANITIZE_STRING), 240);

$articleID = createArticle($userID, $username, $title, $text, $description);

if ($articleID){ 
    
header("Location: /articles/article.php?articleID=$articleID");

} else {
    $message = 'Article not succesfully uploaded';
    include '/articles/newArticleView.php';       
}