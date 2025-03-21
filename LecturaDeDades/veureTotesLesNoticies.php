<?php
    $db = new SQLite3('diariLocal.db');

    $resultats = $db->query("SELECT * FROM noticies ORDER BY not_data");

    while($fila = $resultats->fetchArray(SQLITE3_ASSOC)){
        if($fila['not_seccio'] == "Cultura"){
            echo "${fila['not_id']} - ${fila['not_titular']}
            ${fila['not_data']} - ${fila['not_seccio']}
            <p>${fila['not_cos']}</p>";
        }
    }
    
    $db->close();
?>