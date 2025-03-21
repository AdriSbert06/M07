<?php
    $db = new SQLite3('diariLocal.db');

    $resultats = $db->query("SELECT * FROM noticies");

    while($fila = $resultats->fetchArray(SQLITE3_ASSOC)){
        echo "ID: ". $fila['not_id']. "- DATA: ". $fila['not_data']. "- SECCIÓ: ". $fila['not_seccio']. "</br>";

    
    }
    $db->close();
?>