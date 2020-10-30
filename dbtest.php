<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liens BDD</title>
</head>
<body>

    <p>Inscrivez vous</p>

    <form action="dbtest.php" method="POST">

        Votre nom : <input type="text" name="nom_utilisateur"><br><br>
        Votre prénom : <input type="text" name="prenom_utilisateur"><br><br>
        Votre adresse email : <input type="text" name="mail_utilisateur"><br><br>
        Votre mot de passe : <input type="text" name="mdp_utilisateur"><br><br>
        <input type="submit" value="Submit" name="submit">

    </form>


    <?php
    $hostname = "localhost";
    $username = "dvtdggyq_invite";
    $password = "InvitePHPMyAdmin0!";
    $db = "utilisateur";

    $bdd = new PDO('mysql:host=localhost;dbname=dvtdggyq_firstDB;charset=utf8', 'dvtdggyq_invite', 'InvitePHPMyAdmin0!');

    if ($dbconnect->connect_error) {
    die("Erreur :" . $dbconnect->connect_error);
    }

    if(isset($_POST['submit'])) {
        $nom_utilisateur=$_POST['nom_utilisateur'];
        $prenom_utilisateur=$_POST['prenom_utilisateur'];
        $mail_utilisateur=$_POST['mail_utilisateur'];
        $mdp_utilisateur=$_POST['mdp_utilisateur'];

        $req = $bdd->prepare('INSERT INTO utilisateur(mail_utilisateur, mdp_utilisateur, nom_utilisateur, prenom_utilisateur)
        VALUES(:mail_utilisateur, :mdp_utilisateur, :nom_utilisateur, :prenom_utilisateur)');

        $req->execute(array(
            'mail_utilisateur' => $mail_utilisateur,
            'mdp_utilisateur' => $mdp_utilisateur,
            'nom_utilisateur' => $nom_utilisateur,
            'prenom_utilisateur' => $prenom_utilisateur,
        ));

        echo 'Votre lien a bien été ajouté !';
    }
    ?>
</body>
</html>