<html>
  <head>
  <title>Mikkelipuisto</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://bootswatch.com/3/flatly/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  </head>
  <body>
  <nav class="navbar navbar-inverse">
    <div class="container">
      <div class="navbar-header">
       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div class=" main_logo">
           <a href='<?php echo base_url(); ?>' class="logo_li">
             <span class='span-logo'>
                <img style="height: 80px; margin-top: 4px" src='<?php echo base_url(); ?>assets/images/puisto_logo.png'/>
             </span>
           </a>
         </div>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-left">
          <li><a href="<?php echo base_url(); ?>">Etusivu</a></li>
          <li><a href="<?php echo base_url(); ?>media">Media</a></li>
          <li><a href="<?php echo base_url(); ?>yhteystiedot">Yhteystiedot</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <?php if($this->session->userdata('logged_in')) : ?>
            <li class="login">
              <a href="<?php echo base_url(); ?>kirjaudu">Kirjaudu ulos
                <img src="<?php echo base_url(); ?>assets/images/lock.png" alt="">
              </a>
            </li>
            <?php else : ?>
            <li class="login">
              <a href="<?php echo base_url(); ?>kirjaudu">Kirjaudu sisään
                <img src="<?php echo base_url(); ?>assets/images/lock.png" alt="">
              </a>
            </li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">

    <?php if($this->session->flashdata('login_success')): ?>
      <?php echo '<p class="alert alert-success">'.$this->session->flashdata('login_success').'</p>'; ?>
    <?php endif; ?>
    <?php if($this->session->flashdata('login_failed')): ?>
      <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
    <?php endif; ?>
    <?php if($this->session->flashdata('user_loggedout')): ?>
      <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
    <?php endif; ?>
