//EXERCICI 2
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    for($i = 100; $i > 0; $i++){
        if($i%3== 0){
        echo "<b><i><u>$i</u></i></b>";
        } else if($i ==0){
            echo "<b>$i</b>";
        }else{
            echo "<i><b>$i</b></i>";
        };
    }
?>
</body>
</html>