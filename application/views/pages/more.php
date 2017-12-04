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
<!--ul id="carousel" class="elastislide-list">
  <li><a href="#"><img class="demo" src="uploads/thumbnails/test_tn.png" alt="image01" onclick="openModal();currentSlide(1)"/></a></li>
  <li><a href="#"><img class="demo" src="uploads/thumbnails/test1_tn.png" alt="image02" onclick="openModal();currentSlide(2)" /></a></li>
  <li><a href="#"><img class="demo" src="uploads/thumbnails/test2_tn.png" alt="image03" onclick="openModal();currentSlide(3)"/></a></li>
  <li><a href="#"><img class="demo" src="uploads/thumbnails/test4_tn.png" alt="image03" onclick="openModal();currentSlide(4)"/></a></li>
</ul-->

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

    <div class="thumbs">
        <ul id="carousel" class="elastislide-list">
        	<li><a href="#"><img class="demo" src="uploads/thumbnails/test_tn.png" alt="image01" onclick="openModal();currentSlide(1)"/></a></li>
        	<li><a href="#"><img class="demo" src="uploads/thumbnails/test1_tn.png" alt="image02" onclick="openModal();currentSlide(2)" /></a></li>
        	<li><a href="#"><img class="demo" src="uploads/thumbnails/test2_tn.png" alt="image03" onclick="openModal();currentSlide(3)"/></a></li>
          <li><a href="#"><img class="demo" src="uploads/thumbnails/test4_tn.png" alt="image03" onclick="openModal();currentSlide(4)"/></a></li>
        </ul>
      </div>
      

  </div>
</div>
</div>
