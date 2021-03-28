<?php $this->titre = "Convocations Publiées"; ?>

<table class="card table table-striped">
<thead>
    <tr>
        <th> DATE </th>
        <th>EQUIPE ADVERSE</th>
        <th>SITE</th>
    </tr>
</thead>
<tbody>
    <?php foreach ($convocations as $convoc):
        $id=$convoc['IdConvocation'];
    ?>
        
	<tr>
        <td> <?= $convoc['jour'] ?></td>
        <td><?= $convoc['nomEquipeAdverse'] ?></td>
        <td><?= $convoc['adresse'] ?></td>
        <td><a class="btn btn-primary" href='index.php?action=listeJoueurs&idConvoc=<?="$id"?>'>Voir les joueurs</a></td>
    </tr>
    <?php endforeach; ?>
</tbody>
</table>
</br>
</br>

<?php if(count($joueurs) !== 0): ?>

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
<?php endif; ?>

