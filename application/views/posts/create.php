<h2><?= $title ?></h2>
<br>

<?= validation_errors(); ?>

<?= form_open('posts/create'); ?>
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" name="title" id="title">
  </div>
  <div class="form-group">
    <label for="editor">Body</label>
    <textarea class="form-control" name="body" id="editor"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>