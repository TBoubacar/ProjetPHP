<?php $this->titre = "Joueurs du Club"; ?>

<h1>Liste des effectifs du Club (<?= $club ?>)</h1>
<table class='card table table-striped'>
    <thead>
        <tr>
            <th> NOM </th>
            <th>PRENOM</th>
        </tr>
    </thead>
    <tbody>

    <?php foreach ($joueurs as $joueur) :?>
        <tr>
            <td><?=$joueur['nom']?></td>
            <td><?=$joueur['prenom']?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>