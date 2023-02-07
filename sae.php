<html>
<head>
<title > Exemple PHP </title>
<link rel="stylesheet" href="formulaire.css">
</head>
<body>
<?php 
        $affichage = "<h1 id = 'bonjour'> Bonjour " . $_REQUEST['pseudo'] . "</h1>";
        include_once('questions.php');
        $compteur = 1;
        $affichage.= "<form method = 'POST' action='traitement.php'>";
        foreach ($questions as $question){
                $affichage.= $question->afficher($compteur);
                $compteur += 1;
        }
        $affichage.= "<input id='button' type='submit' value='Finir le quizz'>";
        $affichage.= "</form>";
        echo $affichage
?>
</body>
</html>