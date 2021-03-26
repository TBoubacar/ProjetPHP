<?php $this->titre = "Faire une Convocation"; ?>

<h1>Convocation pour une rencontre</h1>
<div class="card p-3">
    <form action="index.php?action=faireConvocation" method="POST">

        <div class="row ml-3">
            <label>Selectionné une Rencontre :</label>
            <select name="idConvocation">
                <?php foreach ($rencontres as $rencontre): ?>
                <option value="<?= $rencontre['IdConvocation'] ?>"> <?= $rencontre["jour"]." ".$rencontre["adresse"]." ".$rencontre["nomEquipeAdverse"] ?></option>    
                <?php endforeach; ?>
            </select>
        </div>

        <div class="row ml-3 mt-3">
            <label>Selectionner les joueurs du club (<?= $joueurs[0]["nomClub"] ?>) à convoquer : </label>
        </div>

        <div class="row mt-3">
            

            <?php foreach ($joueurs as $joueur): ?>
            <?php if ($joueur['licence'] == "OUI"): ?>
                <div class="col-2">
                    <input type="checkbox" name="idJoueurConvoquer[]" value="$joueur['idJoueur']" id="$joueur['idJoueur']" checked="checked">
                    <label for="$joueur['idJoueur']"> <?=$joueur['nom']." ".$joueur['prenom']?> </label>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
        </div>

        <div class="row mt-3 ml-3">
            <input type="submit" name="creerConvoc" value="Créer" class="btn btn-success mr-3" />
            <input type="reset" value="Effacer" class="btn btn-danger"/>
        </div>
    
</form>

</div>
