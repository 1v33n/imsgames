<div class="game-wrapper">
    <button id="prevent" ><a href="#game-container">FOCUS</a></button>
    <div class="game-container" id="game-container">
        <object class="game" data="/games/<?= $game->dir; ?>/index.html"></object>
    </div>

    <button id="allow" ><a href="#game-container">UNFOCUS</a></button>
    <form action="/comment/create?id=<?= $game->id; ?>" class="comment-form" method="post">
        <textarea class="comment-textarea" name="comment" id="comment" placeholder="Kommentar hinzufügen"></textarea>
        <button type="submit">Neuer Kommentar</button>
    </form>
    <div class="comments">
        <?php if (empty($comments)): ?>
            <div class="comment-card">
                <h2 class="item title">Kein Kommentar gefunden.</h2>
            </div>
        <?php else: ?>
            <?php foreach ($comments as $comment): ?>
                <div class="comment-card">
                    <div class="comment-user">
                        <i class="bx bxs-user-circle bx-cu"></i>
                    </div>
                    <div class="comment-content">
                        <?php foreach($users as $user):?>
                            <?php if ($user->id == $comment->user_id) : ?>
                                <h4  class="comment-username"> <?= $user->username; ?></h4>                          
                            <?php endif; ?> 
                        <?php endforeach; ?>                        
                        <p class="comment-text"><?= $comment->comment; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
<script src="/js/scrolldisable.js"></script>
