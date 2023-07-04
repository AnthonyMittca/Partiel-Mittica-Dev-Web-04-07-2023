<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>Résultats du quizz</title>
</head>
<body>
    <div class="rond">
        <img/>
    </div>
    <?php
    if (isset($_GET['score'])) {
        $score = $_GET['score'];
        if ($score >= 2) {
            echo "<h2>Un grand bravo !</h2>";
        } else {
            echo "<h2>C'est pas ouf :/</h2>";
        }
        echo "<p>Votre score : $score / 3</p>";
    } else {
        echo "<h2>Erreur : Aucun score trouvé.</h2>";
    }
    ?>
</body>
</html> 