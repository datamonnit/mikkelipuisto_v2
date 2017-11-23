<?php if($this->session->userdata('logged_in')) : ?>

  <?php echo form_open('users/logout'); ?>
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <button type="submit" class="btn btn-primary btn-block">Kirjaudu ulos</button>
      </div>
    </div>
  <?php echo form_close(); ?>

<?php else : ?>

  <?php echo validation_errors(); ?>

    <?php echo form_open('users/login'); ?>
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <h1 class="text-center"><?php echo $title; ?></h1>
          <div class="form-group">
            <input type="text" name="username" class="form-control" placeholder="Käyttäjänimi" required autofocus>
          </div>
          <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Salasana" required autofocus>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Seuraava</button>
        </div>
      </div>
    <?php echo form_close(); ?>

<?php endif; ?>
<br>
<hr>
