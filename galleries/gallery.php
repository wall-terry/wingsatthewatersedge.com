<?php

require_once '../utilities/paginator.php';
require_once '../model/database.php';
require_once '../utilities/main.php';

$images = getAllImages();
$num_rows= count($images);

$pages = new Paginator;
$pages->items_total = $num_rows;
$pages->mid_range = 9;
$pages->paginate();
echo $pages->display_pages();