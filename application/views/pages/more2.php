<div class="row">
  <div class="column">
    <img src="uploads/thumbnails/test_tn.png" onclick="openModal();currentSlide(1)" class="hover-shadow">
  </div>
  <div class="column">
    <img src="uploads/thumbnails/test1_tn.png" onclick="openModal();currentSlide(2)" class="hover-shadow">
  </div>
  <div class="column">
    <img src="uploads/thumbnails/test2_tn.png" onclick="openModal();currentSlide(3)" class="hover-shadow">
  </div>
  <div class="column">
    <img src="uploads/thumbnails/test4_tn.png" onclick="openModal();currentSlide(4)" class="hover-shadow">
  </div>
</div>

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 4</div>
      <img src="assets/images/test.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 4</div>
      <img src="assets/images/test1.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 4</div>
      <img src="assets/images/test2.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">4 / 4</div>
      <img src="assets/images/test4.jpg" style="width:100%">
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>

    <div class="column">
      <img class="demo" src="uploads/thumbnails/test_tn.png" onclick="currentSlide(1)" alt="Nature">
    </div>

    <div class="column">
      <img class="demo" src="uploads/thumbnails/test1_tn.png" onclick="currentSlide(2)" alt="Trolltunga">
    </div>

    <div class="column">
      <img class="demo" src="uploads/thumbnails/test2_tn.png" onclick="currentSlide(3)" alt="Mountains">
    </div>

    <div class="column">
      <img class="demo" src="uploads/thumbnails/test4_tn.png" onclick="currentSlide(4)" alt="Lights">
    </div>
  </div>
</div>
