<h1>Get all Articles with the tag: <?= $this->Text->ToList($tags); ?></h1>

<section>
	<?php foreach ($articles as $article) { ?>
		<article>
			<!-- <h4><?= $this->Html->link($article->title, "http://www.google.com") ?></h4> -->
			<h4><?= h($article->title) ?></h4>
			<!-- <small><?= h($article->slug) ?></small> -->
			<h6><?= h($article->slug) ?></h6>
			<p><?= $this->Text->autoParagraph($article->body); ?></p>
		</article>
		<hr>		
	<?php }	?>
</section>