<h2><?= $title ?></h2>

<small>Posted on: <?= $post['created_at']; ?></small>

<p><?= $post['body']; ?></p>

<hr>

<div class="row">
	<div class="col-md-1">
		<a href="<?= base_url(); ?>posts/edit/<?= $post['slug']; ?>" class="btn btn-info">Edit</a>
	</div>
	
	<div class="col-md-1">
		<?= form_open('posts/delete/' . $post['id']); ?>
		  <button type="submit" class="btn btn-danger">Delete</button>
		</form>
	</div>
</div>
