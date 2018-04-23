<?php
 require('bdd.php');
  $query=$bdd->prepare('SELECT ident, mdp FROM admin WHERE ident = :ident AND mdp  =:mdp');
        $query->bindValue(':ident',$_POST['pseudo'], PDO::PARAM_STR);
		  $query->bindValue(':mdp',$_POST['mdp'], PDO::PARAM_STR);
        $query->execute();
        $data=$query->fetch();
		if($data['ident'] == $_POST['pseudo'] && $data['mdp'] == $_POST['mdp'])
		{
			echo 'Vous êtes connecté, redirection...';
			
			
			
			
				header("refresh:2;url=adminpanel.html");  
  exit();
			}

		elseif($data['ident'] !== $_POST['pseudo'])
		{
			echo 'Mauvais pseudo ou mdp';
		}
 ?>
 
 
 
 
 
 
