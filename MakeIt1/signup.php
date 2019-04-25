<?php

	session_start();


 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/sign.css">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

		<link rel="icon" type="image/png" href="images/favicon.png">

		<!-- LINK -->
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <title>Make It - inscription</title>
  </head>
  <body id="top">

    <section id="topnav">
      <?php
      if (isset($_SESSION['u_id'])) {
        echo '<form action="includes/logout.inc.php" method="POST">
              <button class="logout" type="submit" name="submit">Se déconnecter</button>
              </form>';
          } else{
            echo '<div class="user">
      				<a href="signup.php">S\'inscrire</a> /
      				<a href="signin.php">Se connecter</a>
      			</div>';
          }
       ?>
			<div class="market">
				<a href="#"><i class="fas fa-shopping-cart"></i></a>
			</div>

			<div class="traduc">
        <a href="index.php"><img src="images/france.png"></a>
        <a href="#"><img src="images/uk.png"></a>
      </div>
		</section>

		<!-- Header -->
			<section id="head">
				<div class="mlogo"><a href="index.php"><img src="images/LOGO2.png"></a></div>
			</section>

			<section id="icon-search">
					<div class="search">
						<input type="text" name="" placeholder="Recherche...">
						<button class="Button alt logo-search" type="submit" name="button"><i class="fas fa-search"></i></button>
					</div>

			</section>
			<!-- Nav -->
				<nav id="men">
					<ul class="links">
						<li><a href="index.php">Accueil</a></li>
						<li><a href="men.php">Homme</a></li>
						<li><a href="women.php">Femme</a></li>
						<li><a href="custom.php">Personnalisation</a></li>
					</ul>
				</nav>

    <!-- MAIN -->
    <section id="main">

      <div class="wrapper body-inverse"> <!-- wrapper -->
    	  <div class="container">
    	    <div class="row">

          <!-- Sign Up form -->
  		  <div class="col-sm-5 col-md-offset-3 col-md-6">
  		    <h3 class="text-center">Inscription</h3>

  			<div class="form-white">
  				<form role="form" action="includes/signup.inc.php" method="POST">
  				  <div class="form-group">
  				    <label for="name">Prénom :</label>
  					<input type="text" class="form-control" name="first" placeholder="Prénom">
  				  </div>
  				  <div class="form-group">
  				    <label for="name">Nom :</label>
  					<input type="text" class="form-control" name="last" placeholder="Nom">
  				  </div>
  				  <div class="form-group">
  				    <label for="username">Identifiant :</label>
  					<input type="text" class="form-control" name="uid" placeholder="Identifiant">
  				  </div>
  				  <div class="form-group">
  				    <label for="email2">Adresse E-mail :</label>
  					<input type="email" class="form-control" name="email" placeholder="Adresse E-mail">
  				  </div>
  				  <div class="form-group">
  					  <div class="form-group">
  					  <label for="password2">Mot de passe :</label>
  					  <input type="password" class="form-control" name="pwd" placeholder="Mot de passe">
  					  </div>
  				  </div>
  				  <div class="checkbox">
  					<label>
              <p>En créant un compte, vous acceptez de vous conformer à la <a href="#">Politique de confidentialité</a> et aux <a href="#">Conditions générales</a> de MakeIt.</p>
  					</label>
  				  </div>
  				  <button type="submit" name="submit" class="btn btn-block btn-color btn-xxl">S'inscrire !</button>
  				</form>
  			</div>
  		  </div>
  		</div>
  	  </div>
  	</div>

  </section>


    <!-- Footer -->
      <footer id="footer">
        <div class="container">
          <div class="row">
            <div class="col-md-offset-2 col-sm-3 col-xs-12 mobile-w">
              <h5>
              <h5>Information</h5>
              </h5>
              <ul class="list-unstyled">
                <li><a href="#">À propos</a></li>
                <li><a href="#">Politique de confidentialité</a></li>
                <li><a href="cg.php">Conditions générales</a></li>
              </ul>
            </div>
        <div class="col-sm-3 col-xs-12 mobile-w">
    <h5>
    <h5>Service</h5>
    </h5>
    <ul class="list-unstyled">
      <li><a href="#">Nous contacter</a></li>
      <li><a href="#">Expédition et livraison</a></li>
      <li><a href="#">Retours</a></li>
    </ul>
  </div>
  <div class="col-sm-3 col-xs-12 mobile-w">
    <h5>
    <h5>Mon compte</h5>
    </h5>
    <ul class="list-unstyled">
      <li><a href="#">Mon compte</a></li>
      <li><a href="#">Historique de commande</a></li>
      <li><a href="#">Wish List</a></li>
      <li><a href="#">Newsletter</a></li>
    </ul>
  </div>
  </div>
</div>
          <hr id="separator">

      <div class="container-fluid">
        <div class="row">
          <div class="map col-md-4 col-sm-12 col-xs-12">

            <h3>Où nous trouver ?</h3>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2622.720942815006!2d2.2058098160418877!3d48.90165517929174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e664617939e9d9%3A0xadb1defcb14c8ad9!2sPARIS+YNOV+CAMPUS!5e0!3m2!1sfr!2sfr!4v1517686263795" width="400" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>

          <div class="col-md-4 col-sm-12 col-xs-12">
            <h3>École</h3>
              <a href="https://www.ynov.com/" target="_blank"><img src="images/ynov.jpg"></a>
          </div>

          <div class="col-md-4 col-sm-12 col-xs-12">
            <h5 class="h5">Modes de paiement</h5>
              <div class="paiement">
                <i class="fab fa-cc-paypal"></i>
                <i class="fab fa-cc-visa"></i>
                <i class="fab fa-cc-mastercard"></i>
                <i class="fab fa-cc-amex"></i>
            </div>
          </div>
          <div class="col-md-4 col-sm-12 col-xs-12">
            <h5 class="h5">Suivez-nous sur : </h5>
            <div class="social">
            <a href="https://www.facebook.com/makeyourownshoes/" target="_blank"><i class="fab fa-facebook-square"></i></a>
            <a href="https://www.instagram.com/makeitparis75/" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter-square"></i></a>
          </div>
          </div>
        </div>
      </div>

        <hr id="fin">

        <div class="container-fluid">
          <div class="row contact-info">
            <div class="copyright col-md-offset-1">
              © 2018 MakeIt Tous droits réservés.
            </div>
            <div class="site">
              Designed and Developed by <a href="https://www.brahimouarradi.com" target="_blank">Brahim Ouarradi</a> & <a href="http://www.sumeetsingh.fr" target="_blank">Sumeet Singh</a>.
            </div>
          </div>
        </div>
      </footer>

      <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

  </body>
</html>
