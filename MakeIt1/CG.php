<?php

session_start();


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="assets/css/cg.css">
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="icon" type="image/png" href="images/favicon.png">

	<!-- LINK -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

	<title>Make It - Conditions Générales</title>
</head>
<body id="top">

	<section id="topnav">

		<?php
		if (isset($_SESSION['u_id'])) {
			echo ' Bienvenue ' . $_SESSION['u_uid'] . ' !' . '<form action="includes/logout.inc.php" method="POST">
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
			<input type="text" name="" placeholder="Recherche">
			<button class="Button alt logo-search" type="submit" name="button"><i class="fas fa-search"></i></button>
		</div>

	</section>
	<!-- Nav -->
	<nav id="men">
		<ul class="links">
			<li><a href="index.php">Accueil</a></li>
			<li><a href="men.php">Homme</a></li>
			<li><a href="women.php">Femme</a></li>
			<li><a href="custom.php">Personnaliser</a></li>
		</ul>
	</nav>

	<!-- MAIN -->

	<section id="CG">
		<div class="container">
			<div class="row">
				<div class="col-md-offset-1">

					<h2 id="titlecg">CONDITIONS GÉNÉRALES D'UTILISATION ET DE VENTE DU SITE</h2>
				</div>
				<br>
				<div class="col-md-offset-5">
					<h4 id="makeitcg">MakeIt.fr</h4>
				</div>
				<br>

				<div class="">
					<h3 id="h3cg">I. CONDITIONS GÉNÉRALES D'UTILISATION</h3>
					<br>
					<h3 id="h3cg">ARTICLE 1. INFORMATIONS LÉGALES</h3>
					<br>

					<p id="paracg">
						En vertu de l'article 6 de la Loi n° 2004-575 du 21 juin 2004 pour la confiance dans l'économie numérique, il est précisé dans cet article l'identité des différents intervenants dans le cadre de sa réalisation et de son suivi.
						Le site makeit.fr est édité par :
						Brahim Ouarradi et Sumeet Singh, dont le siège siège social est situé à l'adresse suivante : 12 Rue Anatole France, 92000 Nanterre, et immatriculée au ________.
						Téléphone : ________/ Adresse e-mail : ________.
						Le directeur de publication du site est : Brahim Ouarradi.
						Le site makeit.fr est hébergé par :
						1and1, dont le siège est situé 7 place de la gare BP 70109 57201 sarreguemine Cedex Numéro de téléphone : 0970808911
					</p>

				</div>
				<br>

				<h3 id="h3cg">ARTICLE 2. PRÉSENTATION DU SITE</h3>
				<br>
				<p id="paracg">Le site makeit.fr a pour objet : <br> Vente de chaussure personnalisées.</p>

				<br>

				<h3 id="h3cg">ARTICLE 3. CONTACT</h3>
				<br>
				<p id="paracg">Pour toute question ou demande d'information concernant le site, ou tout signalement de contenu ou d'activités illicites, l'utilisateur peut contacter l'éditeur à l'adresse e-mail suivante: ________ ou adresser un courrier recommandé avec accusé de réception à : Brahim Ouarradi et Sumeet Singh - 12 Rue Anatole France, 92000 Nanterre</p>
				<br>

				<h3 id="h3cg">ARTICLE 4. ACCEPTATION DES CONDITIONS D'UTILISATION</h3>
				<br>
				<p id="paracg">L'accès et l'utilisation du site sont soumis à l'acceptation et au respect des présentes Conditions Générales d'Utilisation.
					L'éditeur se réserve le droit de modifier, à tout moment et sans préavis, le site et des services ainsi que les présentes CGU, notamment pour s'adapter aux évolutions du site par la mise à disposition de nouvelles fonctionnalités ou la suppression ou la modification de fonctionnalités existantes.
					Il est donc conseillé à l'utilisateur de se référer avant toute navigation à la dernière version des CGU, accessible à tout moment sur le site. En cas de désaccord avec les CGU, aucun usage du site ne saurait être effectué par l'utilisateur.</p>

					<h3 id="h3cg">ARTICLE 5. ACCÈS ET NAVIGATION</h3><br>
					<p id="paracg">L'éditeur met en œuvre les solutions techniques à sa disposition pour permettre l'accès au site 24 heures sur 24, 7 jours sur 7. Il pourra néanmoins à tout moment suspendre, limiter ou interrompre l'accès au site ou à certaines pages de celui-ci afin de procéder à des mises à jours, des modifications de son contenu ou tout autre action jugée nécessaire au bon fonctionnement du site.
						La connexion et la navigation sur le site makeit.fr valent acceptation sans réserve des présentes Conditions Générales d'Utilisation, quelques soient les moyens techniques d'accès et les terminaux utilisés.
						Les présentes CGU s'appliquent, en tant que de besoin, à toute déclinaison ou extension du site sur les réseaux sociaux et/ou communautaires existants ou à venir.</p> <br>

						<h3 id="h3cg">ARTICLE 6. GESTION DU SITE</h3><br>
						<p id="paracg">
							Pour la bonne gestion du site, l'éditeur pourra à tout moment : <br>
							- suspendre, interrompre ou limiter l'accès à tout ou partie du site, réserver l'accès au site, ou à certaines parties du site, à une catégorie déterminée d'internaute ; <br>
							- supprimer toute information pouvant en perturber le fonctionnement ou entrant en contravention avec les lois nationales ou internationales, ou avec les règles de la Nétiquette ; <br>
							- suspendre le site afin de procéder à des mises à jour.</p><br>

							<h3 id="h3cg">ARTICLE 7. SERVICES RÉSERVÉS AUX UTILISATEURS INSCRITS</h3><br>
							<p id="paracg">
								7.1 INSCRIPTION <br> <br>
								L'accès à certains services et notamment à tous les services payants, est conditionné par l'inscription de l'utilisateur. <br>
								L'inscription et l'accès aux services du site sont réservés exclusivement aux personnes physiques capables juridiquement, ayant rempli et validé le formulaire d'inscription disponible en ligne sur le site makeit.fr, ainsi que les présentes Conditions Générales d'Utilisation. <br>
								Lors de son inscription, l'utilisateur s'engage à fournir des informations exactes, sincères et à jour sur sa personne et son état civil. L'utilisateur devra en outre procéder à une vérification régulière des données le concernant afin d'en conserver l'exactitude. <br>
								L'utilisateur doit ainsi fournir impérativement une adresse e-mail valide, sur laquelle le site lui adressera une confirmation de son inscription à ses services. Une adresse de messagerie électronique ne peut être utilisée plusieurs fois pour s'inscrire aux services. <br>
								Toute communication réalisée par makeit.fr et ses partenaires est en conséquence réputée avoir été réceptionnée et lue par l'utilisateur. Ce dernier s'engage donc à consulter régulièrement les messages reçus sur cette adresse e-mail et à répondre dans un délai raisonnable si cela est nécessaire.
								Une seule inscription aux services du site est admise par personne physique. <br>
								L'utilisateur se voit attribuer un identifiant lui permettant d'accéder à un espace dont l'accès lui est réservé (ci-après "Espace personnel"), en complément de la saisie de son mot de passe. <br>
								L'identifiant et le mot de passe sont modifiables en ligne par l'utilisateur dans son Espace personnel. Le mot de passe est personnel et confidentiel, l'utilisateur s'engage ainsi à ne pas le communiquer à des tiers. <br>
								makeit.fr se réserve en tout état de cause la possibilité de refuser une demande d'inscription aux services en cas de non-respect par l'Utilisateur des dispositions des présentes Conditions Générales d'Utilisation. <br> <br>
								7.2 DÉSINSCRIPTION <br> <br>
								L'utilisateur régulièrement inscrit pourra à tout moment demander sa désinscription en se rendant sur la page dédiée dans son Espace personnel. Toute désinscription du site sera effective immédiatement après que l'utilisateur ait rempli le formulaire prévu à cet effet.

							</p><br>

							<h3 id="h3cg">ARTICLE 8. RESPONSABILITÉS</h3><br>
							<p id="paracg">L'éditeur n'est responsable que du contenu qu'il a lui-même édité. L'éditeur n'est pas responsable :
								- en cas de problématiques ou défaillances techniques, informatiques ou de compatibilité du site avec un matériel ou logiciel quel qu'il soit ; <br>
								- des dommages directs ou indirects, matériels ou immatériels, prévisibles ou imprévisibles résultant de l'utilisation ou des difficultés d'utilisation du site ou de ses services ;
								- des caractéristiques intrinsèques de l'Internet, notamment celles relatives au manque de fiabilité et au défaut de sécurisation des informations y circulant ; <br>
								- des contenus ou activités illicites utilisant son site et ce, sans qu'il en ait pris dûment connaissance au sens de la Loi n° 2004-575 du 21 juin 2004 pour la confiance dans l'économie numérique et la Loi n°2004-801 du 6 août 2004 relative à la protection des personnes physiques à l'égard de traitement de données à caractère personnel.

								Par ailleurs, le site ne saurait garantir l'exactitude, la complétude, et l'actualité des informations qui y sont diffusées. <br>
								L'utilisateur est responsable : <br>
								- de la protection de son matériel et de ses données ; <br>
								- de l'utilisation qu'il fait du site ou de ses services ; <br>
								- s'il ne respecte ni la lettre, ni l'esprit des présentes CGU.</p><br>

								<h3 id="h3cg">ARTICLE 9. LIENS HYPERTEXTES</h3> <br>
								<p id="paracg">Le site peut contenir des liens hypertextes pointant vers d'autres sites internet sur lesquels makeit.fr n'exerce pas de contrôle. Malgré les vérifications préalables et régulières réalisés par l'éditeur, celui-ci décline tout responsabilité quant aux contenus qu'il est possible de trouver sur ces sites.
									L'éditeur autorise la mise en place de liens hypertextes vers toute page ou document de son site sous réserve que la mise en place de ces liens ne soit pas réalisée à des fins commerciales ou publicitaires. <br>
									En outre, l'information préalable de l'éditeur du site est nécessaire avant toute mise en place de lien hypertexte.
									Sont exclus de cette autorisation les sites diffusant des informations à caractère illicite, violent, polémique, pornographique, xénophobe ou pouvant porter atteinte à la sensibilité du plus grand nombre. <br>
									Enfin, makeit.fr se réserve le droit de faire supprimer à tout moment un lien hypertexte pointant vers son site, si le site l'estime non conforme à sa politique éditoriale.</p> <br>

									<h3 id="h3cg">ARTICLE 10. COLLECTE DE DONNÉES</h3> <br>
									<p id="paracg">Le site est exempté de déclaration à la Commission Nationale Informatique et Libertés (CNIL) dans la mesure où il ne collecte aucune donnée concernant les utilisateurs.</p> <br>

									<h3 id="h3cg">ARTICLE 11. COOKIES</h3> <br>
									<p id="paracg">Le site a éventuellement recours aux techniques de "cookies" lui permettant de traiter des statistiques et des informations sur le trafic, de faciliter la navigation et d'améliorer le service pour le confort de l'utilisateur, lequel peut s'opposer à l'enregistrement de ces "cookies" en configurant son logiciel de navigation.</p> <br>

									<h3 id="h3cg">ARTICLE 12. PROPRIÉTÉ INTELLECTUELLE</h3> <br>
									<p id="paracg">
										La structuration du site mais aussi les textes, graphiques, images, photographies, sons, vidéos et applications informatiques qui le composent sont la propriété de l'éditeur et sont protégés comme tels par les lois en vigueur au titre de la propriété intellectuelle.
										<br>
										Toute représentation, reproduction, adaptation ou exploitation partielle ou totale des contenus, marques déposées et services proposés par le site, par quelque procédé que ce soit, sans l'autorisation préalable, expresse et écrite de l'éditeur, est strictement interdite et serait susceptible de constituer une contrefaçon au sens des articles L. 335-2 et suivants du Code de la propriété intellectuelle. Et ce, à l'exception des éléments expressément désignés comme libres de droits sur le site. <br>
										L'accès au site ne vaut pas reconnaissance d'un droit et, de manière générale, ne confère aucun droit de propriété intellectuelle relatif à un élément du site, lesquels restent la propriété exclusive de l'éditeur.
										Il est interdit à l'utilisateur d'introduire des données sur le site qui modifieraient ou qui seraient susceptibles d'en modifier le contenu ou l'apparence.</p> <br>

										<h3 id="h3cg">ARTICLE 13. LOI APPLICABLE ET JURIDICTION COMPÉTENTE</h3> <br>
										<p id="paracg">Les présentes Conditions Générales d'Utilisation sont régies par la loi française. En cas de différend et à défaut d'accord amiable, le litige sera porté devant les tribunaux français conformément aux règles de compétence en vigueur.</p> <br>

										<div class="col-md-offset-3">

											<em>Le site makeit.fr vous souhaite une excellente navigation !</em>
										</div>
										<br>

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
												<li><a href="#">Conditions générales</a></li>
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

							<script src="assets/js/makeit.js"></script>
							<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

						</body>
						</html>
