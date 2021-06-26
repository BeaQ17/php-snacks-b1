<?php

    /* 1 
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
            "team_c" => "Lugagnano",
            "punti_c" => "50",
            "team_o" => "Bussolengo",
            "punti_o" => "40"
        ],
        [
            "team_c" => "Caselle",
            "punti_c" => "50",
            "team_o" => "Sona",
            "punti_o" => "30"
        ],
    ];


    /* 2
    Passare come parametri GET name, mail e age 
    verificare 
    - che name sia più lungo di 3 caratteri, 
    - che mail contenga un punto e una chiocciola 
    - che age sia un numero 
    Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
    */

    /*
    $risultato;
    if(var_dump(isset($_GET["name"]) && isset($_GET["email"]) && isset($_GET["age"])) {
        var_dump(is_numeric($_GET["age"]));
        $pattern = "/.+@.+\.[A-z]*m"; <- put /
        var_dump(preg_match($pattern, $_GET["mail"]));

        if (strlen($_GET["name"]) > 3 && is_numeric($_GET["age"]) && preg_match($pattern, $_GET["email"])) {
            $risultato = "Accesso riuscito";
            echo $risultato;
        } else {
            $risultato = "Accesso negato";
            echo $risultato
        }
    } */
    


    /* 3 */
    /*

    $posts = [
        "01/01/2020" => [
            "title" => "Primo",
            "author" => "Admin",
            "text" => "Testo primo post"
        ],
        "02/01/2020" => [
            "title" => "Secondo",
            "author" => "Admin",
            "text" => "Testo secondo post"
        ], 
        "03/01/2020" => [
            "title" => "Terzo",
            "author" => "Admin",
            "text" => "Testo terzo post"
        ], 
        "04/01/2020" => [
            "title" => "Quarto",
            "author" => "Admin",
            "text" => "Testo quarto post"
        ],
    ];

    $keys = array_keys($posts);

    for($i = 0; $i < count($keys); $i++) {
        $key = $keys[$i];
        var_dump($key);
        var_dump($posts[$key]);

        for ($j=0; $j < count($posts[$keys]); $j++) { 
            $post = $posts[$key][$j];
        }
    }
   
*/
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

        <!-- 1 -->
        <h1>Snack 1 - Girone</h1>
        
        <?php foreach ($teams as $key => $team) { ?>
            <p>
                <?php echo $team["team_c"] ?> - 
                <?php echo $team["team_o"] ?> | 
                <?php echo $team["punti_c"] ?> -
                <?php echo $team["punti_o"] ?>
            </p>
        <?php } ?>

        <hr>

        <!-- 2 -->
        <h1>Snack 2 - Email</h1>

        <hr>

        <!-- 3 -->
        <h1>Snack 3 - Posts</h1>

        <h2><?= $post["title"]; ?></h2>
        

</body>
</html>