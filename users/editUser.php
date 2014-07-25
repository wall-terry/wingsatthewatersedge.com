<?php

require_once '../model/database.php';
require_once '../utilities/main.php';

$userID = $_SESSION['userID'];
$user = get_user_from_userID($userID);

include '../users/editUserView.php';
   
