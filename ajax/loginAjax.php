<?php
$peticionAjax = true;
require_once '../config/app.php';

if ( true  ) {
    
} else {
    session_start(['name' => 'SGID' ]);
    session_unset();
    session_destroy();
    header('Location: ' . SERVER_URL . 'login');
}
