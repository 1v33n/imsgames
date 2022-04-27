<body>
    <div class=" container game-cont">
        <div class=""> 
            <iframe class="responsive-iframe " src="/games/<?= $game->dir; ?>/index.html">  </iframe> 
        </div>
        <div class="">
            <form action="/comment/create?id=<?= $game->id; ?>" method="post">
                <textarea name="comment" id="" cols="20" rows="5"></textarea>
                <button type="submit">Neuer Kommentar</button>
            </form>

            <?php if (empty($kommentarliste)): ?>
                <div class="dhd">
                    <h2 class="item title">Kein Kommentar gefunden.</h2>
                </div>
            <?php else: ?>
                <?php foreach ($kommentarliste as $kommentar): ?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <?= $kommentar->titel; ?>
                        </div>
                        <div class="panel-body">
                            <?= $kommentar->kommentar; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
   

</body>
