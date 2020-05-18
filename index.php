<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snacks-b1</title>
</head>
<body>

    <?php 
    /*PHP Snack 1:
     * Creiamo un array ‘matches’ contenente altri array i quali 
     * rappresentano delle partite di basket di un’ipotetica tappa del calendario. 
     * Ogni array della partita avrà una squadra di casa e una squadra ospite, 
     * punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
     * Stampiamo a schermo tutte le partite con questo schema:
     * Olimpia Milano - Cantù | 55-60
     */
    // Ref
    $matches = [
        [
            'home' => 'Brescia',
            'away' => 'Virtus Bologna',
            'home_points' => rand(50, 100),
            'away_points' => rand(50, 100)
        ],
        [
            'home' => 'Brindisi',
            'away' => 'Olimpia Milano',
            'home_points' => rand(50, 100),
            'away_points' => rand(50, 100)
        ],
        [
            'home' => 'Dinamo Sassari',
            'away' => 'Varese',
            'home_points' => rand(50, 100),
            'away_points' => rand(50, 100)
        ],
        [
            'home' => 'Pistoia',
            'away' => 'Trieste',
            'home_points' => rand(50, 100),
            'away_points' => rand(50, 100)
        ]
    ];
    //var_dump($matches);
    ?>
    <ul>
        <?php for ($i = 0; $i < count($matches); $i++) { ?>
            <li>
                <?php echo $matches[$i]['home']; ?> - <?php echo $matches[$i]['away']; ?> | <?php echo $matches[$i]['home_points']; ?> - <?php echo $matches[$i]['away_points']; ?>
            </li>
        <?php } ?>
    </ul>
    <?php
    /**
     * PHP Snack 2:
     * Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che:
     * 1. name sia più lungo di 3 caratteri,
     * 2. che mail contenga un punto e una chiocciola
     * 3. e che age sia un numero. 
     * Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
     */
    // Ref
    $data = $_GET;
    // Controlli per l'accesso
    if (empty($data['name']) || empty($data['mail']) || empty($data['age'])) {
        echo 'Inserire tutti i parametri richiesti';
    }
    elseif (strlen($data['name']) <= 3) {
        echo 'Accesso negato';
    }
    elseif (strpos($data['mail'], '@') === false || strpos($data['mail'], '.') === false) {
        echo 'Accesso negato';
    }
    elseif (!(is_numeric($data['age']))) {
        echo 'Accesso negato';
    }
    else {
        echo 'Accesso riuscito';
    }
    ?>

</body>
</html>