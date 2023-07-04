<?php
// Questions et réponses
$questions = [
    [
        'question' => 'Quelle est la capitale de la France ?',
        'reponses' => ['Paris', 'Lyon', 'Marseille bébé'],
        'answer' => "3"
    ],
    [
        'question' => 'Complétez l’expression : Avoir les yeux plus gros que le ____',
        'reponses' => ['Pied', 'Ventre', 'Nez'],
        'answer' => "1"
    ],
    [
        'question' => 'Que signifie en français le mot « Guten Tag » en allemand, « kalimera » en grec, « buongiorno » en italien ?',
        'reponses' => ['Merci', 'Bonjour', 'Au revoir'],
        'answer' => "1"
    ]
];

// Vérifier les réponses soumises
$score = 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($questions as $index => $question) {
        $answerKey = 'q' . ($index + 1);
        if (isset($_POST[$answerKey]) && $_POST[$answerKey] === $question['answer']) {
            $score++;
        }
    }

    // Rediriger vers la page de résultat
    header("Location: resultat.php?score=$score");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>Questions Quizz</title>
</head>
<body class="questions">
    <form method="POST">
        <?php foreach ($questions as $index => $question): ?>
            <div class="question<?= $index + 1 ?>">
                <img src="./Images/question.png" alt="Image">
                <h3>Question n°<?= $index + 1 ?></h3>
                <p><?= $question['question'] ?></p>
                <?php foreach ($question['reponses'] as $key => $reponse): ?>
                    <div class="radio"><input type="radio" name="q<?= $index + 1 ?>" value="<?= $key + 1 ?>"> <?= $reponse ?><br></div>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>

        <input type="submit" value="Valider">
    </form>
</body>
</html>