<?php $i = 1; ?>
<div id="myModal" class="modal">
  <div class="modal-content">
    <div class="caption-container">
      <p id="caption"></p>
    </div>
    <?php foreach ($videos as $video): ?>
    <div class="mySlides">
        <iframe style="float: left; width: 319px; height:218px; margin-right: 1%; margin-bottom: 0.5em;" src="https://www.youtube.com/embed/lTZlHhvU3U8"></iframe>
    </div>
    <?php endforeach; ?>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
</div>

<div class="fixed-bar">
  <ul id="carousel" class="elastislide-list">

    <?php foreach ($videos as $video): ?>
      <li><a href="#"><img class="demo" src="<?php echo base_url(); ?>uploads/thumbnails/<?php echo $video->name; ?>" data-id="<?php echo $video->id; ?>" alt="<?php echo $video->text; ?>" onclick="openModal();currentSlide(<?php echo $i++; ?>)"/></a></li>
    <?php endforeach; ?>
  </ul>
</div>
