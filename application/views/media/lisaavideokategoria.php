<?php if($this->session->userdata('logged_in')) : ?>
  <?php echo validation_errors(); ?>
  <?php if (isset($error)) echo $error;?>

      <div class="row">
        <div class="col-md-4 col-md-offset-4">

          <h1 class="text-center">Lisää uusi video kategoria</h1>
          <?php echo form_open_multipart('category/do_upload');?>
            <div class="form-group">
              <input type="text" name="name" class="form-control" placeholder="Nimi" required autofocus><br>
            </div>
            <div class="form-group">
              <input type="text" name="text" class="form-control" placeholder="Kuvaus" required autofocus><br>
            </div>
            <button type="submit" value="value" class="btn btn-primary btn-block">Seuraava</button>
        </div>
      </div>
    <?php echo form_close(); ?>

  <?php endif; ?>
  <br>
  <hr>
