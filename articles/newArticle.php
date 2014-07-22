<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



require_once '../model/database.php';
require_once '../utilities/main.php';

If(isset($_SESSION['userID'])){
include ('../articles/newArticleView.php');
} else { header("Location: ../index.php");
}