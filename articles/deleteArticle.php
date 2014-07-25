<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once '../model/database.php';
require_once '../utilities/main.php';

$articleID = filter_input(INPUT_POST,'articleID');
$username = filter_input(INPUT_POST, 'username');
If($_SESSION['username'] == $username){
    deleteArticle($articleID);
    header('Location:../articles/articles.php');
}else{
    header('Location: ../index.php');
}