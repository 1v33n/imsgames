<html lang="de">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width = device-width, initial-scale = 1.0" />
    </head>

    <body>
        <main class="grid">
            <article>
                <div class="embed-responsive embed-responsive-16by9">
                    <object class="embed-responsive-item" data="/games/<?= $game->dir; ?>/index.html" width="500" height="200"></object>
                </div>
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
            </article>
        </main>
    </body>
</html>
