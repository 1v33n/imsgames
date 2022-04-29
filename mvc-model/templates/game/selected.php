<div class="game-wrapper">
    <div class="game-container">
        <object class="game" data="/games/<?= $game->dir; ?>/index.html"></object>
    </div>

    <form action="/comment/create?id=<?= $game->id; ?>" class="comment-form" method="post">
        <textarea class="comment-textarea" name="comment" id="comment" placeholder="Kommentar hinzufügen"></textarea>
        <button type="submit">Neuer Kommentar</button>
    </form>

    <div class="comments">
        <?php if (empty($kommentarliste)): ?>
            <div class="comment-card">
                <h3>Es gibt zurzeit keine Kommentare</h3>
            </div>
        <?php else: ?>
            <?php foreach ($kommentarliste as $kommentar): ?>
                <div class="comment-card">
                    <div class="comment-user">
                        <i class="bx bxs-user-circle bx-cu"></i>
                    </div>

                    <div class="comment-content">
                        <h4 class="comment-username">dennymarti</h4>
                        <p class="comment-text"><?= $kommentar->kommentar; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>
