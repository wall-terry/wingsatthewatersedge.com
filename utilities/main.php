<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


// Get the document root
$doc_root = filter_input(INPUT_SERVER, 'DOCUMENT_ROOT');
define('BASE_URL', 'http://wingsatthewatersedge.com');
$base_url = filter_input(INPUT_SERVER, 'HTTP_HOST');

$lifetime = 60 * 60 * 24 * 14;
session_set_cookie_params($lifetime, '/');
session_start();
