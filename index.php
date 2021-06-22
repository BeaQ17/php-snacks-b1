<?php

    /*1 
    Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
    Ogni array avrà 
    - una squadra di casa 
    - una squadra ospite 
    - punti fatti dalla squadra di casa 
    - punti fatti dalla squadra ospite 
    Stampiamo a schermo tutte le partite con questo schema:
    Olimpia Milano - Cantù | 55-60
    */ 

    $teams = [
        [
            $team_c => "Lugagnano",
            $punti_c => "50",
            $team_o => "Bussolengo",
            $punti_o => "40"
        ],
        [
            $team_c => "Caselle",
            $punti_c => "50",
            $team_o => "Sona",
            $punti_o => "30"
        ],
    ];

    for ($i = 0; $i < count($teams); $i++) {
        echo $teams[i];
    }
   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-snacks 1</title>
</head>
<body>
    
        <h1>Snack 1 - girone</h1>
        <p><?php echo $team_c ?> - <?php echo $team_o ?> | <?php echo $punti_c ?>-<?php echo $punti_o ?></p> 


</body>
</html>