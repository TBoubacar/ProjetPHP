<?php $this->titre = 'Connexion'; ?>


<?php
  if ($poste=='ENTRAINEUR') {
    $action = "<li class='nav-item'><a class='nav-link' href='index.php?action=faireConvoc&club=$club' >Convocations</a></li>
              <li class='nav-item'><a class='nav-link' href='index.php?action='>Planning</a></li>
              <li class='nav-item'><a class='nav-link ' href='index.php?action='>Calendrier</a></li>";
  } else {
    $action = "<li class='nav-item'><a class='nav-link' href='index.php?action=faireConvoc&club=$club'>Gestion du calendrier</a></li>
              <li class='nav-item'><a class='nav-link' href='index.php?action='>Gestion des absences</a></li>";
  }

?>
<nav class='navbar navbar-expand-sm bg-light'>

  <ul class='navbar-nav'>
    <?= $action ?>
    <li class='nav-item'>
      <a class='nav-link ' href=''>Effectifs</a>
    </li>
  </ul>
  
</nav>


    