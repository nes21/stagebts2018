<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Maryse Coiffure</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">

  </head>
<script>
  $(".dropdown-menu li a").click(function(){
  $(this).parents(".dropdown").find('.btn').html($(this).text() + ' <span class="caret"></span>');
  $(this).parents(".dropdown").find('.btn').val($(this).data('value'));
});
</script>
  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.html">Maryse Coiffure<br><p style="font-size : medium;">              Masculin - Féminin<p></a>
	     <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
          <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="services.html" style="font-size : small;">Nos services</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="produits.php" style="font-size : small;">Nos produits</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="rdv.php" style="font-size : small;">Prendre rendez-vous</a>
            </li>
			 <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="contact.html" style="font-size : small;">A propos de nous </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<script>
$(document).ready(function(){
  
        
        $("#intro").fadeIn(3200);
    });

</script>
<?php
// Connexion à la base de données
try
{
$bdd = new PDO('mysql:host=localhost;dbname=marysecoiffure;charset=utf8', 'root', '');}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

?>
<style>
#nom{
width:180%; 
}
#num{
width:180%; 
}
#prenom{
width:180%; 
}
#un
{
	  border: 3px black solid;
box-shadow: 6px 6px 0px black;
 width: 400px;
 height : 35px;
margin: auto;
}

#deux
{
	  border: 3px black solid;
box-shadow: 6px 6px 0px black;
width : 400px;
height : 35px;
margin: auto;
}

#trois
{
	 border: 3px black solid;
box-shadow: 6px 6px 0px black;
width : 400px;
height : 35px;

margin: auto;
}

#formu
{
	margin-left : 95px;
}

</style>
    <!-- Header -->
    <header class="masthead bg-primary text-black text-center text-uppercase">
      <div class="container">
        
		<div id="intro"
		
		
		style="display:none;background-color:white;">
		
		
		<center><h2>Prendre un rendez-vous</h2><img src="http://image.noelshack.com/fichiers/2018/07/1/1518429072-picto1.png"/></center>
		</div>	
      </div>
    </header>
<form action="addrdv.php" method="post">
   <div class="container-fluid">
     <center> <div class="row">
<div id="un">
 <div class="col-lg-12"><h4>1. Entrez vos coordonnées  <i class="fas fa-pencil-alt"></i></h4></div>       
 
  
</div>


     
<div id="deux">
<div class="col-lg-12"><h4>2. Choisissez une date  <i class="fas fa-calendar-alt"></i></h4></div>
</div>
	       
	
	     
	<div id="trois"><div class="col-lg-12"><h4>
3. Que voulez-vous ?  <i class="fas fa-cut"></i></h4></div>
</div>
	
	</div></center>
	</div>
<br>
<div id="formu">

<table>
   <tr>
    <td> <h5>Nom :  </h5><td>
         <td><input style="bottom : 500px;" type="text" class="form-control" id="nom" placeholder="Entrez votre nom" name="nom"/></td>
     
	 <td>
	  

	  <div class="dropdown btn-group">
	 <button style="margin-left : 245px; width:380px;" class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">Selectionner la date
	 <span class="caret"></span>
	 </button>
	 
	 <ul class="dropdown-menu">
        <li><a href="#">
		
		<?php 
		
		$reponse = $bdd->query('SELECT date FROM rdv_index');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
	
	echo $donnees['date'] . '<br>';
	}

$reponse->closeCursor(); // Termine le traitement de la requête

?>
		</a></li>
      </ul></div>
	 
	 </td>
   
   
   </tr>
   
   
   
   <tr>
   <td> <h5>Prenom :  </h5><td>
         <td><input style="bottom : 500px;" type="text" class="form-control" id="prenom" placeholder="Entrez votre prénom" name="prenom"/></td>
      <td>
	  

	  <div class="dropdown btn-group">
	 <button style="margin-left : 710px; width:380px;" class="btn btn-warning dropdown-toggle" type="button" data-toggle="dropdown">Selectionner le motif
	 <span class="caret"></span>
	 </button>
	 
	 <ul class="dropdown-menu">
        <li><a href="#">
		
		<?php 
		
		$reponse = $bdd->query('SELECT motif FROM rdv_index');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
	
	echo $donnees['motif'] . '<br>';
	}

$reponse->closeCursor(); // Termine le traitement de la requête

?>
		</a></li>
      </ul></div>
	 
	 </td>
   </tr>
   <tr>
   <td> <h5>téléphone :  </h5><td>
         <td><input style="bottom : 500px;" type="text" class="form-control" id="num" placeholder="Entrez votre numéro" name="num"/></td>
      <td>
	  

	  <div class="dropdown btn-group">
	 <button style="margin-left : 245px; width:380px;" class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown">Selectionner l'heure
	 <span class="caret"></span>
	 </button>
	 
	 <ul class="dropdown-menu">
        <li><a href="#">
		
		<?php 
		
		$reponse = $bdd->query('SELECT heure FROM rdv_index');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
	
	echo $donnees['heure'] . '<br>';
	}

$reponse->closeCursor(); // Termine le traitement de la requête

?>
		</a></li>
      </ul></div>
	 
	 </td>
   </tr>
</table>
</div>
	
	
	
	
	
	
<br>

<br><br><br>
<center><button type="submit" class="btn btn-danger">Valider le rendez-vous</button></center></form>
	
	<br><br>
	
	   <div class="copyright py-4 text-white">
      <div class="container">
   <a class="navbar-brand js-scroll-trigger">
   <br>
<img src="http://image.noelshack.com/fichiers/2018/09/5/1519979869-ert.png"/>                                            <img src="http://image.noelshack.com/fichiers/2018/11/6/1521295585-capture.png"/> 3 Rue de Semur, 21500 Saint-Remy      <img src="http://image.noelshack.com/fichiers/2018/12/1/1521452455-sdfsdf.png"/> marysecoiffure@gmail.com
<br><img style="margin-left : 457px;" src="http://image.noelshack.com/fichiers/2018/12/1/1521451291-qsdfaef.png"/>  03.80.92.04.59                                                  <img src="http://image.noelshack.com/fichiers/2018/12/1/1521453292-ghj.png"/> donnez votre avis !
</a>                              
      </div>
    </div>
	
	

  

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    <!-- Portfolio Modals -->

 

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>
  </body>

</html>
