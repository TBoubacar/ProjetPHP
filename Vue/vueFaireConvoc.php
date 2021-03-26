<?php $this->titre = "Faire une Convocation"; ?>

<h1>Action de l'entraineur (Faire une convocation d'un joueur) !</h1>

<form action="index.php?action=faireConvocation" method="POST">
    <thead>
        <tr>
            <td><label>Selectionné une Rencontre (Date/Lieu/EquipeAdverse) : </label></td>
            <td>
            <select name="idConvocation">
                <?php foreach ($rencontres as $rencontre): ?>
            	<option value="$rencontre['IdConvocation']"> $rencontre["jour"] | $rencontre["adresse"] | $rencontre["nomEquipeAdverse"]</option>    
                <?php endforeach; ?>
            </select>
            </td>
        	<td><label>Selectionné les joueurs du club (<?= $equipes["nomClub"][0] ?>) à convoquer : </label></td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($joueurs as $joueur): ?>
			<?php if ($joueur['licence'] == "OUI"): ?>
	        <tr><input type="checkbox" name="idJoueurConvoquer[]" value="$joueur['idJoueur']" id="$joueur['idJoueur']" checked="checked"> &nbsp;&nbsp;&nbsp;&nbsp;<label for="$joueur['idJoueur']">$joueur['nom'] $joueur['prenom']</label></tr>
            <?php endif; ?>
        <?php endforeach; ?>
    </tbody>
    <tr>
    	<td><input type="submit" name="creerConvoc" value="Créer"/></td>
    	<td><input type="reset" value="Effacer"/></td>
    </tr>
</form>