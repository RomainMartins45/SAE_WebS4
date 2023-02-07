<html>
<head>
<title > Exemple PHP </title>
<link rel="stylesheet" href="formulaire.css">
</head>
<body>
<?php 
        include_once('questions.php');
        $compteur = 1;
        $affichage.= "<form>";
        $score = 0;
        foreach ($questions as $question){
                if($question->checkreponse($_REQUEST['question' . $compteur])){
                    $affichage.= $question->afficherBonneReponse($compteur);
                    $compteur += 1;
                    $score += 1;
                }
                else{
                    $affichage.= $question->afficherFausseReponse($compteur,$_REQUEST['question' . $compteur]);
                    $compteur += 1;
                }
        }
        if ($score > $compteur / 2){
            $affichage .= "<p style = 'color: #06CE59;'> Félicitations, vous finissez donc ce quizz avec un score de " . $score . "/" . $compteur . " !";
        }
        else{
            $affichage .= "<p style = 'color: #D23014;'> Dommage, vous finissez donc ce quizz avec un score de " . $score . "/" . $compteur . " !";
        }
        $affichage.= "</form>";
        echo $affichage
?>
</body>
</html>