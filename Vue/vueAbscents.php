<?php $this->titre = "Joueurs Abscents du Club"; ?>

<h1>Gestion des absences du Club (<?= $club ?>)</h1>

<div class="card">
    <form action="index.php?action=gestionAbscenceJoueur" method="POST">
    <div class="row ml-3">
        <label>Selectionné un joueur : </label>
        <select name="idJoueurAbsent">
            <?php foreach ($joueurs as $joueur): ?>
                <?php if ($joueur['licence'] == "OUI"): ?>
                    <option value="<?= $joueur['idJoueur'] ?>"><?= $joueur['nom']." ".$joueur['prenom']?></option>    
                <?php endif; ?>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="row ml-3">
        <label>Selectionné l'état du Joueur : </label> <br />
        <select name="etatJoueur">
                <option value="P">Présent</option>
                <option value="B">Bléssé</option>
                <option value="N">Non-Licencié</option>
                <option value="S">Suspendu</option>
                <option value="A">Absent</option>    
        </select> <br />
    </div>
    
    <div class="row ml-3">
            <label>Date : </label> <input type="date" name="jour" value="" required="required" />
    </div> 
    
    <div class="row mt-3 ml-3">
        <input type="submit" name="gestionAbsence" value="valider" class="btn btn-success mr-3" />
    </div>
    </form>
</div>
