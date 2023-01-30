<html>
<head>
<title > Exemple PHP </title>
<link rel="stylesheet" href="formulaire.css">
</head>
<body>
<?php 
        echo "<h1 id = 'bonjour'> Bonjour " . $_REQUEST['prenom'] . " " . $_REQUEST['nom'] . "</h1>";
        include_once('test.php');
        $compteur = 1;
        echo "<form method = 'POST' action=''>";
        foreach ($questions as $question){
                echo $question->afficher($compteur);
                $compteur += 1;
        }
        echo "<input id='button' type='submit' value='Finir le quizz'>";
        echo "</form>";
?>
</body>
</html>