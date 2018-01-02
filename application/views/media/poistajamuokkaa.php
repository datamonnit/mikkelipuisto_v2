<?php $i = 1; ?>
<div id="myModal" class="modal">
  <div class="modal-content">
    <div class="caption-container">
      <p id="caption"></p>
    </div>
    <?php if($this->session->userdata('logged_in')) : ?>
    <?php foreach ($images as $image): ?>
    <div class="mySlides">
            <img src="<?php echo base_url(); ?>uploads/images/<?php echo $image->name; ?>" style="width:100%"><p>Poista</p>>
    </div>
    <?php endforeach; ?>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
</div>

<div class="fixed-bar">
  <ul id="carousel" class="elastislide-list">

    <?php foreach ($images as $image): ?>
      <li><a href="#"><img class="demo" src="<?php echo base_url(); ?>uploads/thumbnails/<?php echo $image->name; ?>" alt="<?php echo $image->text; ?>" onclick="openModal();currentSlide(<?php echo $i++; ?>)"/></a></li>
    <?php endforeach; ?>
  </ul>
</div>
