<?php

    include 'conn.php';

    $id = $_GET['id'];
    
    $query = 'SELECT url FROM resource_meta_data
                WHERE id = "'. $id .'"';


    $result = $mysqli->query($query);
    $count = $result->num_rows;
    
    if( $count > 0 ) {

        $row = $result->fetch_array();
        $result->close();

        header("HTTP/1.1 301 Moved Permanently"); 
        header('Location: '. $row['url']);
        exit;
        
    } else {
        header("HTTP/1.1 301 Moved Permanently"); 
        header('Location: http://www.emcp.com');
        exit;
    }

?>