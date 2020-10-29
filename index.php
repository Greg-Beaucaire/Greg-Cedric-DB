<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liens BDD</title>
</head>
<body>
    <h1>accéder à une BDD</h1>
    <?php
    $bdd = new PDO('mysql:host=localhost;dbname=dvtdggyq_firstDB;charset=utf8', 'dvtdggyq_invite', 'InvitePHPMyAdmin0!');
    $reponse = $bdd->query('SELECT * FROM liens');
    $donnees = $reponse->fetch();
    echo $donnees['mail_utilisateur'];
    echo $donnees['nom_utilisateur'];
    while ($donnees = $reponse->fetch()) {
    ?>
    <p>Nom du lien : <?php echo $donnees['titre_lien']; ?> <?php echo $donnees['hashtag_lien']; ?><br/>
    URL du lien : <a href="<?php echo $donnees['url_lien']; ?>"><?php echo $donnees['url_lien']; ?><a/><br/>
    Description du lien : <?php echo $donnees['description_lien']; ?><br/>
    Date d'ajout du lien : <?php echo $donnees['date_lien']; ?>
    </p>
    <?php
    }
    ?>    
</body>
</html>