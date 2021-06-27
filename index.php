<?php

    /* 1 - Girone
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


    /* 2 - Email check
    Passare come parametri GET name, mail e age 
    verificare 
    - che name sia più lungo di 3 caratteri, 
    - che mail contenga un punto e una chiocciola 
    - che age sia un numero 
    Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
    
    $result;
    if(isset($_GET["name"]) && (isset($_GET["mail"]) && (isset($_GET["age"])){
        //var_dump(strlen($_GET["name"]) > 3);
        var_dump(is_numeric($_GET["age"]));
        $pattern = '/.+@.+\.[A-z]*//*m'; ->remove /*
        var_dump(preg_match($pattern, $_GET["mail"]));

        if(strlen($_GET["name"]) >3 && is_numeric($_GET["age"]) && preg_match($pattern, $_GET["mail"])){
            $result = "Accesso riuscito";
            var_dump($result);
        } else {
            $result = "Accesso negato";
            var_dump($result);
        }

    };
    */
    
    


    /* 3 - Blog posts */
    $posts = [

        '10/01/2019' => [
            [
                'title' => 'Post 1',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 1'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 2'
            ],
        ],
        '10/02/2019' => [
            [
                'title' => 'Post 3',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 3'
            ]
        ],
        '15/05/2019' => [
            [
                'title' => 'Post 4',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 4'
            ],
            [
                'title' => 'Post 5',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 5'
            ],
            [
                'title' => 'Post 6',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 6'
            ]
        ],
    ];

    $keys = array_keys($posts);


    /* 4 - Numeri casuali */
    $numsArray = [];
   

    /* 5 - Paragrafi */
    $parag = "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
    Cupiditate nesciunt praesentium quis cumque, in ullam sed, 
    aliquid nulla nostrum eos sint neque error dolores eaque 
    sapiente nemo quibusdam illum et?
    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
    Cupiditate nesciunt praesentium quis cumque, in ullam sed, 
    aliquid nulla nostrum eos sint neque error dolores eaque 
    sapiente nemo quibusdam illum et?Lorem ipsum dolor sit amet 
    consectetur adipisicing elit. 
    Cupiditate nesciunt praesentium quis cumque, in ullam sed, 
    aliquid nulla nostrum eos sint neque error dolores eaque 
    sapiente nemo quibusdam illum et?
    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
    Cupiditate nesciunt praesentium quis cumque, in ullam sed, 
    aliquid nulla nostrum eos sint neque error dolores eaque 
    sapiente nemo quibusdam illum et?";

    $parags = explode(".", $parag);


    /* 6 - Guardie e ladri */
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-snacks 1</title>
    <style>
        .grey{
            background-color: grey;
        }

        .green{
            background-color: green;
        }
    </style>
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

        <!-- 3 -->
        <h1>Snack 3 - Posts</h1>

        <?php
            for ($i=0; $i < count($keys); $i++) { 
                $key = $keys[$i];
                //var_dump($key);
                //var_dumP($posts[$key]);
                ?>
                <div><?= $key; ?></div>
                <?php
                for ($j=0; $j < count($posts[$key]); $j++) { 
                    $post = $posts[$key][$j];
                    //var_dump($post); ?>

                    <h2><?= $post["title"]; ?></h2>
                    <h4><?= $post["author"]; ?></h4>
                    <p><?= $post["text"]; ?></p>

            <?php }
            } ?>

        <hr>   

        <!-- 4 -->
        <h1>Snack 4 - Numeri casuali</h1>
        
        <?php
        while (count($numsArray) <= 15) {
            $nums = rand(0, 100);
            if (!in_array($nums, $numsArray)) {
                $numsArray[] = $nums;
            }
        } ?>
        <p><?= var_dump($numsArray); ?></p>
        

        <hr>

        <!-- 5 -->
        <h1>Snack 5 - Paragrafi</h1>

        <?php
        for ($i=0; $i < count($parags); $i++) { 
            $oneParag = $parags[$i]; ?>
            <p> <?= var_dump($oneParag); ?> </p>
        <?php
        }
        ?>

        <hr>

        <!-- 6 -->
        <h1>Snack 6 - Guardie e ladri</h1>
        <?php
        $ruoli = array_keys($db);
        //var_dump($ruoli);
        for ($i=0; $i < count($db); $i++) { 
            $ruolo = $ruoli[$i];
            ?>
            <div class="<?php echo $ruolo == "teachers" ? "grey" : "green"; ?>">
            <?php
            for ($j=0; $j < count($db[$ruolo]); $j++) { 
                $person = $db[$ruolo][$j];
                ?>
                <p><?php echo $person["name"]." ".$person["lastname"]; ?></p>
            <?php
            }
            ?>
            </div>
        <?php    
        }
        ?>
        
        

</body>
</html>