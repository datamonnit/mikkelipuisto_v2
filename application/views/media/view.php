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
            <img src="<?php echo base_url(); ?>uploads/thumbnails/<?php echo $images[0]->name; ?>" style="float: left; width: 49%; margin-right: 1%; margin-bottom: 0.5em;">
            <img src="<?php echo base_url(); ?>uploads/thumbnails/<?php echo $images[1]->name; ?>" style="float: left; width: 49%; margin-right: 1%; margin-bottom: 0.5em;">
    </div>
    <div class="col-md-5">
       <?php if($this->session->userdata('logged_in')) : ?>
         <?php echo form_open('category/delete_cat/'.$category->id); ?>
          <input type="submit" value="Poista kategoria" class="btn btn-danger" onclick="return confirm('Haluatko varmasti poistaa kategorian?')">
        </form>
        <a class="btn btn-success" href="category/lisaakategoria/">Lisää kategoria<span class="glyphicon glyphicon-chevron-right"></span></a>
        <?php endif; ?>
          <h4><?php echo $category->name; ?></h4>
          <p><?php echo $category->text; ?></p>
          <a class="btn btn-primary" href="category/category/<?php echo $category->id; ?>">Katso lisää<span class="glyphicon glyphicon-chevron-right"></span></a>
          <br></br>
        <?php if($this->session->userdata('logged_in')) : ?>
          <a class="btn btn-success" href="media/lisaakuva/">Lataa kuvia<span class="glyphicon glyphicon-chevron-right"></span></a>
          <a class="btn btn-warning" href="media/poistajamuokkaa/<?php echo $category->id; ?>">Muokkaa tai poista<span class="glyphicon glyphicon-chevron-right"></span></a>
        <?php endif; ?>
    </div>
</div>
<hr>
<?php endforeach; ?>

<h2>VIDEOT</h2>
<hr>
<div class="row">
    <div class="col-md-7">
    </a>
</div>
