<?php
    $db = new SQLite3('diariLocal.db');

    $resultats = $db->query("SELECT * FROM noticies ORDER BY not_seccio");

    while($fila = $resultats->fetchArray(SQLITE3_ASSOC)){
        echo "SECCIÓ: ". $fila['not_seccio']. "</br>";
    }
    $db->close();
?>