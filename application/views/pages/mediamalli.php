<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><b>MEDIA</b>
              <small><b>Kuvat ja videot Mikkelipuistosta eri aiheittain.</b></small>
              <hr>
        </h1>
    </div>
</div>

<h2>KUVAT</h2>
<hr>

<div class="row">
    <div class="col-md-7">
        <a href="more">
            <img src="assets/images/test1.jpg" style="float: left; width: 49%; margin-right: 1%; margin-bottom: 0.5em;">
            <img src="assets/images/test2.jpg" style="float: left; width: 49%; margin-right: 1%; margin-bottom: 0.5em;">
        </a>
    </div>
    <div class="col-md-5">
        <h4>Palvelurakennus</h4>
        <p>Palvelurakennus Greenerin rakentaminen.</p>
        <a class="btn btn-primary" href="media/category">Katso lisää<span class="glyphicon glyphicon-chevron-right"></span></a>
        <br></br>
        <?php if($this->session->userdata('logged_in')) : ?>
        <a class="btn btn-success" href="more">Lisää kuvia<span class="glyphicon glyphicon-chevron-right"></span></a>
        <a class="btn btn-warning" href="more">Muokkaa tai poista videoita<span class="glyphicon glyphicon-chevron-right"></span></a>
        <?php endif; ?>
    </div>
</div>
<hr>

<div class="row">
    <div class="col-md-7">
        <a href="more">
            <img src="assets/images/kukka1.png" style="float: left; width: 49%; margin-right: 1%; margin-bottom: 0.5em;">
            <img src="assets/images/kukka2.png" style="float: left; width: 49%; margin-right: 1%; margin-bottom: 0.5em;">
        </a>
    </div>
    <div class="col-md-5">
        <h4>Puutarhapuisto</h4>
        <p>Kuvia puutarhapuistosta.</p>
        <a class="btn btn-primary" href="media/category">Katso lisää<span class="glyphicon glyphicon-chevron-right"></span></a>
        <br></br>
        <?php if($this->session->userdata('logged_in')) : ?>
        <a class="btn btn-success" href="more">Lisää kuvia<span class="glyphicon glyphicon-chevron-right"></span></a>
        <a class="btn btn-warning" href="more">Muokkaa tai poista videoita<span class="glyphicon glyphicon-chevron-right"></span></a>
        <?php endif; ?>
        </div>
    </div>
    <br>

<h2>VIDEOT</h2>
<hr>

<div class="row">
    <div class="col-md-7">
        <iframe width="540" height="302" src="https://www.youtube.com/embed/q2RDUYvk3Z0" frameborder="0" allowfullscreen></iframe>
    </div>
      <div class="col-md-5">
        <h4>Greenerin esittelyvideo</h4>
        <a href="https://www.youtube.com/watch?v=q2RDUYvk3Z0">Linkki videoon</a>
        <br></br>
        <?php if($this->session->userdata('logged_in')) : ?>
        <a class="btn btn-success" href="more">Lisää video<span class="glyphicon glyphicon-chevron-right"></span></a>
        <a class="btn btn-warning" href="more">Muokkaa tai poista videoita<span class="glyphicon glyphicon-chevron-right"></span></a>
        <?php endif; ?>
    </div>
  </div>
  <br>
<hr>
