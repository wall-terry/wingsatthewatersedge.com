<?php



require_once '../model/database.php';

require_once '../utilities/main.php';

require_once '../utilities/Paginator.php';




$images = getAllImages('');
$num_rows = count($images);


$pages = new Paginator;
$pages->items_total = $num_rows;
$pages->mid_range = 9;
$pages->paginate();

$images = getAllImages($pages->limit);
/*echo $pages->display_pages();*/

include '../galleries/galleryView.php';