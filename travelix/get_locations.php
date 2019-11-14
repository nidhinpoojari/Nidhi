<?php
     
    require 'init.php';
     
    try {
     
        $db = new PDO($dsn, $user_name, $user_password);
        $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
         
        $sth = $db->query("SELECT * FROM locations");
        $locations = $sth->fetchAll();
         
        echo json_encode( $locations );
         
    } catch (Exception $e) {
        echo $e->getMessage();
    }

?>