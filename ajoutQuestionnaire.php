<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formulaire.css">
    <title>Réponses</title>
</head>
<body>
    
</body>
</html>
<?php 
        include_once('connection.php');

        $maxID = $connexion->prepare("SELECT MAX(id) AS max_id FROM questionnaires");
        $maxID->execute();
        $result = $maxID->fetch(PDO::FETCH_ASSOC);

        $idMax = $result['max_id'];

        $sql = "INSERT INTO questionnaires (id, titre, utilisateur_id) VALUES (?, ?, ?)";
        $ajoutQuestionnaire = $connexion->prepare($sql);
        $ajoutQuestionnaire->execute([$idMax + 1, $_POST['nomQuestionnaire'], 1]);

        $data = array(
            'id' => $idMax + 1,
            'titre' => $_POST['nomQuestionnaire'],
            'utilisateur_id' => 1
          );
          
 
        $json = json_encode($data);
        file_put_contents('questionnaire.json', $json);
          

        
        header("Location: questionnaires.php");
        exit;


?>