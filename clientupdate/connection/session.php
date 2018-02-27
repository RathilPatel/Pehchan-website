<?php

include 'init.php';
/*function _open() {
    global $_sess_db;

    $db_user = $_SERVER['root'];
    $db_pass = $_SERVER[''];
    $db_host = 'localhost';
    
    if ($_sess_db = mysql_connect($db_host, $db_user, $db_pass)) {
        return mysql_select_db('sessions', $_sess_db);
    }
    
    return FALSE;
}*/

function _close() {
    global $_sess_db;
    
    return mysql_close($_sess_db);
}

function _read($id) {
    global $_sess_db;

    $id = mysql_real_escape_string($id);

    $sql = "SELECT id
            FROM   Sessions_details
            WHERE  id = '$id'";

    if ($result = mysql_query($sql, $_sess_db)) {
        if (mysql_num_rows($result)) {
            $record = mysql_fetch_assoc($result);

            return $record['data'];
        }
    }

    return '';
}

function _write($id, $data) {   
    global $_sess_db;

    $access = time();

    $id = mysql_real_escape_string($id);
    $access = mysql_real_escape_string($access);
    $data = mysql_real_escape_string($data);

    $sql = "REPLACE 
            INTO    Session_details
            VALUES  ('$id', '$access', '$data')";

    return mysql_query($sql, $_sess_db);
}

function _destroy($id) {
    global $_sess_db;
    
    $id = mysql_real_escape_string($id);

    $sql = "DELETE
            FROM   Session_details
            WHERE  id = '$id'";

    return mysql_query($sql, $_sess_db);
}

function _clean($max) {
    global $_sess_db;
    
    $old = time() - $max;
    $old = mysql_real_escape_string($old);

    $sql = "DELETE
            FROM   Session_details
            WHERE  access < '$old'";

    return mysql_query($sql, $_sess_db);
}

?>