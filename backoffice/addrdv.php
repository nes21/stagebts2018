<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<?php
require('bdd.php');
?>
<?php
//Your var
$nom = $_POST['nom'];
$nom = ucfirst(strtolower($nom));
$prenom = $_POST['prenom'];
$prenom = ucfirst(strtolower($prenom));
$num = $_POST['num'];
$num = ucfirst(strtolower($num));
  
  
//On prépare la requête
$requete = $bdd->prepare('INSERT INTO rdv(nom, prenom, num) VALUES(:nom,:prenom,:num)');
// On lie les variables définie au-dessus au paramètres de la requête préparée
$requete->bindValue(':nom', $nom, PDO::PARAM_STR); 
$requete->bindValue(':prenom', $prenom, PDO::PARAM_STR);
$requete->bindValue(':num', $num, PDO::PARAM_STR);
//On exécute la requête
$requete->execute();
header("refresh:3;url=index.html");

?>
<center><h2>Votre rendez-vous a été enregistré !</h2>
<h4>Vous allez être redirigé vers la page d'accueil</h4>
</center>