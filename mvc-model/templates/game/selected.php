<html lang="de">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width = device-width, initial-scale = 1.0" />
    </head>

    <body>
        <main class="grid">
            <article>
                <div class="embed-responsive embed-responsive-16by9">

                <object data="/games/<?= $game->site; ?>/index.html" class="embed-responsive-item">
                </object>
            </div>

              <a href="/kommentar/create?id=<?= $game->id; ?>"><button type="submit">Neuer Kommentar</button></a>
              <?php if (empty($kommentarliste)): ?>
              <div class="dhd">
                <h2 class="item title">Hoopla! Kein Kommentar gefunden.</h2>
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
