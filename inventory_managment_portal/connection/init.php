<?php
    session_set_save_handler('_open',
                         '_close',
                         '_read',
                         '_write',
                         '_destroy',
                         '_clean');
    session_start();
    //error_reporting(0);
    require 'connect.php';
    $errors= array();
?>
