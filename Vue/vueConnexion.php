<?php $this->titre = 'Connexion'; ?>


<?php
  if ($poste=='ENTRAINEUR') {
    $action = "<li class='nav-item'><a class='nav-link' href='index.php?action=faireConvoc&club=$club' >Convocations</a></li>
              <li class='nav-item'><a class='nav-link ' href='index.php?action=calendrier'>Calendrier</a></li>";
  } else {
    $action = "<li class='nav-item'><a class='nav-link' href='index.php?action=creerConvoc&club=$club'>Gestion du calendrier</a></li>
              <li class='nav-item'><a class='nav-link' href='index.php?action=gestionAbscence&club=$club'>Gestion des absences</a></li>";
  }
?>
<div >
  <div class="d-flex justify-content-center">
     <h1><?=$poste?></h1>
  </div>
  <div class="d-flex justify-content-center">
     <h2><?=$nom ." ". $prenom?></h2>
  </div>

</div>


<nav class='navbar navbar-expand-sm bg-light'>
  <ul class='navbar-nav'>
    <?= $action ?>
    <li class='nav-item'>
      <a class='nav-link ' href="index.php?action=afficheEffectif&club=<?= $club ?>">Effectifs</a>
    </li>
  </ul>
  
</nav>