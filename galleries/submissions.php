<?php

require_once '../model/database.php';
require_once '../utilities/main.php';



If(isset($_SESSION['userID'])){
include ('../galleries/submitImageView.php');
} else { header("Location: ../index.php");
}