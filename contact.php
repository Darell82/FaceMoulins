<?php
  session_start();
  ?>

<!DOCTYPE html>
<html>
	<head>
		<!--Métadonnées pour les navigateurs/moteur de recherche etc-->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--Liens css-->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="style/css/style.css">
    <!--Petite icone dans l'onglet-->
    <link rel="icon" type="image/png" href="img/favicon.png" />
		<title>Contact | FACE</title>
	</head>
	<body onload="affichageFooter('planSite');">
    <!--Haut de la page contenant le bouton don-->
    <div class="row-fluid" id="barre">
      <div id="placementDon">
        <a href="#" class="btn btn-default" role="button" id="boutonDon"> Soutenez-nous : Faire un <span>don</span></a>
      </div>
    </div>
		<div class="container">
			<!--Haut de la page que l'on trouvera partout-->
			<header class="row" style="margin-left: auto;  margin-right: auto;">
				<!--Logo Face-->
				<div class="col-md-2 col-sm-2 col-xs-12">
					<a href="index.html"><img src="img/logo.svg" alt="logo Face territoire bourbonnais" id="logo" /></a>
				</div>
				<!--Barre de navigation-->
				<nav class="navbar navbar-default col-md-10 col-sm-10 col-xs-12">
					<div class="container-fluid">
						<ul class="nav navbar-nav">
              <!--Bouton-->
              <li class="dropdown">
                <a href="index.html" role="button">Accueil</a>
              </li>
        			<!--Bouton-->
        			<li class="dropdown">
          			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Présentation<span class="caret"></span></a>
          			<ul class="dropdown-menu">
            			<li><a href="presentation.html">Histoire</a></li>
            			<li><a href="presentation.html#pagePalmares">Action</a></li>
          			</ul>
        			</li>
        			<!--Bouton-->
        			<li class="dropdown">
          		  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Galerie<span class="caret"></span></a>
          			<ul class="dropdown-menu" id="menuGalerie">
            			<li><a href="galerie.html">Photos</a></li>
            			<li><a href="galerie.html#pageVideo">Médias</a></li>
            			<li><a href="galerie.html#CV video">CV Video</a></li>
          			</ul>
        			</li>
        			<!--Bouton-->
        			<li class="dropdown">
          			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Partenariat<span class="caret"></span></a>
          			<ul class="dropdown-menu sousMenu">
            			<li><a href="partenariat.html">Les entreprises</a></li>
                  <li><a href="partenariat.html#pageAsso">Les associations</a></li>
            			<li><a href="partenariat.html#pageInstitution">Les institutions</a></li>
            			<li><a href="partenariat.html#pageParticulier">Les particuliers</a></li>
          			</ul>
        			</li>
        			<!--Bouton-->
        			<li class="dropdown">
          			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">La Fabrik<span class="caret"></span></a>
          			<ul class="dropdown-menu sousMenu">
            			<li><a href="laFabrik.html">Présentation</a></li>
                  <li><a href="laFabrik.html#pageProjet">Projets</a></li>
                  <li><a href="apprenants.html">Les apprenants</a></li>
          			</ul>
        			</li>
              <!--Bouton-->
              <li class="dropdown">
                <a href="contact.html" role="button">Contact</a>
              </li>
      			</ul>
      		</div>
        </nav>
			</header>
      <!--Formulaire de contact-->

      <div class="container">
        <?php if(array_key_exists('errors',$_SESSION)): ?>
        <div class="alert alert-danger">
          <?= implode('<br>', $_SESSION['errors']); ?>
        </div>
        <?php endif; ?>
        <?php if(array_key_exists('success',$_SESSION)): ?>
        <div class="alert alert-success">
          Votre message a bien été envoyé !
        </div>
      <?php endif; ?>
      </div>

      <section id="sectionContact">
        <form class="form-horizontal col-md-9 col-md-offset-1 col-xs-12" method="post" action="formulaire.php">
          <h2>Contact</h2>
          <p>Pour une demande d'adhésion ou toute autres questions, veuillez remplir le formulaire. Nous vous recontacterons dans les plus brefs délais.</p>
          <div class="form-group-lg">
            <label for="nom" class="col-sm-2 control-label">Nom</label>
            <div class="col-sm-10">
              <input type="text" name="nom" value="<?php echo isset($_SESSION['inputs']['nom'])? $_SESSION['inputs']['nom'] : ''; ?>" placeholder="Ex : Dupond" maxlength="30" class="form-control input-lg" required>
            </div>
          </div>
          <div class="form-group-lg">
            <label for="prenom" class="col-sm-2 control-label">Prénom</label>
            <div class="col-sm-10">
              <input type="text" name="prenom" value="<?php echo isset($_SESSION['inputs']['prenom'])? $_SESSION['inputs']['prenom'] : ''; ?>"  placeholder="Ex : Nicolas" maxlength="30" class="form-control input-lg" required>
            </div>
          </div>
          <div class="form-group-lg">
            <label for="mail" class="col-sm-2 control-label">Mail</label>
            <div class="col-sm-10 input-group" id="blocMail">
              <span class="input-group-addon">@</span>
              <input type="email" name="mail" value="<?php echo isset($_SESSION['inputs']['mail'])? $_SESSION['inputs']['mail'] : ''; ?>" placeholder="Ex : dupond@gmail.com" class="form-control input-lg" required>
            </div>
          </div>
          <div class="form-group-lg">
            <label for="sujet" class="col-sm-2 control-label">Sujet</label>
            <div class="col-sm-10">
              <input type="text" name="sujet" value="<?php echo isset($_SESSION['inputs']['sujet'])? $_SESSION['inputs']['sujet'] : ''; ?>" placeholder="ex: Renseignements" maxlength="40" class="form-control input-lg" id="sujet" required>
            </div>
          </div>
          <div class="form-group-lg">
            <label for="message" class="col-sm-2 control-label" id="labelZone">Message</label>
            <div class="col-sm-10 input-group">
              <textarea name="message" placeholder="Votre message" value="<?php echo isset($_SESSION['inputs']['message'])? $_SESSION['inputs']['message'] : ''; ?>" maxlength="500" rows="9" class="form-control input-lg" id="zoneTexte" required></textarea>
            </div>
          </div>
          <!--Bouton envoi-->
          <div class="form-group-lg">
            <div class="row">
              <div class="col-sm-offset-10 col-sm-2 col-xs-offset-7 col-xs-2">
                <button type="submit" name="envoi" class="btn btn-default active">Envoyer</button>
              </div>
            </div>
          </div>
        </form>
        <!--Contact normal-->
        <div class="col-md-2 col-xs-12">
          <section id="contactFace">
            <h4 class="text-center">FACE bourbonnais </h4>
            <h5 class="text-center"> Adresse : </h5>
            <p class="text-center"><span class="glyphicon glyphicon-home"></span></p><p class="text-center"> 1 rue Berthelot Moulins, Auvergne, France </p>
            <h5 class="text-center"> Teléphone : </h5>
            <p class="text-center"> 06 - 89 - 32 - 71 - 09 </p>
          </section>
        </div>
      </section>
    </div>
    <!--Pied de page-->
    <footer  id="footer">
      <h4 class="text-center col-xs-12 col-md-12" onclick="affichageFooter('planSite');" id="titrePlanSite">Plan du site</h4>
        <div class="container col-md-12 col-xs-12" id="planSite">
          <div class="row-fluid">
            <div class="col-md-2 col-sm-2">
              <h4><a href="index.html">Accueil</a></h4>
            </div>
            <div class="col-md-2 col-sm-2">
              <h4><a href="presentation.html">Présentation</a></h4>
              <h6><a href="presentation.html">Histoire</a></h6>
              <h6><a href="presentation.html#pagePalmares">Action</a></h6>
            </div>
            <div class="col-md-2 col-sm-2">
              <h4><a href="galerie.html">Galerie</a></h4>
              <h6><a href="galerie.html">Photos</a></h6>
              <h6><a href="galerie.html#pageVideo">Médias</a></h6>
            </div>
            <div class="col-md-2 col-sm-2">
              <h4><a href="partenariat.html">Partenariat</a></h4>
              <h6><a href="partenariat.html">Les entreprises</a></h6>
              <h6><a href="partenariat.html#pageAsso">Les associations</a></h6>
              <h6><a href="partenariat.html#pageInstitution">Les institutions</a></h6>
              <h6><a href="partenariat.html#pageParticulier">Les particuliers</a></h6>
            </div>
            <div class="col-md-2 col-sm-2">
              <h4><a href="laFabrik.html">La Fabrik</a></h4>
              <h6><a href="laFabrik.html">Présentation</a></h6>
              <h6><a href="laFabrik.html#pageActu">Les actualités</a></h6>
              <h6><a href="laFabrik.html#pageProjet">Projets</a></h6>
              <h6><a href="laFabrik.html#pagePhoto">Photos</a></h6>
              <h6><a href="apprenants.html">Les apprenants</a></h6>
            </div>
            <div class="col-md-2 col-sm-2">
              <h4><a href="contact.html">Contact</a></h4>
            </div>
          </div>
        </div>
        <div class="row" id="lienMentions">
          <p class="text-center"><a href="mentions.html">Mentions légales</a></p>
        </div>
      </div>
    </footer>
    <!--Liens javascript-->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js "></script>
    <script type="text/javascript" src="js/script.js"></script>
  </body>
</html>

<?php

  unset($_SESSION['inputs']); // on nettoie les données précédentes
  unset($_SESSION['success']);
  unset($_SESSION['errors']);
?>