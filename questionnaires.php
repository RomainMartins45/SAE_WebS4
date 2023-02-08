<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="questionnaire.css">
    <title>Questionnaires</title>
</head>
<body>
<?php 
        $affichage = "<h1 id = 'bonjour'> Bonjour " . $_REQUEST['pseudo'] . "</h1>";
        include_once('questions.php');
        $affichage .= "<div id = 'fond'>";
        foreach ($listeQuestionnaires as $questionnaires){
                $affichage .= $questionnaires->afficher();
        }
        $affichage .= "</div>";

        echo $affichage;
?>
</body>
</html>