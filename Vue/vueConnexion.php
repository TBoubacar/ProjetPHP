<?php $this->titre = "Connexion"; ?>


<?php
  if ($poste=='ENTRAINEUR') {
    $action = '<li class="nav-item"><a class="nav-link" href="">Convocations</a></li>
              <li class="nav-item"><a class="nav-link" href="">Planning</a></li>
              <li class="nav-item"><a class="nav-link " href="">Calendrier</a></li>';
  } else {
    $action = '<li class="nav-item"><a class="nav-link" href="">Gestion du calendrier</a></li>
              <li class="nav-item"><a class="nav-link" href="">Gestion des absences</a></li>';
  }

?>
<nav class="navbar navbar-expand-sm bg-light">

  <ul class="navbar-nav">
    <?= $action ?>
    <li class="nav-item">
      <a class="nav-link " href="">Effectifs</a>
    </li>
  </ul>
  
</nav>


    