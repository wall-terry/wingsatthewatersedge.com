<?php



require_once '../model/database.php';
require_once '../utilities/main.php';



if (filter_has_var(INPUT_GET, 'imageID')) {
    $imageID = filter_input(INPUT_GET, 'imageID');
  
} elseif (filter_has_var(INPUT_POST, 'imageID')) {
    $imageID = filter_input(INPUT_POST, 'imageID');
   
}
If (isset($imageID)) {
    $imageData = getImageData($imageID);
    $imagefile = $imageData['filename'];
    $user_name = $imageData['username'];
    $userID = $imageData['userID'];
    $title = $imageData['title'];
    $description = $imageData["description"];

} else {
    $imagefile = 'no_pic_available.jpg';
    $user_name = 'System Operator';
    $userID = 'System';
    $title = 'Image Not Available';
    $description = 'That image was not found';
   
}

include ('../galleries/imageView.php');
