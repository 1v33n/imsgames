<div class="game-wrapper">
    <button id="prevent" ><a href="#game-container">FOCUS</a></button>
    <div class="game-container" id="game-container">
        <object class="game" data="/games/<?= $game->dir; ?>/index.html"></object>
    </div>
    <button id="allow" ><a href="#game-container">UNFOCUS</a></button>
    <div class="comments">
        <?php if (empty($comments)): ?>
            <div class="dhd">
                <h2 class="item title">Kein Kommentar gefunden.</h2>
            </div>
        <?php else: ?>
            <?php foreach ($comments as $comment): ?>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <?php foreach($users as $user):?>
                            <?php if ($user->id == $comment->user_id) : ?>
                                 <?= $user->username; ?>                               
                            <?php endif; ?> 
                        <?php endforeach; ?>
                    </div>
                    <div class="panel-body">
                        <?= $comment->comment; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <div class="buttons">
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
<script src="/js/scrolldisable.js"></script>
