<h2><?= $title ?></h2>
<br>

<?php foreach($posts as $post) : ?>
	<h3><?= $post['title']; ?></h3>

	<small>Posted on: <?= $post['created_at']; ?></small>

	<p><?= $post['body']; ?></p>

	<p><a class="btn btn-primary" href="<?= site_url('/posts/' . $post['slug']); ?>">Read More</a></p>
	<hr>
	<br>
<?php endforeach; ?>