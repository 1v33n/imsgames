<article class="hreview open special">
	<?php if (empty($games)): ?>
		<div class="dhd">
			<h2 class="item title">Hoopla! Es gibt zurzeit keine Games</h2>
		</div>
	<?php else: ?>
		<?php foreach ($games as $game): ?>
			<div class="panel panel-default mb-5">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-sm">
							<h4><div class="panel-heading font-weight-bold">Name:<?= $game->name; ?></div></h4>
							<div class="panel-body">
								<p class="description">Verzeichnis: <?= $game->dir; ?> Beschreibung: <?= $game->description; ?></p>
							</div>
						</div>
						<div class="col-sm">
							<div class="container d-flex flex-column">
								<a href="/game/selected?id=<?= $game->id; ?>"><button class="btn btn-primary">Ansehen</button></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	<?php endif; ?>
</article>