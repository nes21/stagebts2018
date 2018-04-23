<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Maryse Coiffure</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Custom fonts for this template -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="../vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>
    <!-- Custom styles for this template -->
    <link href="../css/freelancer.min.css" rel="stylesheet">

  </head>
<script>
$(document).ready(function(){
  $("#intro0").fadeIn(3000),
         $("#intro1").fadeIn(3000),
		 
        $("#intro2").fadeIn(3000);
	
    });

</script>
<div id="intro0" style="display:none;background-color:white;">
  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="adminpanel.html">Maryse Coiffure<br><p style="font-size : medium;">              Masculin - Féminin<p></a>
	    
        </div>
      </div>
    </nav>
	</div>
	<style>
	.oo{
	color : black;
	}
	
  #modif
{
text-align : center;
 font-weight: bold;

}

table
{
    border-collapse: collapse; /* Les bordures du tableau seront collées (plus joli) */
}
td
{
    border: 1px black double;
	width : 200px;
	height : 80px;
	text-align : center;
}
  
img{
	width: 128px;
heigh : 128px;	
  }
	</style>


    <!-- Header -->
    <header class="masthead bg-primary text-black text-center text-uppercase">
 <h3>Modifier un rendez-vous <i class="fas fa-pencil-alt"></i></h3>
	
		
<?php
	
	require('bdd.php');
$reponse = $bdd->query('SELECT * FROM rdv');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
<center>
<table>

<td style="border : initial;"><h6 style="margin-top : 75px;">Nom</h6></td>
<td style="border : initial;"><h6 style="margin-top : 75px;">Prénom</h6></td>
<td style="border : initial;"><h6 style="margin-top : 75px;">Téléphone</h6></td>
<td style="border : initial;"><h6 style="margin-top : 75px;">Date</h6></td>
<td style="border : initial;"><h6 style="margin-top : 75px;">Heure</h6></td>
 <td style="border : initial;"><h6 style="margin-top : 75px;">Coupe</h6></td>
 </table>
 
</center>
<div id="modif">
<center>
<table>
   

   <tr>
     <td><?php echo $donnees['nom'];?></td>
       <td><?php echo $donnees['prenom'];?></td>
       <td><?php echo $donnees['num'];?></td>
	     <td><?php echo $donnees['date'];?></td>
		   <td><?php echo $donnees['heure'];?></td>
		     <td><?php echo $donnees['motif'];?></td>
		
	   <td>
	   
	 <a href="opmodiftechnicien.php?id=<?php echo $donnees['id'] ;?>"><i class="fas fa-pencil-alt"></i></a>
	   </td>
	 
   </tr>
</table>
<br>
</center>
</div>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>
	  
	  

		</header>
	
	

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
 

  

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    <!-- Portfolio Modals -->

 

    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="../vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="../js/jqBootstrapValidation.js"></script>
    <script src="../js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="../js/freelancer.min.js"></script>

  </body>

</html>
