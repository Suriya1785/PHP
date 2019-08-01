<?php
     function getMountains() {
        $mysqli = getConnection();

        if ($mysqli) {
            $mountains = array();
            $sql = "SELECT MOUNTAIN_NAME, MOUNTAIN_ELEV, MOUNTAIN_IMG FROM MOUNTAIN";
            $res = $mysqli->query($sql);
            
            if(!$res){
               die('There was an error running the query [' . $mysqli->error . ']');
            } else {
               while ($row = $res->fetch_assoc()) {
                   $mountains[] = $row;
               }
            }

            $mysqli->close();
            return json_encode($mountains);
        } // else we could not connect to the DB            
    }
?>