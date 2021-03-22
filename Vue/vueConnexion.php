<?php $this->titre = "Connexion"; ?>

<form class="box" action="" method="post" name="login">
<h1 class="box-title">Connexion</h1>
<input type="text" class="box-input" name="nom" placeholder="Nom"><br/>
<input type="text" class="box-input" name="prenom" placeholder="Prénom"><br/>
<select name="poste">
  <option value="1">Entraineur</option>
  <option value="2">Sécretaire</option>
</select><br/>
<input type="password" class="box-input" name="password" placeholder="Mot de passe"><br/>
<input type="submit" value="Connexion " name="submit" class="box-button"><br/>
