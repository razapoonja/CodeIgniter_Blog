<h2><?= $title ?></h2>
<br>

<?= validation_errors(); ?>

<?= form_open('posts/update'); ?>
  <input type="hidden" name="id" value="<?= $post['id']; ?>">

  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" value="<?= $post['title']; ?>" name="title" id="title">
  </div>
  <div class="form-group">
    <label for="editor">Body</label>
    <textarea class="form-control" name="body" id="editor" rows="5"><?= $post['body']; ?></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>