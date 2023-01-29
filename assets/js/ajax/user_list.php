<?php

if( $_GET['action'] == 'user_search' ) {
    require '../../../config/config.php';
    $keyword = $_GET['key'];
    $db = new \models\DB();
    // ... search database
    $sql_result = "SELECT * FROM users WHERE name LIKE '%{$keyword}%' or email LIKE '%{$keyword}%'";
    $res = $db->conn->query($sql_result);
    // create array
    while ( $row = $res->fetch_assoc() ) {
        $list[] = [
            'label'		 => $row['email'],
            'disabled'	=> false,
        ];
    }

    // if no result
    if ( !isset( $list ) ) {
        $list[] = [
            'label'		 => 'Not Found',
            'disabled'	=> true,
        ];
    }

    // print data as json
    header('Content-Type: application/json');
    die( json_encode($list) );

}