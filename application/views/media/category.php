<?php var_dump($images); ?>
<?php $i = 1; ?>
<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">
    <?php foreach ($images as $image): ?>
    <div class="mySlides">
        <div class="numbertext">1 / 4</div>
            <img src="<?php echo base_url(); ?>uploads/images/<?php echo $image->name; ?>" style="width:100%">
    </div>
    <?php endforeach; ?>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>
  </div>
</div>

<div class="fixed-bar">
  <ul id="carousel" class="elastislide-list">

    <?php foreach ($images as $image): ?>
      <li><a href="#"><img class="demo" src="<?php echo base_url(); ?>uploads/thumbnails/<?php echo $image->name; ?>" alt="<?php echo $image->text; ?>" onclick="openModal();currentSlide(<?php echo $i++; ?>)"/></a></li>
    <?php endforeach; ?>
  </ul>
</div>
