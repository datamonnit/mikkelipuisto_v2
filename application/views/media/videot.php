<?php $i = 1; ?>
<div id="myModal" class="modal">
  <div class="modal-content">
    <div class="caption-container">
      <p id="caption"></p>
    </div>
    <?php foreach ($videos as $video): ?>
    <div class="mySlides">
      <iframe width=100% height=60% src="https://www.youtube.com/embed/K9u8zFVjX1g" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
    <?php endforeach; ?>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
</div>

<div class="fixed-bar">
  <ul id="carousel" class="elastislide-list">

    <?php foreach ($videos as $video): ?>
      <li><a href="#"><img class="demo" src="https://img.youtube.com/vi/<?php echo $video->url; ?>/1.jpg" data-id="<?php echo $video->id; ?>" onclick="openModal();currentSlide(<?php echo $i++; ?>)"/></a></li>
    <?php endforeach; ?>
  </ul>
</div>
