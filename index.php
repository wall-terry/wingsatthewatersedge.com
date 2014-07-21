<?php

require_once 'model/database.php';
require_once 'utilities/main.php';

if (filter_has_var(INPUT_GET, 'action')) {
    $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
} elseif (filter_has_var(INPUT_POST, 'action')) {
    $action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);
} else {
    $action = 'home';
}

switch ($action) {
    case 'home':
        include ('homeview.php');
        break;

    case 'login':
        include ('loginView.php');
        break;
    
    case 'login_failed':
        $error_message = 'Unknown Username or Passsword';
        include ('loginView.php');
        break;

    case 'new_account':
        include 'users/createAccountView.php';
        break;

    default:
        break;
}



