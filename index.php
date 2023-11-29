<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secret Santa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            text-align: center;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #de2e3f;
            font-size: 50px;
        }
        h3 {
            color: #dc3545;
            font: bold 50px Arial, sans-serif;
        }
        h4 {
            font-size: 9px;
        }

        p {
            color: #333333;
        }

        /* Style pour le message de Noël */
        .christmas-message {
            font-size: 18px;
            color: #4caf50;
            margin-top: 20px;
        }

        /* Style pour les petites images */
        .christmas-image {
            width: 300px;
            height: 200px;
            margin: 0 5px;
        }

        .person-name {
            color: #dc3545;
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Secret Santa</h1>
    <?php

/**
 * Set T53B dans l'url
 */
if (!isset($_GET['T53B'])) {
    header('Location: index.php?T53B=GAD64GJ');
}
/**
* Requpere les get
 */
$nom = $_GET['T53B'];

/**
 * Crée une Array liste
 */
$liste = array(
    'GLCD64GJ' => 'Loïc',
    'GSED64GJ' => 'Sylvie',
    'GDD64GJ' => 'Didier',
    'GRD64GJ' => 'Robin',
    'GOD64GJ' => 'Océane',
    'GLAD64GJ' => 'Laura',
    'GVD64GJ' => 'Vivien',
    'GSOD64GJ' => 'Sophie',
    'GND64GJ' => 'Nico',
    'GCD64GJ' => 'Cathy',
    'GAED64GJ' => 'Anaé',
    'GUD64GJ' => 'Angy',
    'GGD64GJ' => 'Guilhem',
    'GAD64GJ' => 'Alissandre',
);


function afficherPersonneSuivante($nom, $liste)
{
    // Vérifie si la clé existe dans le tableau
    if (array_key_exists($nom, $liste)) {
        // Récupère l'index de la clé
        $index = array_search($nom, array_keys($liste));

        // Vérifie si la clé n'est pas la dernière du tableau
        if ($index < count($liste) - 1) {
            // Récupère la clé de la personne suivante
            $cleSuivante = array_keys($liste)[$index + 1];

            // Affiche le nom de la personne actuelle et la personne suivante
            echo "<h2>Bonjour " . $liste[$nom] . "</h2>";
            echo "<h2>Tu es le Secret Santa de <span class='person-name'>" . $liste[$cleSuivante] . "</span></h2>";

        } else {
            $cleSuivante = array_keys($liste)[0];
            echo "<h2>Bonjour " . $liste[$nom] . "</h2>";
            echo "<h2>Tu es le Secret Santa de <span class='person-name'>" . $liste[$cleSuivante] . "</span></h2>";

        }
    } else {
        // Si la clé n'existe pas, affiche un message d'erreur
        echo "La clé '$nom' n'existe pas dans la liste.";
    }
}

// Appel de la fonction avec le nom récupéré depuis $_GET
afficherPersonneSuivante($nom, $liste);

?>

    <p class="christmas-message">Joyeux Noël ! </p>
    <img src="https://media.tenor.com/GEdFQJGZIfQAAAAC/basketball-dunk-om-nom.gif" alt="Gift" class="christmas-image">
    <h4>( Le site marche critiqué pas mon style graphique )</h4>
</div>
</body>
</html>
