<?php
    $db = new SQLite3('diariLocal.db');

    $resultats = $db->query("SELECT * FROM noticies ORDER BY not_seccio ASC");

    while ($fila = $resultats->fetchArray(SQLITE3_ASSOC)) {
        echo "<a href='veureNoticiesSeccio.php?seccio=" . urlencode($fila['not_seccio']) . "'- SECCIÓ: ". $fila['not_seccio'] . "</a><br>";
    }
    $db->close();
?>