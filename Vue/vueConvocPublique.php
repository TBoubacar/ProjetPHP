<table class="card table table-striped">
<thead>
    <tr>
        <th> DATE </th>
        <th>COMPETITION</th>
        <th>EQUIPE ADVERSE</th>
        <th>SITE</th>
        <th>TERRAIN</th>
        <th>EQUIPE</th>
    </tr>
</thead>
<tbody>
    <?php foreach ($convocations as $convoc):?>
	<tr>
        <td> <?= $convoc['titre'] ?</td>
        <td>D1-Groupe A</td>
        <td>ANGERS NDC 2</td>
        <td>ANGERS</td>
        <td>STADE DE LA CHSNAIE 1</td>
        <td>SENIORS_A</td>
    </tr>
    <?php endforeach; ?>
</tbody>
</table>