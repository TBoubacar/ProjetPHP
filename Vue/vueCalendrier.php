 <?php $this->titre = "Calendrier"; ?>

 <div class='card table table-striped'>
            <div class="row">
                <div class="col">Date-Lieu/Jour</div>
                <div class="col">LUN</div>
                <div class="col">MAR</div>
                <div class="col">MER</div>
                <div class="col">JEU</div>
                <div class="col">VEN</div>
                <div class="col">SAM</div>
                <div class="col">DIM</div>
            </div>
            <?php foreach ($convocations as $convoc) :?>
            <div class="row">
                <div class="col"><?=$convoc['jour'] ." ". $convoc["adresse"]?></div>
                <div class="col">-</div>
                <div class="col">-</div>
                <div class="col">-</div>
                <div class="col">-</div>
                <div class="col">-</div>
                <div class="col">Challenger VS <?= $convoc["nomEquipeAdverse"] ?> </div>
            </div>
            <?php endforeach; ?>
        

        
    </div>