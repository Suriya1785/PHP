<?php
    function getConnection() {
        $server_name = "localhost";
        $user_name = "hca";
        $password = "password";
        $db = "demo";

        $mysqli = new mysqli($server_name, $user_name, $password, $db);
        
        if ($mysqli->connect_errno) {
            return null;
        } else {
            return $mysqli;
        }
    }
?>
