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
<?php foreach ($categories as $category): ?>
<div class="row">
    <div class="col-md-7">
        <a href="media/category/<?php echo $category->id; ?>">
            <img src="<?php echo base_url(); ?>uploads/thumbnails/<?php echo $images[0]->name; ?>" style="float: left; width: 49%; margin-right: 1%; margin-bottom: 0.5em;">
            <img src="<?php echo base_url(); ?>uploads/thumbnails/<?php echo $images[1]->name; ?>" style="float: left; width: 49%; margin-right: 1%; margin-bottom: 0.5em;">
        </a>
    </div>
    <div class="col-md-5">
        <h4><?php echo $category->name; ?></h4>
        <p><?php echo $category->text; ?></p>
        <a class="btn btn-primary" href="media/category/<?php echo $category->id; ?>">Katso lisää<span class="glyphicon glyphicon-chevron-right"></span></a>
        <br></br>
        <?php if($this->session->userdata('logged_in')) : ?>
        <a class="btn btn-success" href="media/lisaakuva/">Lisää kuvia<span class="glyphicon glyphicon-chevron-right"></span></a>
        <a class="btn btn-warning" href="media/poistajamuokkaa">Muokkaa tai poista videoita<span class="glyphicon glyphicon-chevron-right"></span></a>
        <?php endif; ?>
    </div>
</div>
<hr>
<?php endforeach; ?>
