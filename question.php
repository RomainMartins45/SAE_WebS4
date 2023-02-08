<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="formulaire.css">
        <title>Questionnaire</title>
</head>
<body>      
</body>
</html>
<?php 
        include_once('questions.php');
        $compteur = 1;
        $affichage= "<form method ='POST' action='traitement.php?id=" . $_GET['id'] . "'>";
        foreach ($listeQuestionnaires as $questionnaires){
                if($questionnaires->getId() == $_GET['id']){
                        foreach ($questionnaires->getQuestions() as $question){
                                $affichage.= $question->afficher($compteur);
                                $compteur += 1;
                        }
                }
        }
        $affichage.= "<input id='button' type='submit' value='Finir le quizz'>";
        $affichage.= "</form>";
        echo $affichage
?>