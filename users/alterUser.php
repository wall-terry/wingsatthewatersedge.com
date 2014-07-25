<?php

require_once '../model/database.php';
require_once '../utilities/main.php';


$user_name = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$user_email = filter_input(INPUT_POST, 'email');
$user_password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
$verify_password = filter_input(INPUT_POST, 'verifyPassword', FILTER_SANITIZE_STRING);
$new_password = filter_input(INPUT_POST, 'newPassword', FILTER_SANITIZE_STRING);
$userID = $_SESSION['userID'];
        
if ($user_password == $verify_password) {
    echo "Username is $user_name email is $user_email the new password is $new_password and user ID is $userID";
    $rowCount = alterUserAccount($user_name, $user_email, $new_password, $userID);
    
    $_SESSION['userID'] = $userID;
    $_SESSION['username'] = $user_name;
   
    $message = "";
    header('Location:/index.php?action=home' );
    

            
} else {
    echo 'Passwords did not match. <br>';
    echo "Password is $user_password and verify Password is $verify_password .";
    $userID = $_SESSION['userID'];
    $user = get_user_from_userID($userID);
    include '../users/editUserView.php';
    $message = 'Passwords do not match.';
}