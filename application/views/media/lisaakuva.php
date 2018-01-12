  <?php if($this->session->userdata('logged_in')) : ?>
    <?php echo validation_errors(); ?>
    <?php if (isset($error)) echo $error;?>

        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <div class="form-group">
            <h1 class="text-center">Lataa kuvia</h1>
            <?php echo form_open_multipart('upload/do_upload');?>
              <input type="file" name="userfile" size="20" />
              <br>
            </div>
              <input type="text" name="category_id" class="form-control" placeholder="Nimi" required autofocus>
            <br>
            <div class="form-group">
              <input type="text" name="text" class="form-control" placeholder="Kuvaus" required autofocus>
            </div>
            <button type="submit" value="upload" class="btn btn-primary btn-block">Seuraava</button>
          </div>
        </div>
      <?php echo form_close(); ?>

    <?php endif; ?>
    <br>
    <hr>
