<html>
  <head>
  <title>Mikkelipuisto</title>
  <link rel="stylesheet" href="https://bootswatch.com/3/flatly/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css">
  </head>
  <body>
  <nav class="navbar navbar-inverse">
    <div class="container">
      <div class="navbar-header">
        <div class=" main_logo">
           <a href='etusivu' class="logo_li">
             <span class='span-logo'>
                <img style="height: 80px; margin-top: 4px" img src='<?php echo base_url(); ?>assets/images/puisto_logo.png'/>
             </span>
           </a>
         </div>
      </div>
      <div id="navbar">
        <ul class="nav navbar-nav navbar-left">
          <li><a href="<?php echo base_url(); ?>">ETUSIVU</a></li>
          <li><a href="<?php echo base_url(); ?>media">MEDIA</a></li>
          <li><a href="<?php echo base_url(); ?>yhteystiedot">YHTEYSTIEDOT</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="login"><a href="<?php echo base_url(); ?>kirjaudu">KIRJAUDU SISÄÄN
              <img src="<?php echo base_url(); ?>assets/images/lock.png" alt="">
            </a></li>
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
