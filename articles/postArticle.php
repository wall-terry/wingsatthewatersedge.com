<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once '../model/database.php';

require_once '../utilities/main.php';


$articleID = filter_input(INPUT_GET, "articleID");

$userID = $_SESSION['userID'];
$username = $_SESSION['username'];
$title = filter_input(INPUT_POST, 'title');
$text = filter_input(INPUT_POST, 'text');


include '../articles/articlesView.php';