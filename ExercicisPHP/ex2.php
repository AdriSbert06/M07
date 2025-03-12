//EXERCICI 2
<?php
    for($i = 100; i > 0; $i++){
        if($i == 0){
        echo "<b><i><u>$i</u></i></b>";
        } else if($i %2==0){
            echo "<b>$i</b>";
        }else{
            echo "<i><b>$i</b></i>";
        };
    }
?>