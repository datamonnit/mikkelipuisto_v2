<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><b>MEDIA</b>
              <small><b>Kuvat ja videot Mikkelipuistosta eri aiheittain.</b></small>
              <hr>
        </h1>
    </div>
</div>

<h2>KUVAT
<?php if($this->session->userdata('logged_in')) : ?>
        <a class="btn btn-success" href="category/lisaakategoria/">Lisää uusi kategoria<span class="glyphicon glyphicon-chevron-right"></span></a>
        <a class="btn btn-success" href="media/lisaakuva/">Lataa kuvia<span class="glyphicon glyphicon-chevron-right"></span></a>
<?php endif; ?>
</h2>
<hr>
<?php foreach ($categories as $category): ?>
<div class="row">
    <div class="col-md-7">
      <?php $laskuri = 0; ?>
      <?php foreach ($images as $image): ?>
        <?php
          if ($category->id == $image->category_id) {
            if ($laskuri < 2) {
              ?><img src="<?php echo base_url(); ?>uploads/thumbnails/<?php echo $image->name; ?>" style="float: left; width: 49%; margin-right: 1%; margin-bottom: 0.5em;"><?php
              $laskuri++;
            }
          }
        ?>
      <?php endforeach; ?>
    </div>
    <div class="col-md-5">
       <?php if($this->session->userdata('logged_in')) : ?>
         <?php echo form_open('category/delete_cat/'.$category->id); ?>
          <input type="submit" value="Poista kategoria" class="btn btn-danger" onclick="return confirm('Haluatko varmasti poistaa kategorian?')">
        </form>
        <?php endif; ?>
          <h4><?php echo $category->name; ?></h4>
          <p><?php echo $category->text; ?></p>
          <a class="btn btn-primary" href="category/category/<?php echo $category->id; ?>">Katso kuvia<span class="glyphicon glyphicon-chevron-right"></span></a>
          <br></br>
        <?php if($this->session->userdata('logged_in')) : ?>
          <a class="btn btn-warning" href="media/poistajamuokkaa/<?php echo $category->id; ?>">Muokkaa tai poista kuvia<span class="glyphicon glyphicon-chevron-right"></span></a>
        <?php endif; ?>
    </div>
</div>
<hr>
<?php endforeach; ?>

<h2>VIDEOT
  <?php if($this->session->userdata('logged_in')) : ?>
          <a class="btn btn-success" href="video_category/lisaavideokategoria/">Lisää uusi kategoria<span class="glyphicon glyphicon-chevron-right"></span></a>
          <a class="btn btn-success" href="media/lisaavideo/">Lisää videoita<span class="glyphicon glyphicon-chevron-right"></span></a>
  <?php endif; ?></h2>
<hr>

<?php foreach ($video_categories as $video_category): ?>
<div class="row">
    <div class="col-md-7">
        <?php $laskuri = 0; ?>
        <?php foreach ($videos as $video): ?>
          <?php
            if ($video_category->id == $video->video_categories_id) {
              if ($laskuri < 2) {
                ?><img src="https://img.youtube.com/vi/<?php echo $video->url; ?>/0.jpg" style="float: left; width: 49%; margin-right: 1%; margin-bottom: 0.5em;"><?php
                $laskuri++;
              }
            }
          ?>
        <?php endforeach; ?>
    </div>
    <div class="col-md-5">
             <?php if($this->session->userdata('logged_in')) : ?>
               <?php echo form_open('video_category/delete_video_cat/'.$video_category->id); ?>
                <input type="submit" value="Poista kategoria" class="btn btn-danger" onclick="return confirm('Haluatko varmasti poistaa kategorian?')">
        </form>
                <?php endif; ?>
            <h4><?php echo $video_category->name; ?></h4>
            <p><?php echo $video_category->text; ?></p>
            <a class="btn btn-primary" href="media/videot/<?php echo $video_category->id; ?>">Katso videoita<span class="glyphicon glyphicon-chevron-right"></span></a>
          <br></br>
        <?php if($this->session->userdata('logged_in')) : ?>
          <a class="btn btn-warning" href="media/poistajamuokkaavideoita/<?php echo $video_category->id; ?>">Poista videoita<span class="glyphicon glyphicon-chevron-right"></span></a>
        <?php endif; ?>
    </div>
</div>
<hr>

<?php endforeach; ?>
