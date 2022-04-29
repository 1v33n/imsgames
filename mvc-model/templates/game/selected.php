<div class="game-wrapper">
    <div class="game-container">
        <object class="game" data="/games/<?= $game->dir; ?>/index.html"></object>
    </div>

    <div class="comments">
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
    <article>
        <div class="embed-responsive embed-responsive-16by9">

        </div>
        <form action="/comment/create?id=<?= $game->id; ?>" method="post">
            <textarea name="comment" id="comment" cols="20" rows="5"></textarea>
            <button type="submit">Neuer Kommentar</button>
        </form>
    </article>
</div>
