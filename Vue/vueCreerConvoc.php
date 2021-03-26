<?php $this->titre = "Créer convocation"; ?>

<h1>Création d'une convocation</h1>
<form action="index.php?action=creerConvocation" method="POST">
    <tr>
        <td><label>Selectionné une Equipe du club (<?= $equipes["nomClub"][0]?>) : </label></td>
        <td>
        <select name="nomEquipe">
            <?php foreach ($equipes as $equipe): ?>
        	<option value="$equipe['nom']"> $equipe["nom"]</option>    
            <?php endforeach; ?>
        </select>
        </td>
    </tr>
    <tr>
        <td><label>Selectionné une Rencontre (Date/Lieu/EquipeAdverse) : </label></td>
        <td>
        <select name="idConvocation">
            <?php foreach ($rencontres as $rencontre): ?>
        	<option value="$rencontre['IdConvocation']"> $rencontre["jour"] | $rencontre["adresse"] | $rencontre["nomEquipeAdverse"]</option>    
            <?php endforeach; ?>
        </select>
        </td>
    </tr>
    <tr>
    	<td><input type="submit" name="creerConvoc" value="Créer"/></td>
    	<td><input type="reset" value="Effacer"/></td>
    </tr>
</form>