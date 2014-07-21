<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../model/database.php';
require_once '../utilities/main.php';

$user_name = filter_input(INPUT_POST,'username',FILTER_SANITIZE_STRING);
$user_password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
$user_data = check_user_login($user_name, $user_password); 

if (isset($user_data['userID'])){
    $_SESSION['userID'] = $user_data['userID'];
    $_SESSION['username'] = $user_data['username'];
    

    header('Location:/index.php?action=home' );

} else {
    
    header('Location:/index.php?action=login_failed' );

}

