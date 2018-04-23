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

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">

  </head>
<?php
require('bdd.php');
	?>
	
	<style>

  img{
	width: 128px;
heigh : 128px;	
  }
#logoo img
{
	width: 295px;
heigh : 91px;	
}

#ma img
{
	width: 20px;
heigh : 26px;	
}

#en img
{
	width: 28px;
heigh : 22px;	
}
#tel img
{
	width: 32px;
heigh : 31px;	
}

#st img
{
	width: 27px;
heigh : 26px;	
}
  </style>

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
     <header class="masthead bg-primary text-black">
      <div class="container">
      <center><h2 style="text-transform: uppercase;">Nos produits</h2>
		<img src="http://image.noelshack.com/fichiers/2018/07/1/1518429072-picto1.png"/></center>
		<br><br>
		<center><h6>Le salon Maryse Coiffure vous propose différents produits du fabriquant Eugene perma, disponible au salon.</h6></center><br>
<br><center><h5><b><u>Catégorie : Réparation</b></u></h5></center><br>

 </div>
  

  
  
   <div class="container">
  <div class="row">

<?php
$reponse = $bdd->query('SELECT * FROM produit WHERE categorie = "Réparation"');
while ($donnees = $reponse->fetch())
{
?>

  <div class="col-lg-2"><?php echo '<img src="'. $donnees['image'] .'"/>' ;?></div>



<?php
}



$reponse->closeCursor(); // Termine le traitement de la requête

?>

</div><br>

<div class="row">
<?php
$reponse = $bdd->query('SELECT * FROM produit WHERE categorie = "Réparation"');
while ($donnees = $reponse->fetch())
{
	
		
?>

  <div class="col-lg-2"><b>Nom : </b><?php echo $donnees['nom'];?></div>



<?php
}



$reponse->closeCursor(); // Termine le traitement de la requête

?>

</div>

<br>
<div class="row">
<?php
$reponse = $bdd->query('SELECT * FROM produit WHERE categorie = "Réparation"');
while ($donnees = $reponse->fetch())
{
?>

  <div class="col-lg-2"><b>Fabriquant : </b><?php echo $donnees['fabriquant'];?></div>



<?php
}



$reponse->closeCursor(); // Termine le traitement de la requête

?>

</div>

<br>
<div class="row">
<?php
$reponse = $bdd->query('SELECT * FROM produit WHERE categorie = "Réparation"');
while ($donnees = $reponse->fetch())
{
?>

  <div class="col-lg-2"><b>Description : </b><?php echo $donnees['description'];?></div>



<?php
}



$reponse->closeCursor(); // Termine le traitement de la requête

?>

</div>
  
  <br><br><br>
<center><h5><b><u>Catégorie : Volume</b></u></center></h5>
  
<br>
<div class="row">
<?php
$reponse = $bdd->query('SELECT * FROM produit WHERE categorie = "Volume"');
while ($donnees = $reponse->fetch())
{
?>

 <div class="col-lg-2"><?php echo '<img src="'. $donnees['image'] .'"/>' ;?></div>



<?php
}



$reponse->closeCursor(); // Termine le traitement de la requête

?>

</div>


<br>

<div class="row">
<?php
$reponse = $bdd->query('SELECT * FROM produit WHERE categorie = "Volume"');
while ($donnees = $reponse->fetch())
{
?>


<div class="col-lg-2"><b>Nom : </b><?php echo $donnees['nom'];?></div>



<?php
}



$reponse->closeCursor(); // Termine le traitement de la requête

?>

</div>

<br>

<div class="row">
<?php
$reponse = $bdd->query('SELECT * FROM produit WHERE categorie = "Volume"');
while ($donnees = $reponse->fetch())
{
?>

  <div class="col-lg-2"><b>Fabriquant : </b><?php echo $donnees['fabriquant'];?></div>



<?php
}



$reponse->closeCursor(); // Termine le traitement de la requête

?>
 
</div>

<br>

<div class="row">
<?php
$reponse = $bdd->query('SELECT * FROM produit WHERE categorie = "Volume"');
while ($donnees = $reponse->fetch())
{
?>

  <div class="col-lg-2"><b>Description : </b><?php echo $donnees['description'];?></div>



<?php
}



$reponse->closeCursor(); // Termine le traitement de la requête

?>

</div>  
  
  
   <br><br><br>
<center><h5><b><u>Catégorie : Coiffant</b></u></center></h5> 
  

  
  <div class="row">
<?php
$reponse = $bdd->query('SELECT * FROM produit WHERE categorie = "Coiffant"');
while ($donnees = $reponse->fetch())
{
?>

 <div class="col-lg-2"><?php echo '<img src="'. $donnees['image'] .'"/>' ;?></div>



<?php
}



$reponse->closeCursor(); // Termine le traitement de la requête

?>

</div>


<br>

<div class="row">
<?php
$reponse = $bdd->query('SELECT * FROM produit WHERE categorie = "Coiffant"');
while ($donnees = $reponse->fetch())
{
?>

<div class="col-lg-2"><b>Nom : </b><?php echo $donnees['nom'];?></div>



<?php
}



$reponse->closeCursor(); // Termine le traitement de la requête

?>

</div>

<br>

<div class="row">
<?php
$reponse = $bdd->query('SELECT * FROM produit WHERE categorie = "Coiffant"');
while ($donnees = $reponse->fetch())
{
?>

  <div class="col-lg-2"><b>Fabriquant : </b><?php echo $donnees['fabriquant'];?></div>



<?php
}



$reponse->closeCursor(); // Termine le traitement de la requête

?>

</div>

<br>

<div class="row">
<?php
$reponse = $bdd->query('SELECT * FROM produit WHERE categorie = "Coiffant"');
while ($donnees = $reponse->fetch())
{
?>

  <div class="col-lg-2"><b>Description : </b><?php echo $donnees['description'];?></div>



<?php
}



$reponse->closeCursor(); // Termine le traitement de la requête

?>

</div>
  
   <br><br><br><br>
<center><b><u><h5>Catégorie : Certifié bio</b></u></h5></center>
 
  
  <div class="row">
<?php
$reponse = $bdd->query('SELECT * FROM produit WHERE categorie = "Certifié bio"');
while ($donnees = $reponse->fetch())
{
?>

 <div class="col-lg-2"><?php echo '<img src="'. $donnees['image'] .'"/>' ;?></div>



<?php
}



$reponse->closeCursor(); // Termine le traitement de la requête

?>

</div>


<br>

<div class="row">
<?php
$reponse = $bdd->query('SELECT * FROM produit WHERE categorie = "Certifié bio"');
while ($donnees = $reponse->fetch())
{
?>

<div class="col-lg-2"><b>Nom : </b><?php echo $donnees['nom'];?></div>



<?php
}



$reponse->closeCursor(); // Termine le traitement de la requête

?>

</div>

<br>

<div class="row">
<?php
$reponse = $bdd->query('SELECT * FROM produit WHERE categorie = "Certifié bio"');
while ($donnees = $reponse->fetch())
{
?>

  <div class="col-lg-2"><b>Fabriquant : </b><?php echo $donnees['fabriquant'];?></div>



<?php
}



$reponse->closeCursor(); // Termine le traitement de la requête

?>

</div>

<br>

<div class="row">
<?php
$reponse = $bdd->query('SELECT * FROM produit WHERE categorie = "Certifié bio"');
while ($donnees = $reponse->fetch())
{
?>

  <div class="col-lg-2"><b>Description : </b><?php echo $donnees['description'];?></div>



<?php
}



$reponse->closeCursor(); // Termine le traitement de la requête

?>

</div>
     
    </header>

	
	<footer>
	                                                                                                                                    
	</footer>
	
	


 <div class="copyright py-4 text-white">
      <div class="container">
   <a class="navbar-brand js-scroll-trigger">
   <br>
</a>                              
    
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
