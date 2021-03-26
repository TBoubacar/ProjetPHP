<table class="card table table-striped">
<thead>
    <tr>
        <th> DATE </th>
        <th>EQUIPE ADVERSE</th>
        <th>SITE</th>
        <th>EQUIPE</th>
        <th>CATEGORIE</th>
        <th>COMPETITION</th>
    </tr>
</thead>
<tbody>
    <?php foreach ($convocations as $convoc):?>
	<tr>
        <td> <?= $convoc['jour'] ?></td>
        <td><?= $convoc['nomEquipeAdverse'] ?></td>
        <td><?= $convoc['adresse'] ?></td>
        <td>SENIOR_A</td>
        <td>SENIOR</td>
        <td>COUPE DU MONDE</td>
    </tr>
    <?php endforeach; ?>
</tbody>
</table>