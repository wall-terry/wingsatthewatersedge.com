<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


require_once '../model/database.php';

require_once '../utilities/main.php';

require_once '../utilities/Paginator.php';




$images = getAllArticles('');
$num_rows = count($images);


$pages = new Paginator;
$pages->items_total = $num_rows;
$pages->mid_range = 9;
$pages->paginate();

$articles = getAllImages($pages->limit);
/*echo $pages->display_pages();*/

include '../articles/articlesView.php';