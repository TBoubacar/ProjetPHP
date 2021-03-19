<!DOCTYPE html>
<html lang="fr-FR" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Site de Gestions des Clubs de Football</title>
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/scrolling-nav.css" rel="stylesheet">
</head>
<body id="page-top">
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Gestion des Clubs de Football</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="../VueConnexion.php">Connexion</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="bg-primary text-white">
    <div class="container text-center">
      <h1>Bienvenue sur notre site</h1>
      <p class="lead">Nous vous souhaitons une très bonne navigation en espérant que vous serrez satisfaits</p>
    </div>
  </header>
  
  <?php #C'EST UNIQUEMENT CETTE ZONE QU'IL FAUDRAIT MODIFIER AFIN DE GENERER LES DIFFERENTES VUES POSSIBLES ?>
  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Accueil</h2>
          <p class="lead">
          	Cliquez sur les boutons ci-dessous afin d'afficher respectivement le calendrier des matchs, la liste des clubs du championat
          	et la liste des adminsitrateurs dans les différents clubs de football :
          </p>
          <nav class="nav nav-pills nav-fill">
            <input type="button" class="nav-link active nav-item" href="#" name="afficheCalendrier" value="Calendrier" />
            <input type="button" class="nav-link nav-item" href="#" name="listeClub" value="Clubs" />
            <input type="button" class="nav-link nav-item" href="#" name="listeAdministrateur" value="Administrateurs" />
          </nav>
          <?php #Le code d'affichage des différentes requete doit être écrite ici.?>
        </div>
      </div>
    </div>
  </section>
  <?php #LA ZONE À MODIFIER PREND FIN ICI (AU CAS OU TU AS DES DOUTES SUR QUOI MODIFIER, FAIT MOI SIGNE) ?>

  <section id="services" class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Services offerts</h2>
          <p class="lead">
	          Ce site a pour but de vous permettre de consulter le calendrier de matchs entre différents clubs du championat. Nous vous offrons aussi
	          la possibilité d'acceder à la liste des clubs qui disputent des matchs. De plus, on dispose aussi d'un champ de connexion, réservé uniquement aux 
	          administrateurs des clubs (Sécretaire et Entraineur) afin qu'ils puissent effectuer certaines tâches qui leurs sont réservées.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Contactes nous</h2>
          <p class="lead">Nous sommes deux étudiants en Licence 3 Informatique à la faculté de sciences d'Angers. Ce site fut créé à la suite à un projet d'étude ayant pour but d'assurer la gestion de différents Clubs de Football.</p>
          <p class="lead">Emails : boubacartoure123@gmail.com & barro.juliette@gmail.com</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Site de Gestions des Clubs de Football 2021</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <!-- Custom JavaScript for this theme -->
  <script src="js/scrolling-nav.js"></script>
</body>
</html>
