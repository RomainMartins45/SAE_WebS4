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
        include_once('connection.php');
        $sup = "DELETE FROM questionnaires where id = ?";
        $supprimerQuestionnaire = $connexion->prepare($sup);
        $supprimerQuestionnaire ->execute([$_GET['id']]);
        header('Location: questionnaires.php');
?>