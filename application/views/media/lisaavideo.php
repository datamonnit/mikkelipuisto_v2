<?php if($this->session->userdata('logged_in')) : ?>
  <?php echo validation_errors(); ?>
  <?php if (isset($error)) echo $error;?>

      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <div class="form-group">
          <h1 class="text-center">Lisää video</h1>
             <?php echo form_open('Video_Category/do_video_upload');?>
            <br>

          </div>
            <p>Valitse kategoria:</p>
          <div>
        <select name="video_category_id">
          <?php foreach ($video_categories as $video_category): ?>
          <option value="<?php echo $video_category->id; ?>"><?php echo $video_category->name; ?></option>
          <?php endforeach; ?>
        </select>
        <div>
      <br>
          <div class="form-group">
            <input id="video_id" type="text" name="linkki" class="form-control" placeholder="Lisää videon Youtube-linkki" onchange="teeJotainLinkille(this.value)" required autofocus>
          </div>
          <button type="submit" value="value" class="btn btn-primary btn-block">Seuraava</button>
        </div>
      </div>
    <?php echo form_close(); ?>

  <?php endif; ?>
  <br>
  <hr>
  <script type="text/javascript">
    function teeJotainLinkille(url){
      var id = url.slice(url.length-11, url.length)
      console.log(url);
      console.log(id);
      document.getElementById('video_id').value = id;
    }

  </script>
